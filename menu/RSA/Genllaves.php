<?php

$configargs = array(
    "config" => "C:xampp1/php/extras/openssl/openssl.cnf",//arumentos  para generar llaves
    'private_key_bits' => 2048,
    'default_md' => "sha256",
);

//$generar=openssl_pkey_new($configargs); //creacion de las llaves 
$generar = openssl_pkey_new($configargs);

openssl_pkey_export($generar, $keypriv, NULL, $configargs);

//openssl_pkey_export($generar, $keypriv, NULL, $configargs); //Exportar el contenido de la llave privada a la variable $keypriv

$keypub = openssl_pkey_get_details($generar);

//$keypub = openssl_pkey_get_details($generar); //obtiene los detalles de la llave para generar la llave publica

file_put_contents('privada.key', $keypriv); //crea el archivo . key de la llave privada

file_put_contents('publica.key', $keypub['key']);

echo "<br> Se crearon correctamente las llaves."
?>