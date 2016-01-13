<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="theme-color" content="#2E7D32">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
		<title>SloCode</title>
		<!--jquery Import-->
		<script src="../scripts/jquery/external/jquery/jquery-2.1.4.js"></script>
		<script src="../scripts/jquery/jquery-ui.js"></script>
		<link href="../scripts/jquery/jquery-ui.css" rel="stylesheet">
		<link rel="import" href="https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html">
		<!--main scripts import-->
		<script src="../scripts/site.php"></script>
		<!--main styles import-->
		<link rel="stylesheet" href="../styles/error/error.css">
		<link rel="stylesheet" href="../styles/new.css">
		<link rel="stylesheet" href="../styles/error/error-small.css">

	</head>
	<body>


		<!--header-->
		<header>

			</div>
			<div class="toolbar">
				<div class="title">SloCode nov članek</div>
				<div id="sticky">
				<br/>
				</div>
			</div>
		</header>
		<!--content-->
		<div id="body">
			<div class="content ">

				<div class="card">

				<form method="post" action="#">
					<br><br>
					<div class="label form">Naslov:</div>
					<textarea type="text" name="Content" id="Content" /></textarea>

					<div class="label form">Vsebina:</div>
					<textarea type="text" name="Content" id="Content" /></textarea>

					<input type="submit" name="action" value="OBJAVI" id="Raised">

				</input>
				</form>
				</div>

				<div id="sent" style="display:none">
					abc
				</div>

			</div>
		</div>
	</body>
</html>
