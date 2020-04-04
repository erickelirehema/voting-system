@extends('layouts.app')
@section('content')

<br>
<br>
<br>

<div class="container">
  <strong><h2>Edit Post</h2></strong>
  <br>

  <form action="{{ route(['posts.update', $post->id]) }}" method="POST">
    {{ csrf_field() }}

     <div class="form-group">
        <label for="validationCustom02">Full Name(Confidential)</label>
        <input type="text" name="name" class="form-control" id="validationCustom02" placeholder="First name  Surname" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="form-group">
        <label for="validationCustom02" placeholder="">Body(Confidential)</label>
        <textarea name="body" class="form-control" id="exampleFormControlTextarea1"placeholder="Leave your Comment" value="" required></textarea>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <!-- {{hidden('_method','PUT')}} -->
      <!-- {{form::hidden('_method','PUT')}} -->
      <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
  </form>

@endsection
