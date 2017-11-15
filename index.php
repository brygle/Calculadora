<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel='stylesheet' href='estilos.css'>
</head>
<body>
 <center><div id='calculadora'>
 <h2>CALCULADORA</h2>
  <form action="" method="post">
      <input type='text' id='numero' name='numero'  placeholder='Ingresa el primer numero '>
      <input type='text' id='numero2' name='numero2' placeholder='Ingresa el segundo numero '> <br><br>
      <input type='submit' id='mas' name='mas' value='+'>
      <input type='submit' id='menos' name='menos' value='-'>
      <input type='submit' id='por' name='por' value='x'>
      <input type='submit' id='entre' name='entre' value='/'>
      <input type='submit' id='modulo' name='modulo' value='mod'>
      <input type='submit' id='potencia' name='potencia' value='^'> 
  </form>
  <?php 
    if(isset($_POST['mas'])){
        $numero = $_POST["numero"];
        $numero2 = $_POST["numero2"];
        $resultado = $numero + $numero2;
        echo "<p class='resultado'>Tu resultado es: $resultado</p>";
    }
    
    if(isset($_POST['menos'])){
        $numero = $_POST["numero"];
        $numero2 = $_POST["numero2"];
        $resultado = $numero - $numero2;
        echo "<p class='resultado'>Tu resultado es: $resultado</p>";
    }
    if(isset($_POST['por'])){
        $numero = $_POST["numero"];
        $numero2 = $_POST["numero2"];
        $resultado = $numero * $numero2;
        echo "<p class='resultado'>Tu resultado es: $resultado</p>";
    }
    if(isset($_POST['entre'])){
        $numero = $_POST["numero"];
        $numero2 = $_POST["numero2"];
        $resultado = $numero / $numero2;
        echo "<p class='resultado'>Tu resultado es: $resultado</p>";
    }
    if(isset($_POST['modulo'])){
        $numero = $_POST["numero"];
        $numero2 = $_POST["numero2"];
        $resultado = $numero % $numero2;
        echo "<p class='resultado'>Tu resultado es: $resultado</p>";
    }
    if(isset($_POST['potencia'])){
        $numero = $_POST["numero"];
        $numero2 = $_POST["numero2"];
        $resultado = $numero ** $numero2;
            echo "<p class='resultado'>Tu resultado es: $resultado</p>";
    }  
  ?>
   
     </div></center>
</body>
</html>