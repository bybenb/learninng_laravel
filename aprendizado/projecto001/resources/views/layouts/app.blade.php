<!DOCTYPE html>
<html>
<head>
    <title>Aldeia da Folha</title>

    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: #ffb869;
            color: #7e2a0c;
        }
        
        header {
            display: flex;
            justify-content: space-evenly;
        }

        h1, h2, h3 {
            display: flex;
            flex-direction: row;
            font-family: fantasy;
            font-weight: 700;
            justify-content: space-evenly;
        }

        header a {
            text-decoration: none;
            color: darkgreen;
            padding-right: 6px;
            padding-left: 6px;
            border-radius: 9px;
            
            /* box-shadow: 0.3px 0.3px 4px #19b619;; */
            transition: all ease-in-out 1s;

        }

        header a:hover {
            box-shadow: 0.3px 0.3px 4px darkgreen;

        }

        div#dono {
            position: absolute;
            right: 9px;
            bottom: 13px;

            
            border-radius: 1.1em;
            padding: .7em;
            font-size: .5em;

            box-shadow: 0.3px 0.3px 4px darkgreen;
        }

        div#dono > a {
            text-decoration: none;
            color: darkgreen;
            
        }

    
    </style>

    {{-- <!-- @yield('') --> --}}
</head>
<body>
    <header>
        <a href="/h">Home</a> |
        <a href="/hokage">Hokages</a> |
        <a href="/sobre">Conheça a Aldeia</a> |
        <a href="/inimigos">Inimigos da Aldeia</a>
    </header>


    @yield('content')

    <div id="dono">by ben b. / <a href="https://instagram.com/bkapa8" target="_blank" >Proggennin</a></div>
    
</body>
</html>