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
			background-color: #4ab995;
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
			border: 1px solid #4ab995;
			transition: 1s all;
		}

		#recherche {
			border: 1px solid rgba(0, 0, 0, 0.2);
		}

		@media screen and (max-width: 1280px) {

			.options,
			.options2 {
				width: 100%;
			}

			.inputs input {
				width: 90%;
			}
		}
	</style>
</body>

</html>