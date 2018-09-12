<?php
    if(isset($_POST['editar'])){
    	$codigo= $_POST['codigo'];
    	$nome = $_POST['nome'];
    	$email = $_POST['email'];
    	$cpf = $_POST['cpf'];
    	$endereco = $_POST['endereco'];
        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', cpf = '$cpf', endereco = '$endereco' WHERE cd_usuario = '$codigo'";
    	$resultado = mysqli_query($conexao,$sql);
    	if ($resultado) {
    	   header('Location:index.php');
    	}else
    	{
    		echo "erro no cadastro";
    	}
    }