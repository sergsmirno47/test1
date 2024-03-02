<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script src="http://swoomy.laravel.local/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://swoomy.laravel.local/css/app.css" rel="stylesheet">

    <title>Test 1</title>
</head>
<body>
<header>
    <div class="border-bottom pb-2">
        HEADER
    </div>
</header>

<div id="page" style="" class="m-4">

    @yield('content')

</div>
<footer>
    <div class="border-top pb-2">
        FOOTER
    </div>
</footer>
<style>
    .my-nav{
        display: block ruby;
        text-align: center;
    }
    .my-nav svg{
        width: 21px;
        text-align: center;
    }
</style>
</body>
</html>
