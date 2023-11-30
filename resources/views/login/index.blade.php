<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gegepedia | Login</title>
  <link rel="stylesheet" href="/css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="/register" method="post">
					@csrf
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name" placeholder="Name" required="">
					<input type="text" name="Username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
<img src="img/gg.png" alt="">
<p style="font-color:white;"">&copy; 2023–2024 GegePedia, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  
</body>
</html>
