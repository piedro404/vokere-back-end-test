<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg">Lista de Clientes</h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-3">
                <div class="relative">
                    <label for="Search" class="sr-only"> Search </label>

                    <input type="text" id="Search" placeholder="Pesquisar por nome ou data..."
                        class="w-full rounded-md py-2.5 pe-10 sm:text-sm" />

                    <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                        <button type="button" class="text-gray-600 hover:text-gray-700">
                            <span class="sr-only">Search</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">ID</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nome</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Data de Nascimento
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Data de Cadastro</th>
                                <th class="px-4 py-2"></th>
                                <th class="px-4 py-2"></th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($clients as $client)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $client->id }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $client->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $client->formated_date_of_birth }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $client->formated_created_at }}</td>
                                    <td class="whitespace-nowrap px-4 py-2">
                                        <a href="#"
                                            class="inline-block rounded bg-blue-600 px-4 py-2 text-xs font-medium text-white hover:bg-blue-700">
                                            Editar
                                        </a>
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2">
                                        <a href="#"
                                            class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">
                                            Excluir
                                        </a>    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
