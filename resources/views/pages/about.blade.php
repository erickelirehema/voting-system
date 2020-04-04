<html>
@extends('layouts.app')
@section ('content')

            <style>
              .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
              }

              @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                  font-size: 3.5rem;
                }
              }
            </style>
            <!-- Custom styles for this template -->
            <link href="album.css" rel="stylesheet">
          </head>
          <body>
        <main role="main">
          <div class="album py-5 bg-light">
            <div class="container">
              <div class="text-center display-4"><strong>Developers</strong></div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="E60s.jpg" height="450" width="100%"alt="">
                    <div class="card-body">
                      <strong>Name: Erick Lukumai </strong>
                      <p class="card-text">Learning Laravel was the Best experience since this is my first Project made by Laravel, what a great Framework I ever learned</p>
                      <div class="d-flex justify-content-between align-items-center">

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="Terrence.jpg" height="450" width="100%"alt="">
                    <div class="card-body">
                      <strong>Name: Terrence Silonda </strong>
                      <p class="card-text">Much Appreciations goes to Terrence Silonda for the support and Guidance since the inception of this project untill the end.</p>
                      <div class="d-flex justify-content-between align-items-center">
                          </div>
                    </div>
                  </div>
                </div>
                  </div>
            </div>
          </div>
        </main>

        <div class="container jumbotron ml-auto text-left text-dark display-8 py-4">
                <h1 class="display-4 text-center"><strong><h4> About zVote </h4></strong>
                <p class="lead">Voting is a process, dont miss the genuine right and opportunity of choosing the right person, Digital Zoomtanzania Voting System (zvote) offers that opportuity of free and fair voting experience. Zvote is a free Digital Voting system from <a href="http://www.zoomtanzania.com">www.zoomtanzania</a>   developed by E60s in @2019  zoomtanzania  All Rights Reserved</p>
        </div>
        <footer class="text-muted">
          <div class="container">
            <p class="float-right">
              <a href="#">Back to top</a>
            </p>
              </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>

  </body>

@endsection
</html>
