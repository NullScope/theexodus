<!DOCTYPE html>
<html>
    <head>
        <meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fight or Flight</title>
        <!--[if IE]><link rel="shortcut icon" href="images/favicons/ie-fof.ico"><![endif]-->
        <link rel="icon" href="{{asset('assets/images/favicons/modern-fof.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/favicons/apple-touch-fof.png')}}">
        <link rel="image_src" href="{{asset('assets/images/logo.png')}}" />
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/home.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <meta charset="ISO-8859-1">
        <meta http-equiv="Content-Type" value="text/html; charset=ISO-8859-1">
        @yield('head')
    </head>
    
    <body>
        
        @yield('content')
    </body>

    <footer>
        @yield('footer')
        @yield('scripts')
    </footer>
</html>
