<!DOCTYPE html>
<html>
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- css -->
    <link rel='stylesheet' href="{{ asset('css/side_menu.css') }}">
    <link rel='stylesheet' href="{{ asset('css/footer.css') }}">
    <link rel='stylesheet' href="{{ asset('css/shopping.css') }}">

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