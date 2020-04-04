<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>zvote</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <div>

    </head>
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="/start">Get Started</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/about">About zvote <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin">Admin<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts">posts<span class="sr-only">(current)</span></a>
      </li>
      </ul>
      <div>
        <ul class="nav navbar navbar-right">
          <li class="nav-item">
            <a class="nav-link text-white"href="/posts/create">Vote<span class="sr-only">(current)</span></a>
          </li>

        </ul>

      </div>

  </div>
</nav>
</div>
</div>
<style>
{
margin-top: 5em;
position: absolute;
}
</style>
    <body>

<div>
  @include('incl/flash-message')
  @yield('content')
</div>

      <!-- Scripts -->
    <script type="text/javascript" "src="../js/app.js"></script>
    </body>
