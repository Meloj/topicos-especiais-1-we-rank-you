<?php

$host="localhost";
$user="root";
$pass="werankyouçpass";
$banco="werankyou";
$conexao=mysqli_connect($host,$user,$pass)or die(mysql_erro());
mysqli_select_db($conexao,$banco)or die(mysql_erro());

$nome=$_POST['nome'];
$snome=$_POST['snome'];
$sexo=$_POST['sexo'];
$nasci=$_POST['nasci'];
$email=$_POST['email'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];



if ($_POST['button']=="Inserir")
{
    $sql=mysqli_query($conexao,"INSERT INTO site(nome,endereco,cidade,nascimento,email) values('".$nome."','".$snome."','".$sexo."','".$nasci."','".$email."','".$cidade."','".$estado."')");

echo"<center><h1>Cadastro Realizado com Sucesso!!</center></h1>";

mysqli_close($conexao);
}
