<?php
//llamoas a las sesiones
session_start();
//Destruimos la sesiónes
session_destroy();
//Nos redirecciona a index.html
header("location: index.html");
