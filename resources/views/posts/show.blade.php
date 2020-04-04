@extends('layouts.app')
@section('content')

<br>
<br>
<br>

<div class="container">
<div class="mx-auto">
<a href="/posts"><button type="button" class="btn-primary btn-sm">Back</button></a>
<hr>
<br>
<h3>{{$post->name}}</h3>

<small style="font-size: 1.5em;">Message:{{$post->body}}</small><br>
<small>Written on {{$post->created_at}}</small><br>
<hr>
<!-- <a href="/posts/{{$post->id}}/edit" class="btn btn-danger">Edit</a> -->
<!-- <a href="/posts" class="btn btn-danger">Edit</a>   -->
<hr>
<hr>
</div>
</div>

@endsection
