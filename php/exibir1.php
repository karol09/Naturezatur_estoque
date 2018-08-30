<!Doctype html>

<html>

<head> <title>Exibindo saídas para o barco 2...</title>

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

<h2><a href="..\exibicao.html"> voltar para a página anterior. </a></h2>  <br/>

<?php
		
			
	include("..\conectarBd.php");
				
	$sql = "SELECT data, p.nome, quantidade, responsavel FROM produto as p, registro WHERE p.idProduto=fk_idProduto AND fk_ID= 2";
	$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Nome". "</th>";
					echo "<th>". "Quantidade" . "</th>";
					echo "<th>". "Responsável" . "</th>";						
					
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					  echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['nome'] . "</td>";
					  echo "<td>". $dados['quantidade']. "</td>";
					  echo "<td>". $dados['responsavel'] . "</td>";
					  echo "</tr>";
					 
					}
					
					echo "</table>";

?>

</body>
</html>

