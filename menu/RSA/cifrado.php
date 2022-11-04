<?php 
//datos para encriptar y desencriptar
$dato = 'mi materia seguridad inf'; //dato a cifrar
echo "<br> el texto a cifrar es: " .$dato ."<br/><br/>";
$llave = 'M2M2M2';


error_reporting (0);
    //declaro mis funciones
    function encriptar($dato,$llave){
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encriptado = openssl_encrypt($dato, "aes-256-cbc", $llave, 0, $iv);
        return base64_encode($encriptado." :: ".$iv);
    }

    // function desencriptar($dato,$llave){
    //     list($encrypted_data,$iv) = explode('::', base64_decode($dato), 2);
    //     return openssl_decrypt($encrypted_data, 'aes-256-cbc', $llave, 0, $iv);
    // }


?>