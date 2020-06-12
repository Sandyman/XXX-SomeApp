<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<header>
    <!-- Navigation bar component -->
    <x-navbar/>
</header>

<!-- Main content area -->
<main class="container" role="main">
    @yield('content')
</main>

<footer class="footer bg-dark text-light mt-5">
    <div class="container">
    <div class="row my-2 mt-md-4 ">

        <div class="col-12 col-md">
            <h5>Study With Us</h5>
            <ul class="list-unstyled text-small">
                <li>
                    <a class="text-muted" href="https://northmetrotafe.wa.edu.au">
                        North Metropolitan TAFE
                    </a>
                </li>
                <li>
                    <a class="text-muted"
                       href="https://www.northmetrotafe.wa.edu.au/courses/certificate-iv-programming-2">
                        Certificate IV in Programming
                    </a>
                </li>
                <li>
                    <a class="text-muted"
                       href="https://www.northmetrotafe.wa.edu.au/courses/diploma-software-development-2">
                        Diploma of Software Development
                    </a>
                </li>
                <li>
                    <a class="text-muted"
                       href="https://www.northmetrotafe.wa.edu.au/courses/diploma-website-development">
                        Diploma of Website Development
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-12 col-md small">
            <p class="text-muted">
                <span class="text-light">{{ config('app.name', 'Laravel') }}</span>
                is a slowly evolving demonstration application for students studying Software
                and Web Development at
                <a href="https://northmetrotafe.wa.edu.au">
                    North Metropolitan TAFE
                </a>
            </p>
            <ul class="list-unstyled text-small">
                <li>&copy; 2020, Adrian Gould</li>
                <li><a href="https://github.com/AdyGCode/XXX-SomeApp">
                        <i class="fab fa-git-alt"></i> XXX-SomeApp Code (this app)
                    </a></li>
            </ul>
        </div>
    </div>
    </div>
</footer>
<!-- any required post-footer specific code -->
@yield('footer')
</body>
</html>
