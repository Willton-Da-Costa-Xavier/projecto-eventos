<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">

    {{-- favicon --}}
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    {{-- fim --}}

    {{-- bootstarp icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- fim --}}

    {{-- google icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- fim --}}

    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    {{-- fim --}}

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="cabecalho">
            <div class="flex">
                <div class="img-logo">
                    <a href="/" class="logo"><img src="/img/logo.png" alt=""></a>
                
                </div>{{-- img-logo --}}

                <div class="navbar-links">
                    <ul class="navbar-list">
                        <li><a href="/">Eventos</a></li>
                        <li><a href="/events/create">Criar Eventos</a></li>
                        <li><a href="/">Meus Eventos</a></li>
                        <li><a href="/">Sair</a></li>
                        <li><a href="/">Entrar</a></li>
                        <li><a href="/">Cadastrar</a></li>
                    </ul>{{-- navbar-list --}}
                </div>{{-- navbar-links --}}
            </div>{{-- flex --}}
        </nav>{{-- cabecalho --}}
    </header>

    <main>
        <div class="row-msg">
            @if (session('msg'))

                <p class="msg">{{ session('msg') }}</p>
                
            @endif
        </div>
        
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>