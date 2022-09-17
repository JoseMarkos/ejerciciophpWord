<?php

function imgTo64 ($img) {
  // https://cloud.google.com/functions/docs/create-deploy-http-php
  // https://github.com/PHPOffice/PHPWord

  // MysQl

  /* 
    ejercicio hacer un archivo de php que haga hola mundo con la libreria
  */
  
  $url = "https://ui-avatars.com/api/?length=20&name=$img";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPGET, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $return = curl_exec ($ch);
  curl_close ($ch);

  return base64_encode($return);
}