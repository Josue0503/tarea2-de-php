<?php
// Inicia una nueva sesión o reanuda una existente
session_start();

// Crea cinco variables de sesión y asígnales valores
$_SESSION['var1'] = 'valor1';
$_SESSION['var2'] = 'valor2';
$_SESSION['var3'] = 'valor3';
$_SESSION['var4'] = 'valor4';
$_SESSION['var5'] = 'valor5';

// Imprime la información completa de las variables de sesión en pantalla
print_r($_SESSION['var1']."<br>");
print_r($_SESSION['var2']."<br>");
print_r($_SESSION['var3']."<br>");
print_r($_SESSION['var4']."<br>");
print_r($_SESSION['var5']."<br>");


?>
