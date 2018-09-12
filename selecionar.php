<?php
    include"conecta.php";
    include"excluir.php";
    include"editar.php";

    if(isset($_POST['selecionar'])){
        $sql = "SELECT * FROM usuarios WHERE 1";
        $resultado = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($resultado);
        ?>
           
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resto do crud</title>
</head>
<body>
       <h3>Edição e exclusão</h3>

       <?php
       for ($i=0; $i < $linhas; $i++) { 
        	$x = mysqli_fetch_array($resultado);
        ?>
		<form action="" method="POST">
			<input type="text" name="nome" value="<?=$x['nome']?>" >
			<input type="text" name="email" value="<?=$x['email'] ?>">
			<input type="text" name="cpf" value="<?=$x['cpf'] ?>">
			<input type="text" name="endereco" value="<?=$x['endereco'] ?>">
			<input type="hidden" name="codigo" value="<?=$x['cd_usuario'] ?>">
			<button type="submit" name="editar">Editar</button>
			<button type="submit" name="excluir">Excluir</button>
		</form>

        <?php

        }

        ?>
</body>
</html>
         	
        









<?php

    }