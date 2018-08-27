<!Doctype html>

<html>

<head> <title>Exibindo produtos...</title>

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
		
			$identificador= $_POST['id'];
			
			
			include("..\conectarBd.php");
			
			if($identificador){
				
				
				$sql= "SELECT idProduto, nome, qtd_inicial FROM produto WHERE idProduto='$identificador'";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Id do produto" ."</th>"; 
					echo "<th>". "Nome" . "</th>";
					echo "<th>". "Quantidade" . "</th>";
					
				
				
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					  echo "<td>". $dados['idProduto']. "</td>";
					  echo "<td>". $dados['nome'] . "</td>";
					  echo "<td>". $dados['qtd_inicial'] . "</td>";
					  echo "</tr>";
					 
					}
					
					echo "</table>";
					
					
			}else{
				
				echo "<b><p style='color: red'>Você tem que preencher um campo do formulário para verificar o produto.</p></b>";
				echo "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL= ../exibicao.html'>";
				
				
			}
			
			
			
?>


</body>
</html>