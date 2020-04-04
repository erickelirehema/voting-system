<html>
@extends ('layouts.app')
@section ('content')
<br>
<div class="container">
   @if(session('success'))
      <h1>{{session('success')}}</h1>
   @endif
   <form method="POST" action="{{route('save.vote')}}">
   {{ csrf_field() }}
   <div class="form-group row">
       <div class="col-sm-8">
       <select class="form-control" id="candidate_id" name="candidate_id" required focus>


    <option value="" disabled selected>Please select your Candidate</option>

    @foreach($users as $user)
    <option value="{{$user->user_id}}">{{ $user->cand_name }}</option>

    @endforeach
  </select>
  </div>
</div>
 <input type="hidden" value="{{auth()->user()->id}}" name="voter_id" id="voter_id"/>
 <input class="btn btn-primary " type="submit" value="Save">
</form>
</div>
<script type="text/javascript">
  var mytextbox = document.getElementById('displayUser');
  var mydropdown = document.getElementById('selectUser');
  mydropdown.onchange = function(){
      mytextbox.value = mytextbox.value  + this.value; //to appened
     mytextbox.innerHTML = this.value;
     }
  </script>

  @endsection
</html>
