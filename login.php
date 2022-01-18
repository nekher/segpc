<?php
?>
<!DOCTYPE html>
<html lang="en">

<?php include('./header.php'); ?>

<div class="content">
    <!-- for background -->
  <div class="background"></div>

  <!-- for form container -->
  <div class="container">
    <h2>Acceso a SegPC</h2>
    <form action="">

      <div class="form-item">
        <span class="material-icons-outlined">
          account_circle
        </span>
        <input type="text" name="user" id="user" placeholder="Nombre de usuario">
      </div>

      <div class="form-item">
        <span class="material-icons-outlined">
          lock
        </span>
        <input type="password" name="pass" id="pass" placeholder="Password">
      </div>
      
      <p></p>
      <p></p>
<div class="botones">
      <button type="submit">LOGIN</button>
      <button type="submit">LOGOUT</button>
</div>
      <p></p>
      <p></p>

    </form>
  </div>
  </div>