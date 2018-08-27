<!Doctype html>

<html>

<head>

<title>  Registrando entrada... </title>

</head>
<body>
<?php

	$host= "localhost";
	$user="root";
	$pass= "";
	$banco= "estoque";
	
	$conexao= mysqli_connect($host, $user, $pass, $banco);
	

	if (!$conexao) {
		
    die("Tentativa de conexão falhou!" . mysqli_error());
	
		}else{
			
		
	echo "Conexão realizada com sucesso!";
		}
	
	?>
	


<?php



	$id= $_POST['id'];
	$qtd= $_POST['qtd'];
	$data= $_POST['data'];
	$fornecedor = $_POST['fornecedor'];
	$receptor = $_POST['receptor'];
	$vl_unitario=str_replace(',','.',$_POST['valor']);
	$vl_Double=(double)$vl_unitario;
	
	$sql1= "INSERT INTO entradas (data, quantidade_entrada, fk_idProduto, fornecedor, vl_unitario, receptor) VALUES ('$data', '$qtd', '$id', '$fornecedor', '$vl_Double', '$receptor')";
	$sql2 = "UPDATE produto SET qtd_inicial= qtd_inicial + $qtd WHERE idProduto= $id";
	
	mysqli_query($conexao, $sql1) or die("Erro ao tentar cadastrar registro.");
	mysqli_query($conexao, $sql2) or die("Erro ao tentar atualizar o banco de dados.");
	mysqli_close($conexao);
	
		if($conexao)	{
			
				echo "<h1> Entrada registrada com sucesso! </h1>";
			
		}else{
			
				echo "<h1> Entrada não registrada! </h1>";
			
		}
		
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL= ..\cadastro_entradas.php'>";
?>

</body>
</html>


