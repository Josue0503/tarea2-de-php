<?php
// Crea dos variables de cookie y asígnales valores
setcookie('var1', 'coockie1, expira en 30 días '.'<br>', time() + (86400 * 30)); // expira en 30 días
setcookie('var2', 'coockie2, expira en 30 días ', time() + (86400 * 30)); // expira en 30 días

// Imprime los valores de las variables de cookie en pantalla
echo $_COOKIE['var1'] . "\n";
echo $_COOKIE['var2'] . "\n";

?>