<?php include ("../php/Header.php"); ?>

<script language="javascript">

<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>

</script>

<?php include ("../php/Body.php"); ?>

<table class="table">
  <!-- <caption>List of users</caption> -->
  <thead class="alert-info shadow text-center">
    <tr>
      <th scope="col" colspan="3">Bienvenido(a): <?php echo $_SESSION["Nombre"]; ?></th>
      <!-- <th scope="col">First</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tu correo personal es:</th>
      <td> <?php echo $_SESSION["Correo"]; ?>&nbsp;&nbsp; &nbsp; <a href="https://webmail1.hostinger.mx/" target="_blank"><img src="../imagenes/images_vectorized.png" alt="Logo" style="width:38px;"></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Correo de Cotizaciones y General</th>
      <td><?php echo $_SESSION["Correo2"]; ?>&nbsp;&nbsp; &nbsp; <a href="https://www.google.com/gmail/" target="_blank"><img src="../imagenes/logo_gmail.ico" alt="Logo" style="width:28px;"></a>
      </td>
      <td></td>
    </tr>
  </tbody>
</table>


<?php include ("../php/Footer.php"); ?>