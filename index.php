<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
  $string = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $length = strlen($string);
  $bad_word = $_GET["word"];
  $new_string = str_replace($bad_word, "***", $string);
  $new_length = strlen($new_string);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p> <?php echo $string ?> </p>
    <p> <?php echo $length ?> </p>
    <p> <?php echo $new_string ?> </p>
    <p> <?php echo $new_length ?> </p>
  </body>
</html>
