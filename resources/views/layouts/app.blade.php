<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Ship-Overground') }}</title>
    <!-- Styles -->
    <!-- Compiled and minified CSS -->
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  </head>
  @yield('body-name')
    <div id="app">
      @include('partials.navbar')
      <div class="container">
        @include('partials.messages')
      </div>
      @yield('content')
      {{-- @include('partials.footer') --}}
    </div>
    
    <!-- Scripts -->
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.1/masonry.pkgd.min.js"></script>  --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    
    <!-- Compiled and minified JavaScript -->
  </body>
  </html>