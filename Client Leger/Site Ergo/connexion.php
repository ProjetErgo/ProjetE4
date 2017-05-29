<?php
$user = 'root';
$password = '';
$host = 'localhost';
$bdd = 'ergoapp';
$link = mysql_connect($host, $user, $password);
if (!$link) {
	die("une erreur : ".mysql_error());
}
mysql_select_db($bdd);
?>