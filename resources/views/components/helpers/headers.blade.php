<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- JQuery -->
    <script src="{{ asset('js/jquery-3.6.0.js') }}" ></script>
    <script src="{{ asset('js/jquery.mask.js') }}" ></script>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Personalizações -->
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <script src="{{ asset('js/global.js') }}" ></script>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    
    <!-- Animate.css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    