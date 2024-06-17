<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg">Perfil do Cliente {{ $client->name }}</h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-3">
                <div class="flex items-center justify-center p-6">
                    <div class="mx-auto w-full max-w-[550px] bg-white">
                        <div class="mb-6">
                            <div class="w-full relative p-6"
                                id="dropzone">

                                @if ($client->avatar)
                                    <img src="{{ url('storage/' . $client->avatar) }}" class="mt-4 mx-auto max-h-40 rounded-full"
                                        id="preview">
                                @else
                                    <img src="{{ url('images/profileDefault.webp') }}" class="mt-4 mx-auto max-h-40 rounded-full"
                                        id="preview">
                                @endif
                            </div>
                            <p class="text-center block text-base font-medium text-[#07074D] mb-1">Avatar de {{ $client->name }}</p>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Nome
                            </label>
                            <p
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                {{ $client->name }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                Email
                            </label>
                            <p
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                {{ $client->email }}</p>
                        </div>
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-3">
                                    <label for="date_of_birth" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Data de Aniversario
                                    </label>
                                    <p
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                        {{ $client->formatted_date_of_birth }}</p>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-3">
                                    <label for="cpf" class="mb-3 block text-base font-medium text-[#07074D]">
                                        CPF
                                    </label>
                                    <p
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                        {{ $client->formatted_cpf }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 pt-3">
                            <label class="mb-3 block text-base font-semibold text-[#07074D] sm:text-xl">
                                Endereço
                            </label>
                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-3">
                                        <p
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                            Rua: {{ $location->street ?? '--------------' }}</p>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-3">
                                        <p
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                            Número: {{ $location->number ?? '--------------' }}</p>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/1">
                                    <div class="mb-3">
                                        <p
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                            Complemento: {{ $location->complement ?? '--------------' }}</p>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-3">
                                        <p
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                            Bairro: {{ $location->neighborhood ?? '--------------' }}</p>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-3">
                                        <p
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                            CEP: {{ $location->formatted_cep ?? '--------------' }}</p>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/1">
                                    <div class="mb-3">
                                        <p
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                            Cidade: {{ $location->city ?? '--------------' }}</p>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/1">
                                    <div class="mb-3">
                                        <p
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                            Estado: {{ $location->state ?? '--------------' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('client.edit', ['id' => $client->id]) }}"
                                class="inline-block hover:shadow-form w-full rounded-md bg-blue-500 hover:bg-blue-700 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Editar Cliente
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
