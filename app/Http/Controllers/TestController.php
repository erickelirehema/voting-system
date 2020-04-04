<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SelectedUser;
use App\candidates;
use App\Post;
use App\votes;
use DB;

class TestController extends Controller
{

  public function populateUsers()
  {
    $users = Candidates::orderBy('cand_name', 'asc')
                ->get();
    return view('test.userview', compact('users'));
  }

  public function saveVote(Request $request){

    //dd($request->input('candidate_id'));
    $vote = new votes;
    $vote->candidate_id = $request->input('candidate_id');
    $vote->voter_id = $request->input('voter_id');
    $vote->save();

    return redirect('/home')->with('success', 'Voted Successfully');
  }

  public function matokeo(){

    $votes = DB::table('votes')
              ->join('candidates', 'votes.candidate_id', '=', 'candidates.user_id')
              ->groupBy("candidate_id")
              ->select('cand_name',  DB::raw('count(*) as No_Votes'))
               ->orderBy('No_Votes', 'desc')
              ->get();
              return view ('pages.votes', ['vote'=>$votes]) ;
  }

}
