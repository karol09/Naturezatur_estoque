<! DOCTYPE html>
<html>

<head>

<title> Cadastrando produto... </title>

</head>

<body>

<?php

	$host= "localhost";
	$user="root";
	$pass= "";
	$banco= "estoque";
	
	$conexao= mysqli_connect($host, $user, $pass, $banco);
	

	if (!$conexao) {
		
    die("Tentativa de conexão com o banco de dados falhou!" . mysqli_error());
	
		}else{
			
		
	//echo "Conexão realizada com sucesso!";
		}
	
	?>
	
	

<?php

	$nome= $_POST['nome_produto'];
	$categoria = $_POST['categoria'];
	$quantidade = $_POST['quantidade'];
	
	$consulta= mysqli_query($conexao, "SELECT COUNT(idProduto) FROM produto WHERE nome='{$nome}'");
	
	$eReg = mysqli_fetch_array($consulta);

		$consulta = $eReg[0];
	
	
     if ($consulta > 0){

      echo "<center> Este produto ( <strong>".$nome."</strong> ) já está cadastrado no sistema. <br /> Por favor, cadastre outro! </center>";

      echo "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL= ..\cadastro_produto_1.php'>";

    }else{
		
 
	$sql= "INSERT INTO produto (nome, categoria, qtd_inicial) VALUES ('$nome', '$categoria', '$quantidade')";
	$sql3= mysqli_query($conexao, $sql);
	mysqli_close($conexao);

		if(!$sql3){
			
				echo "<h1> <center> Produto não cadastrado! </center> </h1>";
			
		}else{
			
				echo "<h1> <center> Produto cadastrado com sucesso! </center> </h1>";
			
		}
		
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL= ..\cadastro_produto_1.php'>";
		
		
	}
	
?>

</body>
</html>