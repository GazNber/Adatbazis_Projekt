<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Main</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Custom fonts, icons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
</head>
<body>
	<nav>
		<div id="logo-container">
			<a href="index.php" class="logo">Mesterember</a>
		</div>

		<div id="nav-kozep">
			<div id="search-container">
				<input type="text" id="searchbar" placeholder="Search">
				<button type="submit">
					<img src="img/search-icon.png">
				</button>
			</div>
		</div>
		
		<dic class="nav-jobb">
			<?php
				if (isset($_SESSION["userid"])) {
					echo '
					<a href=\"business-login.php\">Hirdess</a>
					<img src="img/admin.jpg" id="profile-pic-nav" onclick="toggleMenu()">
			
					<div class="sub-menu-container" id="subMenu">
						<div class="sub-menu">
							<div class="user-info">
								<div class="pic-container">
									<img src="img/admin.jpg" id="profile-pic-menu">
								</div>
								<h3>John Dow</h3>
							</div>
							<hr><!-- line -->
							<a href="user-profile.php" class="sub-menu-link">
								<img src="img/user-solid.svg">
								<p href="#" class="">Profil</p>
							</a>
							<a href="settings.php" class="sub-menu-link">
								<img src="img/settings.svg">
								<p href="#" class="">Beállítások és irányelvek</p>
							</a>
							<a href="help.php" class="sub-menu-link">
								<img src="img/info.svg">
								<p href="#" class="">Információ</p>
							</a>
							<a href="php/etc/logout.php" class="sub-menu-link">
								<img src="img/logout.svg">
								<p href="#" class="">Kilépés</p>
							</a>
						</div>
					</div>';
				} else {
					echo "
					<a href=\"php/business-login.php\">Hirdess</a>
					<a href=\"php/login.php\">Jelentkezz be</a>
					<a href=\"php/signin.php\" class=\"signin\">Csatlakozz</a>";
				}
			?>
		</dic>
	</nav>

	
	<div class="dropdown-container">
		<ul>
			<li><a href="" class="test">felirat</a></li>
				<ul class="dropdown">
					<li><a href="">Festés, vakolás</a></li>
					<li><a href="">Takarítás</a></li>
					<li><a href="">Babysitt</a></li>
					<li><a href="">Asztalos</a></li>
					<li><a href="">Ács</a></li>
					<li><a href="">Építész</a></li>
					<li><a href="">Nyílászáró</a></li>
					<li><a href="">Csőszerelő, Duguláselhárítás</a></li>
					<li><a href="">Villanyszerelő</a></li>
					<li><a href="">Biztonságtechnika</a></li>
					<li><a href="">Rendszergazda</a></li>
					<li><a href="">Fűtés</a></li>
					<li><a href="">Rágcsáló-, Rovarírtás</a></li>
					<li><a href="">Ezermester</a></li>
				</ul>
			<li><a href="">hosszú felirat</a></li>
			<li><a href="">méghosszabb felirat</a></li>
		</ul>
	</div>

	<main>
		<div id="sidebar">
			<ul>
				<li><a href="">Ház</a></li>
					<ul class="dropdown">
						<li><a href="">Festés, vakolás</a></li>
						<li><a href="">Takarítás</a></li>
						<li><a href="">Babysitt</a></li>
						<li><a href="">Asztalos</a></li>
						<li><a href="">Ács</a></li>
						<li><a href="">Építész</a></li>
						<li><a href="">Nyílászáró</a></li>
						<li><a href="">Csőszerelő, Duguláselhárítás</a></li>
						<li><a href="">Villanyszerelő</a></li>
						<li><a href="">Biztonságtechnika</a></li>
						<li><a href="">Rendszergazda</a></li>
						<li><a href="">Fűtés</a></li>
						<li><a href="">Rágcsáló-, Rovarírtás</a></li>
						<li><a href="">Ezermester</a></li>
						<li><a href="">Redőnyjavítás</a></li>
						<li><a href="">Szallagfüggöny</a></li>
						<li><a href="">Üveges</a></li>
						<li><a href="">Hang, tető és hőszigetelés</a></li>
						<li><a href="">Kandalló, cserépkályha építő</a></li>
						<li><a href="">Kapucsengő szerelés</a></li>
						<li><a href="">Kéményseprő</a></li>
						<li><a href="">Kárpitos</a></li>
						<li><a href="">Napkollektor szerelő</a></li>
						<li><a href="">Ingatlan Értékbecslő</a></li>
						<li><a href="">Ingatlan Értékesítő</a></li>
						<li><a href="">Gázvezeték szerelő</a></li>
						<li><a href="">Ingatlan fotózás</a></li>
						<li><a href="">Zárszerelés</a></li>
						<li><a href="">Lakatos</a></li>
						<li><a href="">Megeburkoló, parkettázás</a></li>
						<li><a href="">Szőnyegtisztító</a></li>
						<li><a href="">Építési Műszaki Ellenőr</a></li>
						<li><a href="">Kábeltévé és Antenna szerelés</a></li>
					</ul>
				<li><a href="">Kert</a></li>
					<ul class="dropdown">
						<li><a href="">Uszoda technika</a></li>
						<li><a href="">Öntözés</a></li>
						<li><a href="">Kertépítés</a></li>
						<li><a href="">Szippantás</a></li>
						<li><a href="">Kaputelefon szerelés</a></li>
						<li><a href="">Fakitermelő</a></li>
						<li><a href="">Térképész</a></li>
						<li><a href="">Hegesztés</a></li>
						<li><a href="">Zárszerelés</a></li>
						<li><a href="">Földi munka</a></li>
						<li><a href="">Betonozás</a></li>
						<li><a href="">Sittelszállítás</a></li>
						<li><a href=""></a></li>
					</ul>
				<li><a href="">Informatika</a></li>
					<ul class="dropdown">
						<li><a href=""></a></li>
					</ul>
				<li><a href="">Üzlet</a></li>
					<ul>

					</ul>
				<li><a href="">Életstílus</a></li>
					<ul>

					</ul>
				<li><a href="">Dizájn</a></li>
					<ul>

					</ul>
			</ul>
		</div>
        <div id="main">
			<div class="kartya">
				<img src="img/unnamed.jpg" class="thumbnail">
				<div>
					<img src="img/new-user/simpsons.jpg" class="profpic-small">
					<div class="seller-name">Vincs Eszter</div>
				</div>
				<div class="kartya-cim">Csinálok neked reggelit</div>
				<div class="statistics">
					<div class="bal">
						<img src="img/star.svg" class="csillag">
						<div class="ertekeles">5.0</div>
						<div class="db-vasarlo">(125)</div>
					</div>
					<div class="jobb">
						<div class="legkisebb">Starting at</div>
						<div class="legkisebb-ar">$10</div>
					</div>
				</div>
			</div>
		</div>
        <div id="side-content"></div>
	</main>

<?php
include_once("php/footer.php");
?>