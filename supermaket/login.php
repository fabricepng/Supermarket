<!DOCTYPE html>
<html>
<head>
	<title>login employe</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<div id="frm">
		<form method="POST" action="process.php">
			<p>
				<label>Immatricule:</label>
				<input type="text" name="imma" id="imma">
			</p>
			<p>
				<label>Mot de passe:</label>
				<input type="password" name="mdp" id="mdp">
			</p>
			<p>
				<input type="submit" name="valider" id="valider" value="valider">
			</p>
		</form>
	</div>
</body>
</html>