<!DOCTYPE html>
<html class="calendly-override">

<head>
    <!-- Place this data between the <head> tags of your website -->
    <title>Accueil | La flamme de l'espoir</title>
    <meta charset="utf-8">
    <!-- <meta name="description" content="Page description. No longer than 155 characters." /> -->

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@FoundersPledge">
    <meta name="twitter:title" content="Home | Founders Pledge">
    <meta name="twitter:description" content="Home | Founders Pledge">
    <meta name="twitter:creator" content="@FoundersPledge">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image"
          content="https://founderspledge.com/assets/fp_symbol-6f48bfaa357b59a92f88ef1dc2b36b1dd006a66a143fd9adbe3f82cac7196263.png">
    <meta name="twitter:image:alt" content="Home | Founders Pledge"/>
    <meta name="twitter:domain" content="founderspledge.com">

    <!-- Open Graph data -->
    <meta property="og:title" content="Home | Founders Pledge"/>
    <!-- <meta property="og:type" content="article" /> -->
    <!-- <meta property="og:url" content="http://www.example.com/" /> -->
    <meta property="og:image"
          content="https://founderspledge.com/assets/fp_full_logo-86cac3a5e35085bae6059743556bd3e4ac63437d433cbd4346cf3c449c27ddb6.png"/>
    <meta property="og:image:secure_url"
          content="https://founderspledge.com/assets/fp_full_logo-86cac3a5e35085bae6059743556bd3e4ac63437d433cbd4346cf3c449c27ddb6.png"/>
    <meta property="og:image:width" content="180"/>
    <meta property="og:image:height" content="110"/>
    <meta property="og:image"
          content="https://founderspledge.com/assets/fp_symbol-6f48bfaa357b59a92f88ef1dc2b36b1dd006a66a143fd9adbe3f82cac7196263.png"/>
    <meta property="og:image:secure_url"
          content="https://founderspledge.com/assets/fp_symbol-6f48bfaa357b59a92f88ef1dc2b36b1dd006a66a143fd9adbe3f82cac7196263.png"/>
    <meta property="og:image:width" content="200"/>
    <meta property="og:image:height" content="200"/>
    <meta property="og:site_name" content="Founders Pledge"/>
    <meta property="fb:admins" content="172597779583559"/>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32%EF%B9%96v=3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16%EF%B9%96v=3.png">
    <link rel="manifest" href="favicons/site.webmanifest.txt">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">


    <meta name="theme-color" content="#ffffff">

    <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,700,600,500,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Halant:400,300,500,600,700' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" media="all" href="{{asset('packs/css/application-c05d5573.css')}}"/>
    <link rel="stylesheet" media="all" href="{{asset('packs/css/custom.css')}}"/>
    <link rel="stylesheet" media="all"
          href="{{asset('assets/application-9768bf41ef4f83b2597185e027ea20a5a5dfc76f3b9b765567c9e47de0108827.css')}}"/>
</head>

<body class="calendly-body-override en-GB">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXSWX63" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="app" >
    @include('component.header.main')


    <main role="main">
        @yield('content')


    </main>
    @include('component.footer.main')


</div>


<script src="{{asset('packs/js/application-1780574b941cb2e4102b.js')}}"></script>
<script src="{{asset('assets/application-3ace888bce61f9744ae995faed1261b4d66ca73d3391a8a323e58d67c808b79f.js')}}"></script>
<script src="{{asset('assets/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/custom.js')}}"></script>


<!-- Global site tag (gtag.js) - Google AdWords: 801673963 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-801673963"></script>

@yield('javascript')

</body>

</html>
