<?php
//Inicia la sesión ya creada
session_start();

/*Si la sesiòn es verdadera ejecuta
esta condicional*/
if ($_SESSION['logueado']) {

  echo "<br>";

  //Muestra el usuario
  echo 'Bienvenido, ' . $_SESSION['username'];

  echo '<br>';
  //Muestra la hora iniciada
  echo 'Horario de Conexion:' . $_SESSION['time'];

  echo '<br>';

  //Cerramos sesión
  echo '<a href="logout.php">Logout</a>';

  echo '<br>';

  //Menú de opciones
  echo "<h1 style='text-align:center'> Menú de Opciones </h1>";

} else {

  header("location: index.html");
  exit();

}
