<?php
    include"conecta.php";
    if(isset($_POST['excluir'])){
    	$codigo = $_POST['codigo'];
    	$sql = "DELETE FROM usuarios WHERE cd_usuario = '$codigo'";
    	$resultado = mysqli_query($conexao, $sql);
    	if ($resultado) {
    		header('Location:index.php');
    	}else{
    		echo "ERRO AO EXCLUIR O USUARIO";
    	}
    }