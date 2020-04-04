<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use App\votes;

class VoteOnce
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
    $votecount = votes::where('voter_id', Auth()->user()->id)->count();

    if($votecount == 0 )
      {
          return $next($request);
      }
      return redirect('home')->with('error','You have voted already.');
    }

}
