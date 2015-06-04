<?php

@$tuip = getenv(REMOVE_ADDR);

echo "Tu IP es :".@$tuip;

echo "<br>";
$tunavegador = $_SERVER{"HTTP_USER_AGENT"};

echo "Y tu sistema operativo y navegador y navegador es: ".$tunavegador;

?>