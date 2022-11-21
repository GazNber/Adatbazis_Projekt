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

	<main>
	<?php
		if (isset($_SESSION["username"])) {
			echo "Be vagy jelentkezve";
		}
	?>
	</main>


	<footer>
		<div class="contain">
			<div class="col">
				<h1>Company</h1>
				<ul>
					<li>About</li>
					<li>Mission</li>
					<li>Services</li>
					<li>Social</li>
					<li>Get in touch</li>
				</ul>
			</div>
			<div class="col">
				<h1>Products</h1>
				<ul>
					<li>About</li>
					<li>Mission</li>
					<li>Services</li>
					<li>Social</li>
					<li>Get in touch</li>
				</ul>
			</div>
			<div class="col">
				<h1>Accounts</h1>
				<ul>
					<li>About</li>
					<li>Mission</li>
					<li>Services</li>
					<li>Social</li>
					<li>Get in touch</li>
				</ul>
			</div>
			<div class="col">
				<h1>Resources</h1>
				<ul>
					<li>Webmail</li>
					<li>Redeem code</li>
					<li>WHOIS lookup</li>
					<li>Site map</li>
					<li>Web templates</li>
					<li>Email templates</li>
				</ul>
			</div>
			<div class="col">
				<h1>Support</h1>
				<ul>
					<li>Contact us</li>
					<li>Web chat</li>
					<li>Open ticket</li>
				</ul>
			</div>
			<div class="col social">
				<h1>Social</h1>
				<ul>
					<li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
					<li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
					<li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</footer>

	<script type="text/javascript">
		let subMenu = document.getElementById("subMenu");

		function toggleMenu() {
			subMenu.classList.toggle("open-menu");
		}
	</script>
</body>
</html>