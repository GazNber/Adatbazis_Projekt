<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!-- Custom fonts, icons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
</head>
<body>
	<nav>
		<div id="logo-container">
			<a href="../index.php" class="logo"><span>M</span>esterember</a>
		</div>

		<div id="nav-kozep">
			<div id="search-container">
				<input type="text" id="searchbar" placeholder="Search">
				<button type="submit">
					<img src="../img/search-icon.png">
				</button>
			</div>
		</div>
		
		<dic class="nav-jobb">
			<a href="business-login.php">Hirdess</a>
			<a href="login.php">Jelentkezz be</a>
			<a href="signin.php" class="signin">Csatlakozz</a>
		</dic>
	</nav>

	<div class="wrapper">
		<div class="card">
			<form action="etc/signin-includes.php" method="POST">
				<div class="input">
					<input type="text" name="name" class="input-field" required value=""/>
					<label class="input-label">Full name</label>
				</div>
				<div class="input">
					<input type="text" name="nickname" class="input-field" required value=""/>
					<label class="input-label">Username</label>
				</div>
				<div class="input">
					<input type="email" name="email" class="input-field" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" value=""/>
					<label class="input-label">Email</label>
				</div>
				<div class="input">
					<input type="password" name="password" class="input-field" required title="Min characters 8&#10Max characters 64 &#013Must contain a capital letter" value=""/>
					<label class="input-label">Password</label>
				</div>
				<div class="input">
					<input type="password" name="password2" class="input-field" required title="Min characters 8&#10Max characters 64 &#013Must contain a capital letter" value=""/>
					<label class="input-label">Password again</label>
				</div>
				<div class="action">
					<button class="action-button" name="submit">Get started</button>
				</div>
			</form>
			<div class="card-info">
				<p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
			</div>
		</div>
	</div>

	<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] == "empty-input") {
			echo "<p class=\"error\">Valamit nem töltöttél ki!</p>";
		}
		if ($_GET["error"] == "invalid-email-address") {
			echo "<p class=\"error\">Helytelen email cím!</p>";
		}
		if ($_GET["error"] == "passwords-do-not-match") {
			echo "<p class=\"error\">A jelszavak nem egyeznek!</p>";
		}
		if ($_GET["error"] == "username-exists") {
			echo "<p class=\"error\">Felhasználónév már létezik</p>";
		}
		if ($_GET["error"] == "email-exists") {
			echo "<p class=\"error\">email cím már létezik</p>";
		}
		if ($_GET["error"] == "bypass-attempt") {
			echo "<p class=\"error\">Nyugi van nagy fiú, regisztrálj mint mindenki más!</p>";
		}
	}
	?>

	

<?php
include_once("footer.php");
?>