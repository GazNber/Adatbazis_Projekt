<?php
	session_start();
?>

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
			<a href="../index.php" class="logo">Mesterember</a>
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
			<?php
				if (isset($_SESSION["userid"])) {
					echo '
					<a href=\"business-login.php\">Hirdess</a>
					<img src="../img/admin.jpg" id="profile-pic-nav" onclick="toggleMenu()">
			
					<div class="sub-menu-container" id="subMenu">
						<div class="sub-menu">
							<div class="user-info">
								<div class="pic-container">
									<img src="../img/admin.jpg" id="profile-pic-menu">
								</div>
								<h3>John Dow</h3>
							</div>
							<hr><!-- line -->
							<a href="user-profile.php" class="sub-menu-link">
								<img src="../img/user-solid.svg">
								<p href="#" class="">Profil</p>
							</a>
							<a href="settings.php" class="sub-menu-link">
								<img src="../img/settings.svg">
								<p href="#" class="">Beállítások és irányelvek</p>
							</a>
							<a href="help.php" class="sub-menu-link">
								<img src="../img/info.svg">
								<p href="#" class="">Információ</p>
							</a>
							<a href="etc/logout.php" class="sub-menu-link">
								<img src="../img/logout.svg">
								<p href="#" class="">Kilépés</p>
							</a>
						</div>
					</div>';
				} else {
					echo "
					<a href=\"business-login.php\">Hirdess</a>
					<a href=\"login.php\">Jelentkezz be</a>
					<a href=\"signin.php\" class=\"signin\">Csatlakozz</a>";
				}
			?>
		</dic>
	</nav>

	<div class="wrapper">
		<div class="card">
			<form action="etc/login-includes.php" method="POST">
				<div class="input">
					<input type="text" name="username" class="input-field" required/>
					<label class="input-label">Full name</label>
				</div>
				<div class="input">
					<input type="password" name="password" class="input-field" required title="Min characters 8&#10Max characters 64 &#013Must contain a capital letter"/>
					<label class="input-label">Password</label>
				</div>
				<div class="action">
					<button class="action-button" name="submit">Get started</button>
				</div>
			</form>
			<div class="card-info">
				<p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
			</div>
		</div>

		<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "empty-input") {
				echo "<p class=\"error\">Valamit nem töltöttél ki!</p>";
			}
			if ($_GET["error"] == "wrong-login") {
				echo "<p class=\"error\">Valamit elírhattál</p>";
			}
			if ($_GET["error"] == "login-bypass-attempt") {
				echo "<p class=\"error\">Nyugi van nagy fiú, jelentkezz be mint mindenki más!</p>";
			}
		}
		?>
		
	</div>

<?php
include_once("footer.php");
?>