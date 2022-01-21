<?php


$numeropc = $_POST["numeropc"];
$piso = $_POST["piso"];
$area = $_POST["area"];
$interno = $_POST["interno"];
$usuario = $_POST["usuario"];
$problema = $_POST["problema"];
$serial = $_POST["serial"];



//database connection
$conn = new mysqli ('localhost', 'segpc', '1234', 'segpc');
/*if(!$conn){
        echo 'Error de conexion:' . mysqli_error();
}
        else {
*/

$sql ="INSERT INTO crear_equipo(numeropc,piso,area,interno,usuario,problema,serial)
       VALUES('$numeropc','$piso','$area','$interno','$usuario','$problema','$serial')";

                if ($conn->query($sql) === TRUE) {

                    //chequeando si se ejecuta o no
                    echo "Todo joya pa!" ;
                                                }
                    else {
                        echo "Error:" . $sql. "<br>" .$conn->error ;
                        }
//            }   

?>
<!DOCTYPE html>
<html lang="en">

<?php include('./header.php'); ?>

<div class="content">
    <!-- for background -->
  <div class="background"></div>

<h1> CREAR SEGUIMIENTO DE EQUIPO </h1>

 <!-- for form container -->
  <div class="container">
 
    <form action="crear-equipo.php" method="POST">
      <div class="form-item">
        <input type="text" class="form-input" name="numeropc" placeholder="Numero de PC">
      </div>

      <div class="form-item">
        <input type="text" class="form-input" name="piso" placeholder="PISO">
      </div>
      
      <div class="form-item">
        <input type="text" class="form-input" name="area" placeholder="AREA">
      </div>

      <div class="form-item">
        <input type="text" class="form-input" name="interno" placeholder="INTERNO">
      </div>
      
      <div class="form-item">
        <input type="text" class="form-input" name="usuario" placeholder="USUARIO">
      </div>

      <div class="form-item">
        <input type="text" class="form-input" name="problema" placeholder="PROBLEMA">
      </div>

      <div class="form-item">
        <input type="text" class="form-input" name="serial" placeholder="SERIAL">
      </div>


      
      <button type="submit" input type="submit" name="submit" value="submit" CREAR SEGUIMIENTO>LOGIN</button>
