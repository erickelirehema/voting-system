@extends('layouts.app')
@section ('content')
<br>
<br>
<br>
<div>


        <h1 class="text-center text-primary center mx-auto"> Welcome to Candidate Page</h1>


        <div class="container">
          <form action="{{ route('cand.store') }}" method="POST">
            {{ csrf_field() }}
            <!-- <input type="hidden" name="_method" value="PUT"> -->
             <div class="form-group">
                <label for="validationCustom02">Name of candidate</label>
                <input type="text" name="name" class="form-control" id="validationCustom02" placeholder="First name  Surname" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
          </form>
            </div>

            <div class="row">
              <div class="col-md-12">
                <br>
                <h3 align='center'>Student Data</h3>
                <br>

                @if (count($Candidates) > 0)
                <table class="table table-striped">
                  <tr>
                    <th class="lead">Candidates Name:</th></strong>
                  </tr>
                  @foreach ($Candidates as $cand)
                  <tr>
                    <th>{{$cand->cand_name}}</th>
                  </tr>
                  @endforeach
                </table>
                @else
                You have no Post!
                @endif
              </div>
            </div>


            </div>


</div>
@endsection
