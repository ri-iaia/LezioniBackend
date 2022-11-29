<html>
<head>
  <title><?php echo 'Nome pagina'; ?></title>
<head>
<body>
  <?php
  $name = "Ilaria";
  $testo = "Il mio nome è ";
  echo $testo .$name .'<br>';
  echo "Il mio nome è " .$name .'<br>';

  function print_my_name($name){
    echo "<br> <strong>Ciao " .$name . "!</strong>";
  }
  print_my_name($name);
  ?>
</body>
</html>
