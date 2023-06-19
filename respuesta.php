<?php
 if(isset($_POST["username"]) && isset($_POST["email"])) {
    
   $usuario = $_POST["username"];
   $correo =  $_POST["email"];

   ?>
  <table style="border-collapse: collapse; width: 100%">
    <h2>Tabla</h2>
    <tr>
      <th style="border: 1px solid black; padding: 8px;">Nombre de Usuario</th>
      <th style="border: 1px solid black; padding: 8px;">Correo Electrónico</th>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 8px;"><?php echo $usuario?></td>
      <td style="border: 1px solid black; padding: 8px;"><?php echo $correo?></td>
    </tr>
  </table>
  <br>
  <a href="index.html">Regresar</a>
   <?php
  
 } else {
   echo'<script>
    alert("Ingrese los datos");
    window.location.href="index.html";
    </script>'; 
}
?>