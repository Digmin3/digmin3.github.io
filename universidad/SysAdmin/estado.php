<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Departamento de informática y automática</title>
		<link rel="stylesheet" href="../estilo.css">
		
		<meta property="og:title" content="Departamento de informática y automática"/>
		<meta property="og:image" content="icon.png"/>
		<meta property="og:description" content="Página del departamento de informática y automática" />
		<meta name="description" content="Página del departamento de informática y automática">
		<meta property="og:type" content="website"/>

		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
		<link rel="icon" type="image/png" sizes="196x196" href="/favicon-192.png">
		<link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
		<link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
		<link rel="apple-touch-icon" href="/favicon-57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">
		<meta name="msapplication-TileColor" content="#FFFFFF">
		<meta name="msapplication-TileImage" content="/favicon-144.png">
		<meta name="msapplication-config" content="/browserconfig.xml">
	</head>

	<body>
		<?php
require_once "HTTP/Request2.php";
echo "Este es el estado de los servicios del portal:<br>";
echo "Servidor web: ";
$host = 'localhost'; 
$port = 80; 
$waitTimeoutInSeconds = 1; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
	// It worked 
	echo '<img src="ok.ico" title="ON" alt="ON" width="16px" height="16px">';
} else {
	// It didn't work 
	echo '<img src="cancel.ico" title="OFF" alt="OFF" width="16px" height="16px">';
}
echo "<br>";
fclose($fp);

echo "SSH y SFTP: ";
$host = 'localhost'; 
$port = 22; 
$waitTimeoutInSeconds = 1; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
	// It worked 
	echo '<img src="ok.ico" title="ON" alt="ON" width="16px" height="16px">';
} else {
	// It didn't work 
	echo '<img src="cancel.ico" title="OFF" alt="OFF" width="16px" height="16px">';
}
echo "<br>";
fclose($fp);

echo "Portada: ";
$request = new HTTP_Request2('http://localhost/', HTTP_Request2::METHOD_GET);
try {
    $response = $request->send();
    if (200 == $response->getStatus() or 302 == $response->getStatus() or 301 == $response->getStatus()) {
        echo '<img src="ok.ico" title="ON" alt="ON" width="16px" height="16px">';
    } else {
        echo '<img src="cancel.ico" title="OFF" alt="OFF" width="16px" height="16px">';
		echo '   Error detectado: Unexpected HTTP status: ' . $response->getStatus() . ' ' .
             $response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
echo "<br>";

echo "Email: ";
$request = new HTTP_Request2('http://localhost/webmail/', HTTP_Request2::METHOD_GET);
try {
    $response = $request->send();
    if (200 == $response->getStatus() or 302 == $response->getStatus() or 301 == $response->getStatus()) {
        echo '<img src="ok.ico" title="ON" alt="ON" width="16px" height="16px">';
    } else {
        echo '<img src="cancel.ico" title="OFF" alt="OFF" width="16px" height="16px">';
		echo '   Error detectado: Unexpected HTTP status: ' . $response->getStatus() . ' ' .
             $response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
echo "<br>";

echo "<br>Esta página de estado funciona si el siguiente campo está en rojo: ";
$request = new HTTP_Request2('http://localhost/sentidodelavida', HTTP_Request2::METHOD_GET);
try {
    $response = $request->send();
    if (200 == $response->getStatus() or 302 == $response->getStatus() or 301 == $response->getStatus()) {
        echo '<img src="ok.ico" title="ON" alt="ON" width="16px" height="16px">';
    } else {
        echo '<img src="cancel.ico" title="OFF" alt="OFF" width="16px" height="16px">';
		echo '   Error detectado: Unexpected HTTP status: ' . $response->getStatus() . ' ' .
             $response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
echo "<br>";
?>
	</body>
</html>