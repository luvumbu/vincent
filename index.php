<?php
session_start();
 

?>
<!DOCTYPE html>
<html lang="fr">

<head id="head">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bokonzi</title>
</head>
<link rel="icon" href="https://pbs.twimg.com/profile_images/1244325575659061249/YjvhVutG_400x400.jpg" type="image/gif" sizes="16x16">

<body id="body">
	<?php
	include("link/app.php");
	if (isset($_SESSION["usermail"])) {
	?>
		<style>
			header {
				display: none;
			}
		</style>
	<?php

	} else {
	?>
		<style>
			section {
				display: none;
			}
		</style>
	<?php
	}
	?>

	<style>
		:root {
  --bodycolor: #332e71;
}
		.options,
		.options2 {
			display: flex;
			width: 80%;
			margin: auto;
			justify-content: space-around;
			border-bottom: 1px solid rgba(0, 0, 0, 0.2);
		}

		.options2 {
			border-bottom: 1px solid rgba(0, 0, 0, 0);
			margin-top: 100px;
			text-align: center;
		}

		.options2 input {
			text-align: center;
			padding: 10px;
		}

		.fa-folder-plus,
		.fa-folder,
		.fa-search {
			font-size: 2em;
			padding: 1em;
		}

		.fa-folder-plus:hover,
		.fa-folder:hover,
		.fa-search:hover {
			cursor: pointer;
		}

		.inputs {
			display: flex;
			justify-content: space-around;
			text-align: center;
			margin-top: 50px;
		}

		.inputs input {
			width: 90%;
		}

		.valider {
			background-color:  var(--bodycolor);;
			text-align: center;
			width: 30%;
			transition: 1s all;
			margin-top: 15px;
			padding: 10px;
			color: white;
			border: 1px solid #499c81;
			margin-left: 2.5%;
		}

		.valider:hover {
			cursor: pointer;
			background-color: #499c81;
			border: 1px solid  var(--bodycolor);;
			transition: 1s all;
		}

		.select2 div {

			padding: 15px;
			color: white;
			border: 2px solid  var(--bodycolor);
			color:  var(--bodycolor);
			transition: 2s all;
		}

		.select2 div:hover {

			padding: 15px;
			color: white;
			background-color:  var(--bodycolor);
			color:  var(--bodycolor);
			transition: 0.5s all;
			color: white;
			cursor: pointer;
		}

		.liste_produit_nom {
			font-size: 2em;
			max-height: 600px;
			overflow-y: scroll;
			width: 70%;
			margin: auto;
		}

		.liste_produit_nom div {
			border: 2px solid  var(--bodycolor);
			width: 60%;
			margin: auto;
			transition:all 1s;
		
		}

		.liste_produit_nom div:hover {
			cursor: pointer;
			background-color: var(--bodycolor);
			color: white;
			transition:all 1s;
		}

		body,
		input,
		::placeholder {
			color: #332e71;
		}

		input {
			border: 1px solid #332e71;
			padding: 15px;
			margin: 4px;
		}

		#recherche {
			border: 1px solid rgba(0, 0, 0, 0.2);
		}

		@media screen and (max-width: 1280px) {

			.options,
			.options2 {
				width: 100%;
			}

			.liste_produit_nom div {
				border: 2px solid  var(--bodycolor);
				width: 90%;
				margin: auto;
			}

			.liste_produit_nom {
				font-size: 1.2em;
			}

			.inputs input {
				width: 90%;
			}

			.options2 {

				margin-top: 50px;

			}
		}
	</style>
</body>

</html>