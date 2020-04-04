@extends('layouts.app')
@section ('content')
<br>
<br>
<br>
<br>
<div class="container">
  <form action="{{ route('posts.store') }}" method="POST">
    {{ csrf_field() }}
    <!-- <input type="hidden" name="_method" value="PUT"> -->
     <div class="form-group">
        <label for="validationCustom02">Full Name(Confidential)</label>
        <input type="text" name="name" class="form-control" id="validationCustom02" placeholder="First name  Surname" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="form-group">
        <label for="validationCustom02" placeholder="">Vote for</label>
        <textarea name="body" class="form-control" id="exampleFormControlTextarea1"placeholder="Select your Candidate" value="" required></textarea>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
  </form>

    </div>

  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
</div>
@endsection
