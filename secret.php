<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>nasa</title>
  </head>
  <body>

  <?php
//vérification de présence de mot de passe
    if (isset($_POST['admit']) AND htmlspecialchars($_POST['admit']) AND $_POST['admit'] == 'kangourou') {
  //comparaison entre mot de passe tapé et mot de pass actuel


  ?>
    <p>Code confidentiel</p>
    <p>Eureka/bingo/abrakadabra/lux fit</p>
    <p>Houston are you there</p>

  <?php
}
    else{
        echo 'Wrong password';
    }
    ?>
</body>
</html>
