@extends('layouts.app')
@section ('content')
<br>
<div class="container">
        <h1 class="text-center text-primary center mx-auto ">Results</h1>
        <ul class="list-group">
          <div class="container lead py-3 px-3">
          <div class="row justify-content-md-center">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th> Candidates Names</th>
                        <th> Votes</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($vote as $candidates)
                      <tr>
                          <td> {{$candidates->cand_name}}</td>
                          <td> {{$candidates->No_Votes}}</td>
                      </tr>
                      @endforeach
               </tbody>


            </table>

        </div>
      </div>
    </ul>
</div>
@endsection
