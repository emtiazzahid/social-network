<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Auth;


class PostController extends Controller
{
	public function  getDashboard(){
		$posts = Post::all();
		return view('dashboard')->with(['posts' => $posts]);
	}
	public function postCreatePost(Request $request)
	{
		$this->validate($request,[
				'body' => 'required|max:1000'
			]);
		$post = new Post();
		$post->body = $request['body'];
		$message = "There was an error!";
		if ($request->user()->posts()->save($post)) {
			$message = "Post successfully created.";
		}
		return redirect()->route('dashboard')->with(['post_message' => $message]);
	}

	public function deletePost($post_id){
		$post = Post::where('id',$post_id)->first();
		$post->delete();
		return redirect()->route('dashboard')->with('post_message', 'successfully deleted post');
	}
}