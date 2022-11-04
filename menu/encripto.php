<?php 

function cifrar($mensaje, $llave) //Funcion para cifrar
    {
        $inivec = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC')); //Vector de inicialización para generar eñ cifrado
        $men_encriptado = openssl_encrypt($mensaje, "AES-256-CBC", $llave, 0, $inivec); //Metodo para cifrar la información

        return base64_encode($men_encriptado . "::" . $inivec); //Regresar el mensaje cifrado
    }

    function descifrar($mensaje, $llave) //Funcion para desifrar el mensaje
    {
        list($datos_encriptados, $inivec) = explode('::', base64_decode($mensaje), 2); //convert_uudecode() ---> otra funcion para descifrar

        return openssl_decrypt($datos_encriptados, 'AES-256-CBC', $llave, 0, $inivec); // Método para decifrar la información
    }
    ?>