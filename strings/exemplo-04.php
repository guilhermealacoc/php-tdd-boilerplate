<?php

$frase = "A repeticao eh a mae da retensao";

$q = strpos($frase, "mae");

$texto = substr($frase, 0, $q);

var_dump($texto);
