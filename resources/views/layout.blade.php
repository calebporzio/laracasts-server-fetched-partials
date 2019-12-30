<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/107c56b88c.js" crossorigin="anonymous"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="container pt-4 px-5" id="app">
            @yield('content')
        </div>
    </body>
</html>
