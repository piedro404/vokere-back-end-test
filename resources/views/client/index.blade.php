<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg">Lista de Clientes - Exibindo {{ $clients->count() }} @if ($clients->count() > 1)
                            clientes
                        @else
                            cliente
                        @endif
                    </h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-3">
                <div class="relative">
                    <label for="Search" class="sr-only">Search</label>
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
                                <th class="px-4 py-2 flex justify-center">
                                    <a href="{{ route('client.create') }}"
                                        class="inline-block rounded bg-green-600 px-3 py-0 text-2xl font-bold text-white hover:bg-green-700">
                                        +
                                    </a>
                                </th>
                            </tr>
                        </thead>

                        @if ($clients->count() > 0)
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($clients as $client)
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            {{ $client->id }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $client->name }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $client->formatted_date_of_birth }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $client->formatted_created_at }}</td>
                                        <td class="whitespace-nowrap px-4 py-2">
                                            <a href="#"
                                                class="inline-block rounded bg-blue-600 px-4 py-2 text-xs font-medium text-white hover:bg-blue-700">
                                                Editar
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 flex justify-center">
                                            <button
                                                onclick="openModal('modelConfirm', '{{ route('client.delete', ['id' => $client->id]) }}')"
                                                class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">
                                                Excluir
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>

        <div id="modelConfirm"
            class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
            <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
                <div class="flex justify-end p-2">
                    <button onclick="closeModal('modelConfirm')" type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-6 pt-0 text-center">
                    <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">Você tem certeza que deseja deletar este
                        usuário?</h3>
                    <form id="deleteForm" method="post" class="inline-flex items-center">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base px-3 py-2.5 text-center mr-2">
                            Sim, deletar cliente
                        </button>
                    </form>
                    <button onclick="closeModal('modelConfirm')"
                        class="text-gray-900 bg-gray hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center"
                        data-modal-toggle="delete-user-modal">
                        Não, cancelar ação
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" defer>
        window.openModal = function(modalId, deleteUrl) {
            document.getElementById(modalId).style.display = 'block';
            document.getElementById('deleteForm').action = deleteUrl;
            document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden');
        }

        window.closeModal = function(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
        }

        // Close all modals when press ESC
        document.onkeydown = function(event) {
            event = event || window.event;
            if (event.keyCode === 27) {
                document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
                let modals = document.getElementsByClassName('modal');
                Array.prototype.slice.call(modals).forEach(i => {
                    i.style.display = 'none';
                });
            }
        };
    </script>
</x-app-layout>
