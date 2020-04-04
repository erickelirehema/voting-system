<?php

namespace App\Http\Controllers;
use App\candidates;
use App\Post;
use App\candis;
use App\user;
use DB;


class PagesController extends Controller
{
     public function __construct()
     {
       $this->middleware('auth')->except(['index', 'about', 'getstarted']);

     }
    public function index(){
      return view ('pages.start');
    }
    public function about(){
      return view ('pages.about');
    }
    public function getstarted(){
      return view ('pages.start');
    }
    public function admin(){
      return view ('pages.admin');
    }

    // public function cand(){
    //     $Candidates = candidates::get();
    //     return view ('pages.cand', compact('Candidates'));
    //   }
    //   // public function returnCandcand(){
    //   //   $Candidates = collect();
    //   //   return view ('pages.cand', compact('Candidates'));
    //   // }
    //   return view ('pages.cand');
    // }
    public function cand(){

          $votes = DB::table("votes")
          ->join("candidates", "votes.candidate_id", "=" ,"candidates.user_id")
          ->groupBy("candidate_id")
          ->select('cand_name',  DB::raw('count(*) as No_Votes'))
          ->get();


          // dd($votes);

          $Candidates = candidates::get();
          return view ('pages.cand', compact('Candidates'));
        }

public function candis()
        {
          $users = candidates::get();
          return view('test.userview', compact('users'));
        }


// public function votes(){
//  $cands = DB::table('votes')
//  ->join('votes', 'votes.cand_id', '=', 'cand.id')
//  ->get();
//
//  $cands = Post::orderBy('id', 'desc')->paginate(10);
// return view ('pages.cand', compact('cands'));
// }
    public function candidates(){
      return view ('pages.candidates');
    }
    }
