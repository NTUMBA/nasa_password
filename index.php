<!DOCTYPE html>
<html>
  <head>
    <title>Password protected page</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <meta charset="utf-8"/>
  </head>
  <body>
    <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
    <form action="secret.php" method="post">
      <p>
        <input type="password" name="mot_de_passe" />
        <input type="submit" value="Valider" />
      </p>
    </form>
    <p>Réservé aux VIP, FBI, CIA, KGB, STAZI, etc.</p>
  </body>
</html>
