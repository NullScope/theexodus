<!DOCTYPE html>
<html>
    <head>
        <meta name="robots" content="noindex,nofollow">
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

        <script type="text/javascript">
          var _paq = _paq || [];
          // tracker methods like "setCustomDimension" should be called before "trackPageView"
          _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
          _paq.push(["setCookieDomain", "*.fightorflightgame.com"]);
          _paq.push(['trackPageView']);
          _paq.push(['enableLinkTracking']);
          (function() {
            var u="//46.101.126.69:8080/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', '1']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
          })();
        </script>
        <noscript><p><img src="//46.101.126.69:8080/piwik.php?idsite=1&rec=1" style="border:0;" alt="" /></p></noscript>
        
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
