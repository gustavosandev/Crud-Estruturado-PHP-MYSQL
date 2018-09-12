<?php
	$host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "banco";
    $conexao = "";
  
  	$conexao = mysqli_connect("{$host}", "{$usuario}", "{$senha}", "{$banco}");
                //or die("Erro ao conectar ao servidor");
    

if($conexao)
{
    //
}else 
	
	 die("Não deu pra conectar ao banco!");

?>