<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - AnalagoueMafia</title>
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('AnalagoueMafia.styles.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b03628471.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-black border-bottom box-shadow mb-3">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="{{ route('camera.displayPage') }}">ANALOGUE MAFIA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="navbar-item">
                            <a class="navbar-link text-white" href="{{ route('camera.displayPage') }}">DISPLAY</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link text-white" href="{{ route('camera.displayPageCart') }}">CART</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link text-white" href="{{ route('home.index') }}">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main" class="pb-3">
            @yield('content')
        </main>
    </div>
    <footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2022 - AnalagoueMafia - <a href="{{ route('home.privacy') }}">Privacy</a>
        </div>
    </footer>
    <script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>
    @yield('scripts')
</body>
</html>
