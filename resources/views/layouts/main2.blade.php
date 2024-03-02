<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script src="http://sergio-test-blog.local/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://sergio-test-blog.local/css/app.css" rel="stylesheet">

    {{--    <link href="/css/my_style.css" rel="stylesheet" type="text/css">--}}
    {{--    <script src="/js/js.js"></script>--}}
    <title>test swoomy</title>
</head>
<body>
<header>
    <div class="border-bottom pb-2">
        <div>
            <div class="col" style="float: right">
                @auth()
                    <div class="col-2 m-4">
                        <x-form method="delete" action="{{ route('my-auth.sessions.destroy') }}">
                            <button class="btn btn-danger">Logout</button>
                        </x-form>
                    </div>

                @else
                    <a href="{{ route('my-auth.register.create') }}" style="margin-right: 20px">Register</a>
                    <a href="{{ route('my-auth.sessions.create') }}" style="margin-right: 20px">Login</a>
                @endauth
            </div>
            <div class="col-5" style="display: block">
                <div class="alert">Logo</div>
            </div>
        </div>
    </div>
</header>

<div id="page" style="" class="m-4">
    @yield('content')

</div>
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
