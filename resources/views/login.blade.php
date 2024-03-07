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


        <div class="form">
            <h4 class="welcome">Welcome To Hikal </h4>
            <form method="POST" action="{{ route('login-post') }}">
            @csrf
                    <input type="text" name="email" placeholder="Email"/>

                    @if($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                    <input type="password" name="password" placeholder="password"/>
                    @if($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                    @endif
                    <button type="submit">login</button>
            </form>
        </div>
    </div>
    </body>
</html>

<script>


    </script>
