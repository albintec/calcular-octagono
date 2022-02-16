<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estilos2.css">
    <title>Calcular Octágono</title>
</head>

<body>

      <section class="formulario">
          <h4>Calcular Área Octágono</h4>
          <form action="index.php" method="get">
              <input class="control" type="text" name="num1" placeholder="Ingresa tamaño de los lados" pattern="^[0-9]+([.][0-9]+)?$" oninvalid="this.setCustomValidity('Solo se permiten numeros y cuando llevan decimal agregar .')">
              <input class="control" type="text" name="num2" placeholder="Ingresa el tamaño de la apotema" pattern="^[0-9]+([.][0-9]+)?$" oninvalid="this.setCustomValidity('Solo se permiten numeros y cuando llevan decimal agregar')">
              <button class="boton" type="submit">Calcular</button> <br> 

              <?php
            if ($_GET) {
                $lados = $_GET['num1'];
                $apotema = $_GET['num2'];
                
                $perimetro = $lados * 8;
                
                $resultado = ($perimetro * $apotema) / 2;

                if($resultado <= 0) {
                    echo "El valor del area no puede ser cero ni un numero negativo";
                } else {

                echo "El valor del area es:  " . $resultado;
                echo"<br>";
                }
            }
            ?>
             <br>
             <img src="./img/formula.png" alt="area de un octagono">

          </form>
         
      </section>



</body>

</html>
