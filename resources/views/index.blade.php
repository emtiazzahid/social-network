@extends('layouts.master')

@section('title')
	Welcome
@endsection
@section('content')
  @if(Session::has('message'))
  <div class="alert alert-danger alert-dismissable">
    <strong>Warning!</strong> {{ Session::get('message') }}
    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
        &times;
   </button>
  </div>
  @endif
  
  @if(count($errors) >0)
    <ul>
        @foreach($errors->all() as $error)
          <li>
            <div class = "alert alert-danger alert-dismissable">
             <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                &times;
             </button>
            {{ $error }}
            </div>
          </li>
        @endforeach
    </ul>
    @endif

	<!-- LOGIN FORM -->
<div class="col-md-6">
	<form method="POST" action="{{ route('signup') }}" class="form-horizontal">
	<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" >
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ Request::old('name') }}">
    </div>
  </div>
  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Email"  value="{{ Request::old('email') }}">
    </div>
  </div>
  <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign Up</button>
   	<input type="hidden" name="_token" value="{{ Session::token() }}">
    </div>
  </div>
</form>
</div>


<div class="col-md-6">
	<form class="form-horizontal" method="post" action="{{ route('signin') }}">
	<input type="hidden" name="_token" value="{{ Session::token() }}">
  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email"  value="{{ Request::old('email') }}">
    </div>
  </div>
  <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
@endsection