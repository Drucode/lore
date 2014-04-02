<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-responsive.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/signin.css')}}">
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>

  <div class="container">

    <?php if (isset($fail) && $fail): ?>
      <div class="alert alert-danger">
        <span>It's wrong combination with email and password!</span>
      </div>
    <?php endif; ?>

    <form method="post" action="{{ URL::route('login') }}" class="form-signin" role="form">
      <h2 class="form-signin-heading">Please sign in</h2>
      <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
      <input name="password" type="password" class="form-control" placeholder="Password" required>
      <label class="checkbox">
        <input type="checkbox" value="remember-me"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

  </div> <!-- /container -->

</body>
</html>