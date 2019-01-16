<?php
include ("conect.php");
if( (isset ($_POST["nome"])) && (isset($_POST["login"])) && (isset($_POST["senha"])) ){

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];

//echo $nome. "<br>";
//echo $login. "<br>";
//echo $senha. "<br>";

$sql= "insert into usuario 
(nome,senha) values
('$nome','$login','$senha')"

mysql_query($sql);

}
?>