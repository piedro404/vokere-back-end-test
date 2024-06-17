{{--  --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-900 hover:text-gray-600 ">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-900 hover:text-gray-600 ">Log in</a>
            @endauth
        </div>
    @endif
    <div class="min-h-screen bg-gray-100">
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-3">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1 class="text-lg">Seja Bem-Vindo ao meu Teste de Back-End do <span
                                    class="bg-yellow-600 px-3 py-2 rounded text-white font-bold">Vokerê</span></h1>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1 class="text-lg">Apresentação: </h1>
                        </div>
                        <div class="px-6 text-gray-900">
                            <p class="text-sl">
                                Olá! Sou Pedro Henrique, um estudante apaixonado por tecnologia e suas derivações.
                                Atualmente, estou cursando o 5.º período de Sistemas da Informação na Faculdade de
                                Balsas (UNIBALSAS), onde busco constantemente novos conhecimentos e experiências.

                                Com um conhecimento em Python, HTML, CSS, JavaScript, PHP, Java, MySQL e PostgreSQL,
                                destaco minha participação em projetos acadêmicos e minha colaboração em uma palestra
                                ministrada por um professor. Além disso, tive a oportunidade de desenvolver uma
                                aplicação em Python para calcular os números de Fibonacci e, na Maratona de Programação,
                                destaquei-me ajudando minha equipe a resolver desafios propostos.

                                Minha dedicação em aprimorar a base de lógica de programação reflete-se em projetos
                                pessoais, como automatizações e criação de API's. Atualmente, estou focado em me tornar
                                um Desenvolvedor Full-Stack, ampliando meus estudos em PHP, ReactJS e outras tecnologias
                                relevantes.

                                Sou uma pessoa extremamente curiosa, proativa e dedicada, sempre em busca de novos
                                desafios e aprendizados para expandir meus horizontes. Se você está procurando um
                                profissional com paixão pela tecnologia, que está sempre disposto a aprender e enfrentar
                                novos desafios, estou à disposição para contribuir com meu entusiasmo e dedicação. Vamos
                                conectar-nos, explorar possíveis oportunidades de colaboração e crescimento mútuo.
                            </p>
                            <div class="flex flex-row justify-around">
                                <img src="https://media.licdn.com/dms/image/D4D03AQF-jFMesnaksw/profile-displayphoto-shrink_800_800/0/1690155474181?e=1724284800&v=beta&t=6I0DsvgMe6A8lT49DTx0Y3xthJpttQ1Eg_K6I92hD-E"
                                    alt="Foto do Linkedin" class="flex content-center my-6 h-60 w-60">
                                <img src="https://camo.githubusercontent.com/87722c2c8c1c585c3b0254feca17e5545ed9728f9cc891578e6600fd7fa5a807/68747470733a2f2f692e6962622e636f2f673731637253312f6e696b6f2d6f6e6573686f742e676966"
                                    alt="Foto do Linkedin" class="flex content-center my-6 h-60 w-60">
                            </div>
                            <div class="p-6 text-gray-900">
                                <h1 class="text-lg">Login Admin: <span
                                        class="bg-gray-600 px-3 py-2 rounded text-white font-bold">pedroplayborges@gmail.com</span>
                                    <span
                                        class="bg-gray-600 px-3 py-2 rounded text-white font-bold">admin</span>
                                </h1>
                            </div>
                            <div class="flex flex-row justify-around pb-6">
                                <a href="https://github.com/piedro404" target="_blank"
                                    class="flex items-center flex-col gap-1">
                                    <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png"
                                        alt="GitHub" class="w-40 h-40 rounded-full object-cover">
                                    <h1 class="text-lg">Piedro404</h1>
                                </a>

                                <a href="https://www.linkedin.com/in/pedrohenrique404/" target="_blank"
                                    class="flex items-center flex-col gap-1">
                                    <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn"
                                        class="w-40 h-40 rounded-full object-cover">
                                    <h1 class="text-lg">pedrohenrique404</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
