<?php
error_reporting(E_ALL);  

//Configuración global
require_once '../app/config/global.php';

//Base para los controladores
require_once '../core/ControladorBase.php';
 
//Funciones para el controlador frontal
require_once '../core/ControllerFrontend.func.php';

//Helper para la vista
require_once '../core/ViewHelper.php'; 

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;

     // IP compartido
	/*echo "Tu dirección IP es: ".$_SERVER['REMOTE_ADDR'];
	$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
	$latitud = $meta['geoplugin_latitude'];
	$longitud = $meta['geoplugin_longitude'];
	$ciudad = $meta['geoplugin_city'];
	echo "Latitud es: ".$latitud = $meta['geoplugin_latitude']."Longitud :". $longitud."Cuidad :". $ciudad;
echo "El nombre del servidor es: {$_SERVER['SERVER_NAME']}<hr>"; 
echo "Vienes procedente de la página: {$_SERVER['HTTP_REFERER']}<hr>"; 
echo "Te has conectado usando el puerto: {$_SERVER['REMOTE_PORT']}<hr>"; 
echo "El agente de usuario de tu navegador es: {$_SERVER['HTTP_USER_AGENT']}";
	*/

}

/*function iploc($ip) {
  $html = file_get_contents("http://ipinfodb.com/ip_locator.php?ip=".$ip);
  preg_match("/<li>Country : (.*?) <img/",$html,$data);
  $d['pais'] = $data[1];
  preg_match("/<li>State\/Province : (.*?)<\/li>/",$html,$data);
  $d['state'] = $data[1];
  preg_match("/<li>City : (.*?)<\/li>/",$html,$data);
  $d['city'] = $data[1];
  return ($d);
}
function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
 
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
 
    return $_SERVER['REMOTE_ADDR'];
}
$ip = getRealIP();
$iploc = iploc($ip);
echo $iploc["city"].", ".$iploc["state"].", ".$iploc["pais"];
// FEDERAL, ENTRE RIOS, AR


//echo getRealIpAddr(); // Parsa saber la ip de usuairio*/

//echo trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
//

if(isset($_GET["limit"])){
  $params= $_GET["limit"] ."|".$_GET["offset"];
 
} else{$params="5";}

//$controller=$_GET["controller"];



//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=loadController($_GET["controller"]);
    sendAction($controllerObj,$params);
}else{
    $controllerObj=loadController(DEFAULT_CONTROLLER);
    sendAction($controllerObj,$params);
}
?>
