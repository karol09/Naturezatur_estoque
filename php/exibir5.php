<!Doctype html>

<html>

<head> <title>Exibindo saídas para o barco 5...</title> 

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

<?php
		
			
	include("..\conectarBd.php");
				
	$sql = "SELECT data, quantidade_entrada, nome, vl_unitario, fornecedor, receptor from produto, entradas where idProduto=fk_idProduto";
	
	$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Produto". "</th>";
					echo "<th>". "Quantidade" . "</th>";	
						echo "<th>". "Valor por unidade (R$)" . "</th>";	
							echo "<th>". "Fornecedor" . "</th>";	
								echo "<th>". "Quem recebeu" . "</th>";	
					
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					  echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['nome'] . "</td>";
					  echo "<td>". $dados['quantidade_entrada']. "</td>";
					  	  echo "<td>". $dados['vl_unitario']. "</td>";
						  	  echo "<td>". $dados['fornecedor']. "</td>";
							  	  echo "<td>". $dados['receptor']. "</td>";
					  echo "</tr>";
					 
					}
					
					echo "</table>";

?>

</body>
</html>

