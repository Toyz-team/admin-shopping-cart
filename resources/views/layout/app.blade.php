<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- CSRF Token -->
    		<meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="assets/css/icon.css" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <!-- Config -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Scripts -->
		    <script>
		        window.Laravel = {!! json_encode([
		            'csrfToken' => csrf_token(),
		        ]) !!};
		    </script>
    </head>
    <body>
    @yield('content')
    <!-- Jquery -->
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    @yield('script')
    </body>
</html>
