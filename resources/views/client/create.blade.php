<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg">Cadastar Cliente</h1>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-3">
                <div class="flex items-center justify-center p-12">
                    <div class="mx-auto w-full max-w-[550px] bg-white">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nome
                                </label>
                                <input type="text" name="name" id="name"
                                    placeholder="Nome Completo da Pessoa"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Email
                                </label>
                                <input type="email" name="email" id="email" placeholder="Ex: email@gmail.com"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Senha
                                </label>
                                <input type="password" name="password" id="password" placeholder="Ex: euQueroV4ga#200"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-3">
                                        <label for="date_of_birth" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Data de Aniversario
                                        </label>
                                        <input type="date" name="date_of_birth" id="date_of_birth"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-3">
                                        <label for="cpf" class="mb-3 block text-base font-medium text-[#07074D]">
                                            CPF
                                        </label>
                                        <input type="text" name="cpf" id="cpf" placeholder="123.456.789-10"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                                            <input type="text" name="street" id="street" placeholder="Rua"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="number" id="number" placeholder="Número"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/1">
                                        <div class="mb-3">
                                            <input type="text" name="complement" id="complement" placeholder="Complemento"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="cep" id="cep" placeholder="CEP"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="city" id="city" placeholder="Cidade"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="state" id="state" placeholder="Sigla do Estado"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button
                                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                    Book Appointment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
