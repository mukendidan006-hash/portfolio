<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
</head>

<body>

<h2>Contactez-moi</h2>

<form method="POST">

Nom : <br>
<input type="text" name="nom"><br><br>

Email : <br>
<input type="email" name="email"><br><br>

Message : <br>
<textarea name="message"></textarea><br><br>

<input type="submit" value="Envoyer">

</form>

<?php

if(isset($_POST['nom']))
{

$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

echo "<h3>Message envoyé :</h3>";
echo "Nom : ".$nom."<br>";
echo "Email : ".$email."<br>";
echo "Message : ".$message;

}

?>

</body>
</html>