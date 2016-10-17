
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HOME</title>
  <link href="../../assets/css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body>

<header>
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Z logo</a>
    </div>
  </div><!-- /.container-fluid -->
  </nav>
</header>
 



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
  <div class="row">
    <footer>
      <h3>Here the footer</h3>
    </footer>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>