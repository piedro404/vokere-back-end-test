<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'date_of_birth',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'user_permissions', 'user_id', 'permission_id')->withTimestamps();
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id', 'id');
    }

    public function assignAddress(array $location, $id)
    {
        $address = Address::where('user_id', $id)->first();

        if (!$address) {
            $location['user_id'] = $id;
            Address::create($location);
        } else {
            $address->update($location);
        }
    }

    public function assignPermission(string $permission): void
    {
        $permission = Permission::firstOrCreate(['name' => $permission]);

        $this->permissions()->syncWithoutDetaching([$permission->id]);
    }

    public function hasPermission(string $permission): bool
    {
        return $this->permissions()->where('name', $permission)->exists();
    }

    public function getUsersClients($name, $created_at)
    {
        $clients = $this::whereHas('permissions', function ($query) {
            $query->where('name', 'client');
        })->where(function ($query) use ($name, $created_at) {
            if ($name) {
                $query->where('name', 'LIKE', "%{$name}%");
            }
            if ($created_at) {
                $query->where('created_at', ">=", "{$created_at} 00:00:00", "AND", 'created_at', "<=", "{$created_at} 23:59:59");
            }
        })->simplePaginate(10);

        return $clients;
    }
}
