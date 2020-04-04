@extends('layouts.app')
@section('content')

<br>
<br>
<br>

<div class="container">
  <div class="mx-auto">
<strong><h2>Posts</h2></strong>
<hr>
<br>
@if(count($posts)>1)
@foreach ($posts as $post )
<h3><a href="/posts/{{$post->id}}">{{$post->name}}</a></h3>
<strong style="font-size: 1em">Written on {{$post->created_at}}</strong >
<hr>
@endforeach;
{{$posts->links()}}
@else
<h3>No Post Found
</h3>
</div>
</div>

@endif
@endsection
