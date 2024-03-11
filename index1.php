<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
</head>
<body>
<?php
if (getenv('JAWSDB_URL') !== false){
$dbparts = parse_url(getenv('JAWSDB_URL'));

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');
} else{
$hostname = 'localhost';
$username = 'root';
$password ='';
$database = 'test';
}

?>
</body>
</html>
