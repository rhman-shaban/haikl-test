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
            @if(session()->has('token'))
            @php
                $token = session('token');
            @endphp
            <form id="tokenForm" action="http://anouther-web-site.test/api/welcome" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <button type="submit">Click here to proceed</button>
            </form>
            @else
                <p>No token found in session.</p>
            @endif
        </div>
    </div>
    </body>
</html>

<script>


    </script>
