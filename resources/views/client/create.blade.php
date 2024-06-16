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
                        @if ($errors->any())
                            <div class="flex mb-4 border-l-4 p-3 border-l-yellow-600 bg-yellow-400">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="error">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('client.store') }}" method="POST" id="formRegisterClient">
                            @csrf
                            <div class="mb-6">
                                <label for="avatar"
                                    class="block text-base font-medium text-[#07074D] mb-1">Avatar</label>
                                <div class="w-full relative border-2 border-gray-300 border-dashed rounded-lg p-6"
                                    id="dropzone">
                                    <input type="file" id="file-upload" name="avatar"
                                        accept="image/png, image/jpeg, image/gif"
                                        class="absolute inset-0 w-full h-full opacity-0 z-50" />
                                    <div class="text-center">
                                        <img class="mx-auto h-12 w-12"
                                            src="https://www.svgrepo.com/show/357902/image-upload.svg"
                                            alt="Upload Icon">

                                        <h3 class="mt-2 text-sm font-medium text-gray-900">
                                            <label for="file-upload" class="relative cursor-pointer">
                                                <span>Coloque aqui</span>
                                                <span class="text-indigo-600"> ou Ache</span>
                                                <span> nos Arquivos</span>
                                            </label>
                                        </h3>
                                        <p class="mt-1 text-xs text-gray-500">
                                            PNG, JPG, GIF up to 5MB
                                        </p>
                                    </div>

                                    <img src="" class="mt-4 mx-auto max-h-40 hidden" id="preview">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nome
                                </label>
                                <input type="text" name="name" id="name" required minlength="3"
                                    malength="255" placeholder="Nome Completo da Pessoa"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Email
                                </label>
                                <input type="email" name="email" id="email" required minlength="3"
                                    maxlength="255" placeholder="Ex: email@gmail.com"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Senha
                                </label>
                                <input type="password" name="password" id="password" required minlength="5"
                                    maxlength="255" placeholder="Ex: euQueroV4ga#200"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-3">
                                        <label for="date_of_birth"
                                            class="mb-3 block text-base font-medium text-[#07074D]">
                                            Data de Aniversario
                                        </label>
                                        <input type="date" name="date_of_birth" id="date_of_birth" required
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-3">
                                        <label for="cpf" class="mb-3 block text-base font-medium text-[#07074D]">
                                            CPF
                                        </label>
                                        <input type="text" name="cpf" id="cpf" placeholder="123.456.789-10"
                                            required
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
                                                required minlength="3" maxlength="255"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="number" id="number" placeholder="Número"
                                                required minlength="1"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/1">
                                        <div class="mb-3">
                                            <input type="text" name="complement" id="complement" minlength="3"
                                                maxlength="255" placeholder="Complemento"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="neighborhood" id="neighborhood" required
                                                minlength="3" maxlength="255" placeholder="Bairro"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="cep" id="cep" placeholder="CEP"
                                                required
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="city" id="city" placeholder="Cidade"
                                                required minlength="3" maxlength="255"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="mb-3">
                                            <input type="text" name="state" id="state" required
                                                placeholder="Sigla do Estado"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="hover:shadow-form w-full rounded-md bg-green-500 hover:bg-green-700 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                    Registar
                                </button>
                            </div>

                            <script type="module" defer>
                                // Masks com InputMask
                                document.addEventListener("DOMContentLoaded", function() {
                                    Inputmask("999.999.999-99").mask(document.getElementById('cpf'));
                                    Inputmask("99999-999").mask(document.getElementById('cep'));
                                    Inputmask("AA").mask(document.getElementById('state'));
                                });
                            </script>

                            <script>
                                // Pick Image Preview
                                var dropzone = document.getElementById('dropzone');

                                dropzone.addEventListener('dragover', e => {
                                    e.preventDefault();
                                    dropzone.classList.add('border-indigo-600');
                                });

                                dropzone.addEventListener('dragleave', e => {
                                    e.preventDefault();
                                    dropzone.classList.remove('border-indigo-600');
                                });

                                dropzone.addEventListener('drop', e => {
                                    e.preventDefault();
                                    dropzone.classList.remove('border-indigo-600');
                                    var file = e.dataTransfer.files[0];
                                    displayPreview(file);
                                });

                                var input = document.getElementById('file-upload');

                                input.addEventListener('change', e => {
                                    var file = e.target.files[0];
                                    displayPreview(file);
                                });

                                function displayPreview(file) {
                                    if (file) {
                                        if (file.type.match('image.*')) {
                                            var reader = new FileReader();
                                            reader.readAsDataURL(file);
                                            reader.onload = () => {
                                                var preview = document.getElementById('preview');
                                                preview.src = reader.result;
                                                preview.classList.remove('hidden');
                                            };
                                        } else {
                                            alert('Por favor, selecione um arquivo de imagem válido (PNG, JPG, GIF).');
                                        }
                                    }
                                }
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
