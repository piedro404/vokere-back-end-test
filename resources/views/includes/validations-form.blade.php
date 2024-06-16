@if ($errors->any())
    <div class="flex mb-4 border-l-4 p-3 border-l-yellow-600 bg-yellow-400">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
