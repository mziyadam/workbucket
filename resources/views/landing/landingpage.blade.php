<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work bucket</title>
    <link href="{{ ('template/assets/img/logo9.png') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/landing_asset/style.css">
</head>

<body id="landbg">
    <!--<p class="topmenu1"> <a href="">Join</a></p>-->
    <p class="topmenu2"> <a href="">Discover</a></p>
    <a href="#"><img src="/landing_asset/logo.png" alt="logo" href="" id="logo"></a>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
        <p class="topmenu1"><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Join</a></p>

        @if (Route::has('register'))
        <!--<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Join</a>-->
        @endif
        @endauth
    </div>
    @endif
</body>

</html>