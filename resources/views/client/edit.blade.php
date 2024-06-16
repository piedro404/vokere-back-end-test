<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg">Atualizar Cliente {{ $client->name }}</h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-3">
                <div class="flex items-center justify-center p-12">
                    <div class="mx-auto w-full max-w-[550px] bg-white">
                        @include('includes.validations-form')

                        <form action="{{ route('client.update', ['id' => $client->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            @include('client.partials.form')
                            <div>
                                <button type="submit"
                                    class="hover:shadow-form w-full rounded-md bg-blue-500 hover:bg-blue-700 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                    Atualizar 
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
