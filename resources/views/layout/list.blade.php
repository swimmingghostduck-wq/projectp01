<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'My app')</title>
    </head>
    <body> 
        <h1>
            List Produk
        </h1>
        <div class="container">
            <body>

    <header>
        @include('components.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>

</body>
        </div>
    </body>
</html>
