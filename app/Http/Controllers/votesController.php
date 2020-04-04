<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class votesController extends Controller
{
  public function saveUser(Request $request){

    $post = new votes;
    $post->Votes = $request ->input('user_selected');
    $post->save();

    return redirect('/logout')->with('success', 'Voted Successfully');
  }
}
