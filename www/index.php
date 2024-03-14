<?php
define("MYSQL_HOST", "database");
define("MYSQL_USER", "bigbang_user");
define("MYSQL_PWD", "luu2xZ9N0tBJW3b");
define("MYSQL_DBNAME", "bigbang_db");

try {
    $connexionDB	=	new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DBNAME.";charset=UTF8", MYSQL_USER, MYSQL_PWD);
    $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connection réussi !!!';
} catch (PDOException $ePDOException) {
    die();
}
$result = $connexionDB->query("SELECT * FROM administrateur");
var_dump($result->fetchAll(PDO::FETCH_OBJ));


phpinfo();