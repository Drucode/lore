<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<?php if (isset($fail) && $fail) {?>
	<div class="notify error">
		<span>It's wrong combination with email and password!</span>
	</div>
	<?php } ?>
	<form method="post" action="/login">
		<div id="login">
			<label for="login-email">Email: </label>
			<input type="text" name="email" placeholder="email" id="login-email" />
		</div>
		<div id="password">
			<label for="login-password">Password: </label>
			<input type="password" name="password" placeholder="password" id="login-password" />
		</div>
		<div id="submit">
			<input type="submit" name="submit" value="Login" />
		</div>
	</form>
</body>
</html>