@extends('layouts.app')
@section ('content')
<br>
<br>
<br>
<br>
<div class="container" style="margin-left: 25em; margin-top:7em; width: 100%;">

  <form>
    <h1 style="font-size: 2em; ">Admin's Only</h1>
    <div class="form-group"  style=" width: 50%;">
      <label for="exampleInputEmail1">Username</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group"   style="width:50%;" >
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <br>
    <br>
    <p style="font-size: 1em; ">Forgot my password</p>

  </form>


</div>
@endsection
