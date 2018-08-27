<!Doctype>
<html>

<head>

<title> Registrando saída... </title>

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

	$idproduto= $_POST['idproduto'];
	$qtd= $_POST['qtd'];
	$data= $_POST['txtData'];
	$resp= $_POST['resp'];
	$destino= $_POST['destino'];
	
	$sql = "SELECT qtd_inicial FROM produto WHERE idProduto='$idproduto'";
	$query= mysqli_query($conexao, $sql) or die("Erro ao tentar consultar quantidade do produto.");
	
	$resultado = mysqli_fetch_row($query);
	
	if($resultado[0] >= $qtd){
	$sql1= "INSERT INTO registro (data, quantidade, responsavel, fk_ID, fk_idProduto) VALUES ('$data', '$qtd', '$resp', '$destino', '$idproduto')";
	$sql2= "UPDATE produto SET qtd_inicial= qtd_inicial - $qtd WHERE idProduto= $idproduto";
	mysqli_query($conexao, $sql1) or die("Erro ao tentar cadastrar registro.");
	mysqli_query($conexao, $sql2) or die("Erro ao atualizar banco de dados.");
	mysqli_close($conexao);
	
			echo "<h1> Saída registrada com sucesso! </h1>";
			echo "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL= ..\index.php'>"; 
			
	} else{
		
				echo "<b><p style='color: red'>O produto $idproduto está com pouca quantidade no estoque. Relize uma entrada.</p></b>";
				echo "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL= ..\index.php'>";

		
	}
	
		
		



?>

</body>
</html>