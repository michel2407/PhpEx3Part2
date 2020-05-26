<?php
$gender = 'femme';
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3 Part 2 - Php</title>
  </head>
  <body>
<?php
if ($gender != 'femme') {
  ?>
  <p>C'est un développeur</p>
  <?php
}
 elseif ($gender != 'homme') {
  ?>
  <p>C'est un développpeuse</p>
  <?php
}
 ?>
  </body>
</html>
