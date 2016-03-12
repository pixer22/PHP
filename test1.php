<?
session_start();

if ($_COOKIE["PHPSESSID"]){
	$_SESSION["login"] = "vasua";
}
?>