<?php include ("../php/Header.php"); ?>

<script language="javascript">

<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>

</script>

<?php include ("../php/Body.php"); ?>

<table class="table">
  <!-- <caption>List of users</caption> -->
  <thead class="alert-info shadow text-center">
    <tr>
      <th scope="col" colspan="2">Bienvenido(a): <?php echo $_SESSION["Nombre"]; ?></th>
      <!-- <th scope="col">First</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tu correo personal es:</th>
      <td> <?php echo $_SESSION["Correo"]; ?></td>
    </tr>
  </tbody>
</table>

<?php include ("../php/Footer.php"); ?>