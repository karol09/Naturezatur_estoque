<!Doctype html>

<html>

<head> <title>Exibindo produtos do estoque...</title> 



<link href="css/alertas.css" rel="stylesheet" type="text/css">
<link href="css/estyle_1.css" rel="stylesheet" type="text/css">
		
		
<style type="text/css">

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 70%;
    border: 1px solid #ddd;
}


th, td {
    text-align: left;
    padding: 12px;
    font-family: arial;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}




</style>







</head>

<body>

<!--<h2><a href="..\index.php"> voltar para a página anterior. </a></h2>  <br/>-->


<?php
		
			
	include("..\conectarBd.php");
	
	
				
	$sql = "SELECT idProduto, nome, qtd_inicial from produto";
	
	$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "idProduto" ."</th>"; 
					echo "<th>". "Nome". "</th>";
					echo "<th>". "Quantidade Inicial". "</th>";
										
					
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					  echo "<td>". $dados['idProduto'] . "</td>";
					  echo "<td>". $dados['nome']. "</td>";
					  echo "<td>". $dados['qtd_inicial'] . "</td>";
					  echo "</tr>";
					 
					}
					
					echo "</table>";

?>

</body>
</html>

