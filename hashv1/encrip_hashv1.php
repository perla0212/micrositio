<?php 
  $dato = 'cris';

  $encriptado = md5($dato);
  $encrip = sha1($dato);
  echo $encriptado ;
  echo '/n/n';
  echo $encrip;
?>