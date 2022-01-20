<?php
/*
$numeropc = $_POST['numeropc'];
$piso = $_POST['piso'];
$area = $_POST['area'];
$interno = $_POST['interno'];
$usuario = $_POST['usuario'];
$problema = $_POST['problema'];
$serial = $_POST['serial'];
*/

//database connection

$conn = new mysqli ('localhost', 'segpc', '1234', 'segpc');
if(!$conn){
echo 'Error de conexion:' . mysqli_error();
}
 else {
        $stmt = $conn->prepare("ingresar en el registro (numeropc, piso, area, interno, usuario, problema, serial)
        values (?,?,?,?,?,?,?,)");
        $stmt->bind_param("sisisss", $numeropc, $piso, $area, $interno, $usuario, $problema, $serial);
        $stmt->execute();
        echo "Excelsior";
       $stmt->close();
        $conn->close();
  }

/*
if (isset($_POST['submit'])){
}
if(empty($_POST['numeropc'])){
    echo 'te falto el numero de pc!';
}   
    else {
        echo htmlspecialchars($_POST['numeropc']);
    }
if(empty($_POST['piso'])){
    echo 'Te olvidaste el piso!!!';
}   
    else {
        echo htmlspecialchars( $_POST['piso']);
    }
if(empty($_POST['area'])){
    echo 'Emm.. y el area?!';
}   
    else {
        echo htmlspecialchars($_POST['area']);
    }
if(empty($_POST['interno'])){
    echo 'Se te ocurrio que necesitamos comunicarnos? cual es el interno?!';
}   
    else {
        echo htmlspecialchars($_POST['interno']);
    }
if(empty($_POST['usuario'])){
    echo 'Por quien preguntamos?!';
}   
    else {
        echo htmlspecialchars($_POST['usuario']);
    }
if(empty($_POST['problema'])){
    echo 'Cual es el problema?!';
}   
    else {
        echo htmlspecialchars($_POST['problema']);
    }

if(empty($_POST['serial'])){
    echo 'Numero de Serie. !';
}   
    else {
        echo htmlspecialchars($_POST['serial']);
    }
*/

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
