<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta property="og:title" content="@yield('title')" />
  <meta property="og:url" content="{{ Request::url() }}" />
  <meta property="og:image" content="https://pupilscom-esl1.eu/wp-content/uploads/2015/11/cropped-LOGO-sans-font-192x192.png" />

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body class="@yield('body-class')">
<div class="flex-center position-ref full-height">
  <div class="content">
    @yield('content')
  </div>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-70133844-10', 'auto');
    ga('send', 'pageview');

</script>
@stack('js')
</body>
</html>
