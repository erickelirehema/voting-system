<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\candidates;
use App\Auth;
use DB;


class CandController extends Controller
{
  public function addCand(Request $request){

    $post = new Candidates;
    $post->cand_name = $request ->input('name');
    $post->save();

    return redirect('/cand')->with('success', 'Candidate Submitted!');
  }

    public function index(){

      $candidate = candidates:: all()->toArray();
      return view ('pages.candidate', compact ('candidate'));
  }
  }
