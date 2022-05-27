<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Carte de crédit</title>
<meta charset="utf-8">
</head>
<?php
// Set session variables (variables globales)
$_SESSION["login"] = "";
$_SESSION["mdp"] = "";
?>
<body>
<h2>Connexion</h2>
<form action="Connexion2.php" method="post">

<tr>
<td>Login :</td>
<td><input type="text" name="login"></td>
</tr>
<tr>
<td>Mot de passe:</td>
<td><input type="text"  name="mdp"></td>
</tr>

<td colspan="2" align="center">
<input type="submit" name="button1" value="Se Connecter">
</td>
</tr>
</form>

</body>
</html>