<!DOCTYPE html>
<html>
<head>
    <title>Aldeia da Folha</title>
    <!-- @yield('') -->
</head>
<body>
    <header>
        <a href="/h">Home</a> |
        <a href="/hokage">Hokages</a> |
        <a href="/sobre">Conheça a Aldeia</a> |
        <a href="/inimigos">Inimigos da Aldeia</a>
    </header>

    <hr>

    @yield('content')
</body>
</html>