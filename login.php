<?php session_start();


$loginbdd = mysqli_connect('localhost','melvin','adminadmin','blog');

$login = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$pwd = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);

$query = 'SELECT * FROM user WHERE login = "'.$login.'"';

$receplogin = mysqli_query($loginbdd,$query);
echo mysqli_error($loginbdd);
$trans = mysqli_fetch_assoc($receplogin);
$verif = password_verify($pwd, $trans['pwd']);

if($verif === true){
    $_SESSION['login']=$trans['login'];
    $_SESSION['admin']=$trans['admin'];
    header('Refresh:0; url="paged.php"');
}else{
    echo mysqli_error($loginbdd);
	echo 'utilisateur pas OK';
        header('Refresh:0; url="identi.php"');
}
?>
   
