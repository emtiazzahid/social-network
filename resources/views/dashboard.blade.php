@extends('layouts.master')

@section('title')
    Dashboard
@endsection
@section('content')

    <!-- <h2>Welcome {{ Auth::user()->name }}</h2>

    <form method="get" action="{{ route('logout') }}">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <input type="submit" value="Logout" class="btn btn-danger">
    </form> -->
 @include('includes.message-block')
    <section class="row row-post">
    	<div class="col-md-6 col-md-offset-3">
    		<header><h3>Whats on your mind</h3></header>
    		<form action="{{ route('post.create') }}" method="post">
    			<div class="form-group">
    				<textarea name="body" id="new-post" rows="5" class="form-control" placeholder="wright something..">
    					
    				</textarea>
    				<br>
    				<input type="hidden" name="_token" value="{{ Session::token() }}">
    				<button type="submit" class="btn btn-primary">Create post</button>
    			</div>
    		</form>
    	</div>
    </section>
    <hr>
    <section class="row posts">
    	<div class="col-md-6 col-md-offset-3">
    		<header><h3>What other people say...</h3></header>
    		<article class="post">
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident incidunt velit, ipsa consequuntur quaerat a possimus repellat corporis minima. Vero a atque dolorum deleniti quos officiis praesentium porro facere, nulla?</p>
    			<div class="info">
    				Posted by Zahid on 12 feb 2016
    			</div>
    			<div class="interaction">
    				<a href="#">Like</a> |
    				<a href="#">Dislike</a> |
    				<a href="#">Edit</a> |
    				<a href="#">Delete</a>
    			</div>
    			<br>
    		</article>
    		<article class="post">
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident incidunt velit, ipsa consequuntur quaerat a possimus repellat corporis minima. Vero a atque dolorum deleniti quos officiis praesentium porro facere, nulla?</p>
    			<div class="info">
    				Posted by Zahid on 12 feb 2016
    			</div>
    			<div class="interaction">
    				<a href="#">Like</a> |
    				<a href="#">Dislike</a> |
    				<a href="#">Edit</a> |
    				<a href="#">Delete</a>
    			</div>
    			<br>
    		</article>
    		<article class="post">
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident incidunt velit, ipsa consequuntur quaerat a possimus repellat corporis minima. Vero a atque dolorum deleniti quos officiis praesentium porro facere, nulla?</p>
    			<div class="info">
    				Posted by Zahid on 12 feb 2016
    			</div>
    			<div class="interaction">
    				<a href="#">Like</a> |
    				<a href="#">Dislike</a> |
    				<a href="#">Edit</a> |
    				<a href="#">Delete</a>
    			</div>
    			<br>
    		</article>

    	</div>
    </section>
@endsection