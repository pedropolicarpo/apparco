<?php
$conexao = mysql_connect("localhost", "root", "@6");
if (!$conexao) {
    die("Não foi possível conectar: " . mysql_error());
}
$conexaodb = mysql_select_db("arco", $conexao);
$conexaodb;
if (!$conexaodb) {
    die('Invalid query: ' . mysql_error());
}

mysql_query("SET NAMES 'utf8'");

$nomec = $_POST ['nomec'];
$email = $_POST ['email'];
$pwd = $_POST ['pwd'];

mysql_query("INSERT INTO users (user_nomec, user_email, user_pwd) VALUES ('$nomec', '$email', '$pwd' )";

mysql_close();

echo "Cadastro concluido";
?>