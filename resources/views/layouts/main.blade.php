<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Css e JavaScript da aplicação --}}
    <link rel="stylesheet" href="/css/style.css">
    <script href="/js/scripts.js"></script>

    {{-- Css e JavaScript do Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    {{-- Ionicons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header>
        <nav class='navbar navbar-expand-lg navbar-light'>
            <div class='collapse navbar-collapse' id='navbar'>
                <a href='/' class='navbar-brand'>
                    <p class="navlogo">ev</p>
                </a>
            </div>
            <ul class='navbar-nav'>
                <li class='nav-item'>
                    <a href='/'>Eventos</a>
                </li>
                <li class='nav-item'>
                    <a href='/events/create' class='navbar-brand'>Criar eventos</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </main>
    <footer>
        Desenvolvido por <strong>&copy; Diego Sousa</strong>
    </footer>
</body>
</body>

</html>
