<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Haikl Test</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('style.css') }}" rel="stylesheet" />
    </head>
    <body class="antialiased">
    <div class="login-page">


        <div class="form2">
            <h2>Welcome To Haikl Teqnology</h2>


            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>

        </div>
   

    </div>
    </body>
</html>

<script>


    </script>
