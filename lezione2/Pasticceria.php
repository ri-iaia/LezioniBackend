<!DOCTYPE html>
<html>
<head>
    <title><?php echo "Pasticceria Musa"; ?></title>
</head>
<body>
  <?php
  $name = "Ilaria";
//Funzione stampa saluto
  function StampaSaluto($name){
    $testo = " <p> Ciao " .$name . "Benvenut* nella Pasticceria Musa! <br> Sono le ore " .date('H:i') ." del " .date('d/m/Y') ."</p>";
    echo $testo;
  }

  print_my_name($name);
  ?>
    <?php
    $torta1 = "Tiramisu";

    ?>
    <h3>Dolci preferiti:</h3>
        <table border="1">
              <tr>
                <td>

                  <ul> <li> $torta1 </li> </ul> ?>

                </td>
              </tr>
              <tr>
                  <td>
                    <ul> <li>Tortino al cioccolato</li> </ul>
                  </td>
              </tr>
              <tr>
                  <td>
                    <ul> <li>Profitteroles</li> </ul>
                  </td>
              </tr>
        </table>

</body>
</html>
