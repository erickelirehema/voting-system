@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <hr>
                    <a href="/voting" class="btn btn-primary">Vote Now</a>
                    <br>
                    <hr>
                    <!-- @if (count($posts) > 0)
                    <table class="table table-striped">
                      <tr>
                        <th class="lead">Candidates Name:</th></strong>
                      </tr>
                      @foreach ($posts as $post)
                      <tr>
                        <th>{{$post->body}}</th>
                        <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                      </tr>
                      @endforeach
                    </table>
                    @else
                    You have no Post!
                    @endif -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
