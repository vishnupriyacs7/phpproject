<?php
// Get the current script filename
$filename = $_SERVER['PHP_SELF'];
echo "Current script filename: $filename<br>";

// Get the server name
$serverName = $_SERVER['SERVER_NAME'];
echo "Server name: $serverName<br>";

// Get the server port
$serverPort = $_SERVER['SERVER_PORT'];
echo "Server port: $serverPort<br>";

// Get the request method
$requestMethod = $_SERVER['REQUEST_METHOD'];
echo "Request method: $requestMethod<br>";

// Get the referring page
if (isset($_SERVER['HTTP_REFERER'])) {
    $referer = $_SERVER['HTTP_REFERER'];
    echo "HTTP referer: $referer<br>";
} else {
    echo "No referer information available.<br>";
}

// Get the user agent (browser information)
$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "User agent: $userAgent<br>";
?>