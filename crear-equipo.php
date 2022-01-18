<?php

if (isset($_POST['submit'])){

}
if(empty($_POST['ID'])){
    echo 'NECESITAS PONER LOS DATOS PA!';
}   
    else {
        echo htmlspecialchars($_POST['ID']);
    }

if(empty($_POST['PISO'])){
    echo 'NECESITAS PONER LOS DATOS PA!';
}   
    else {
        echo htmlspecialchars( $_POST['PISO']);
    }

if(empty($_POST['AREA'])){
    echo 'NECESITAS PONER LOS DATOS PA!';
}   
    else {
        echo htmlspecialchars($_POST['AREA']);
    }

if(empty($_POST['INTERNO'])){
    echo 'NECESITAS PONER LOS DATOS PA!';
}   
    else {
        echo htmlspecialchars($_POST['INTERNO']);
    }

if(empty($_POST['USUARIO'])){
    echo 'NECESITAS PONER LOS DATOS PA!';
}   
    else {
        echo htmlspecialchars($_POST['USUARIO']);
    }

if(empty($_POST['PROBLEMA'])){
    echo 'NECESITAS PONER LOS DATOS PA!';
}   
    else {
        echo htmlspecialchars($_POST['PROBLEMA']);
    }


if(empty($_POST['SERIAL'])){
    echo 'NECESITAS PONER LOS DATOS PA!';
}   
    else {
        echo htmlspecialchars($_POST['SERIAL']);
    }



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
        <input type="text" class="form-input" name="ID" placeholder="ID">
      </div>

      <div class="form-item">
        <input type="text" class="form-input" name="PISO" placeholder="PISO">
      </div>
      
      <div class="form-item">
        <input type="text" class="form-input" name="AREA" placeholder="AREA">
      </div>

      <div class="form-item">
        <input type="text" class="form-input" name="INTERNO" placeholder="INTERNO">
      </div>
      
      <div class="form-item">
        <input type="text" class="form-input" name="USUARIO" placeholder="USUARIO">
      </div>

      <div class="form-item">
        <input type="text" class="form-input" name="PROBLEMA" placeholder="PROBLEMA">
      </div>

      <div class="form-item">
        <input type="text" class="form-input" name="SERIAL" placeholder="SERIAL">
      </div>


      
      <button type="submit" input type="submit" name="submit" value="submit" CREAR SEGUIMIENTO>LOGIN</button>
