<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg">Seja Bem-Vindo ao Painel do meu Teste de Back-End do <span class="bg-yellow-600 px-3 py-2 rounded text-white font-bold">Vokerê</span></h1>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg">Meus Materias de Estudo/Projeto: </h1>
                </div>
                <div class="flex flex-col p-6 text-gray-900 gap-2">
                    <h1 class="text-sl">Orientações do Teste</h1>
                    <img src="{{ url('images/welcomeImages/testevokere.png') }}" alt="">
                </div>
                <div class="flex flex-col p-6 text-gray-900 gap-2">
                    <h1 class="text-sl">Ambiente Linux para Trabalhar com Laravel - Valet</h1>
                    <img src="{{ url('images/welcomeImages/ambiente.png') }}" alt="">
                </div>
                <div class="flex flex-col p-6 text-gray-900 gap-2">
                    <h1 class="text-sl">Aprendendo sobre Laravel na versão 9.x para entender a Estrutura do Framework</h1>
                    <img src="{{ url('images/welcomeImages/curso.png') }}" alt="">
                </div>
                <div class="flex flex-col p-6 text-gray-900 gap-2">
                    <h1 class="text-sl">Blog comentando sobre Niveis de Acesso com Breeze</h1>
                    <img src="{{ url('images/welcomeImages/blog.png') }}" alt="">
                </div>
                <div class="flex flex-col p-6 text-gray-900 gap-2">
                    <h1 class="text-sl">Documentação do Laravel</h1>
                    <img src="{{ url('images/welcomeImages/laravel.png') }}" alt="">
                </div>
                <div class="flex flex-col p-6 text-gray-900 gap-2">
                    <h1 class="text-sl">Documentação do TailwindCSS</h1>
                    <img src="{{ url('images/welcomeImages/tailwind.png') }}" alt="">
                </div>
                <div class="flex flex-col p-6 text-gray-900 gap-2">
                    <h1 class="text-sl">Modelo Lógico do Banco de Dados do Projeto - Feito no BrModelo</h1>
                    <img src="{{ url('images/welcomeImages/sys_ER.png') }}" alt="">
                </div>
                <div class="flex flex-col p-6 text-gray-900 gap-2">
                    <h1 class="text-sl">Componentes para UI - TailwindCSS</h1>
                    <img src="{{ url('images/welcomeImages/components.png') }}" alt="">
                </div>
                <div class="flex flex-col p-6 text-gray-900 gap-2">
                    <h1 class="text-sl">Gerar CPF Validos</h1>
                    <img src="{{ url('images/welcomeImages/geradorcpf.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
