<?php
echo md5("12345"). "\n";
echo password_hash("123456", PASSWORD_DEFAULT). "\n";
?>

<?
$name = trim(strip_tags($_POST['name']));
$login = trim(strip_tags($_POST['login']));
$passwd = trim(strip_tags($_POST['passwd']));
$email = trim(strip_tags($_POST['email']));

if ($name && $login && $passwd && $email){
$passdwhash= password_hash('.$passwd', PASSWORD_DEFAULT). "\n";

$users[]=[

			"name" => $name,
			"login" => $login,
			"passwd" => $passwdhash,
			"email" => $email,

];

file_put_contents("users.txt", serialize($users));
echo 'ok';
}


?>

<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
				<input type="text" name="name" /><br />	
				<input type="text" name="login" /><br />	
				<input type="password" name="passwd" /><br />
				<input type="text" name="email" /><br />
				<input type="submit" name="auth" value="Вход">
</form>
