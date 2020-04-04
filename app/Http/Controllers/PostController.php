<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          // return Post:: all();
        // $posts = Post::orderBy('id', 'asc')->paginate(10);
        // return view ('posts.index')->with('posts', $posts);
        // return view ('posts.index');

        $posts = Post::orderBy('created_at', 'asc')->paginate(10);
        return view ('posts.index')->withPosts($posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view ('posts.create');
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // dd($request->all());
          // return $request->textarea;
          // $post->name = $request->name;
          // $post-> save();

          // write all values on the table
          // Post::create($request->all());

          // write one by one values
          // create a post
          $post = new Post;
          $post->name = $request ->input('name');
          $post->body = $request ->input('body');
          $post->user_id = auth()->user()->id;
          $post->save();

          return redirect('/home')->with('success','Voted successfully!');
	// return redirect()->back()->with('success','Voted successfully!');
	// return view('/home')->with('success','Voted successfully!');
// return redirect()->route('/posts', 'PostController@index')->with('message', 'Success')->withInput();
          // return redirect()->action('PostController@index');
          // return redirect ('/posts')->with ('success', 'Post Created');


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view ('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post =  Post::find($id);
      return view ('posts.edit')->with('post', $post);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post = Post::find($id);
      $post->name = $request ->input('name');
      $post->body = $request ->input('body');
      $post->save();

      return redirect ('/post')->with ('success', 'Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
