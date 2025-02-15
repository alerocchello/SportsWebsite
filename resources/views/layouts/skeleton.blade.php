<!DOCTYPE html>
<html>
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- css -->
    <link rel='stylesheet' href="{{ asset('css/header.css') }}">
    <link rel='stylesheet' href="{{ asset('css/side_menu.css') }}">
    <link rel='stylesheet' href="{{ asset('css/footer.css') }}">
    @yield('style')

    <!-- js -->
    <script src="{{ asset('js/side_menu.js') }}" defer></script>
    @yield('script')

    <!-- Social nel footer -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link dei font -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anybody&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>
</head>
<body>

    <header>
        <nav>
            <div id="menu">
                <!-- Cliccando sulle varie voci del menu, l utente verrà indirizzato ad un area del sito dedicata a quella determinata competizione -->
                <!-- L unica voce avente un link è nba perché avrei sforato di troppo il limite di 3-5 pagine php e perché è l unica di cui ho trovato api minimamente interessanti -->
                <h2>Competizioni:</h2>
                <a href="{{ url('premier') }}">Premier League</a>
                <a href="{{ url('nba') }}">Nba</a>
                <a href="#">Olimpiadi</a>
                <a href="#">Formula 1</a>
                <a href="#">Motogp</a>
            </div>
        </nav>
        <a href="{{ url('home') }}" id ="logo">AR Sport</a>
    </header>

    <!-- side menù -->
    <img src="{{ asset('./images/menu_close.png') }}" id="iconmenu">
    <div id="side_menu">
        <a href="{{ url('home') }}" class="section" id="home">home</a>
        <a href="{{ url('store') }}" class="section" id="store">store</a>
        <a href="#" class="section" id="cmps">competizioni</a>
        <a href="{{ url('logout') }}" class="section">logout</a>       
    </div>


    @yield('content')


    <footer>
        <p>Seguici su</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
        <div id="links_footer">
            <a>Privacy</a>
            <a>Terms and conditions</a>
            <a>Cookie policy</a>
            <a>Cookie Settings</a>
        </div>
        <p>Powered by Alessandro Rocchello 1000005960</p>
    </footer>

</body>
</html>