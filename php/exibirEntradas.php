<!Doctype html>

<html>

<head> <title>Exibindo entradas...</title>

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
			
				
	$identificador= $_POST['nome'];
	$periodo= $_POST['dia'];
			
			if($identificador && $periodo){
				
				
				$sql= "SELECT data, nome, vl_unitario, fornecedor, receptor, idProduto, quantidade_entrada FROM produto, entradas WHERE fk_idProduto='$identificador' and idProduto=fk_idProduto and data='$periodo'";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Id do produto" ."</th>"; 
					echo "<th>". "Nome" . "</th>";
					echo "<th>". "Quantidade_entrada" . "</th>";
					echo "<th>". "valor por unidade (R$)" . "</th>";
					echo "<th>". "Fornecedor" . "</th>";
					echo "<th>". "Quem recebeu" . "</th>";
					
				
				
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['idProduto']. "</td>";
					  echo "<td>". $dados['nome'] . "</td>";
					  echo "<td>". $dados['quantidade_entrada'] . "</td>";
						 echo "<td>". $dados['vl_unitario'] . "</td>";
						  echo "<td>". $dados['fornecedor'] . "</td>";
						   echo "<td>". $dados['receptor'] . "</td>";
						echo "</tr>";
					 
					}
					
					echo "</table>";
					
					
			}else if($identificador){
				
								
				$sql= "SELECT data, idProduto, nome, quantidade_entrada FROM entradas, produto WHERE fk_idProduto='$identificador' and idProduto=fk_idProduto";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Id do produto" ."</th>"; 
					echo "<th>". "Nome" . "</th>";
					echo "<th>". "Quantidade_entrada" . "</th>";
					
				
				
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['idProduto']. "</td>";
					  echo "<td>". $dados['nome'] . "</td>";
					  echo "<td>". $dados['quantidade_entrada'] . "</td>";
					  echo "</tr>";
					  
				
				
				
			
			
			
					}
					
					echo "</table>";
					
					
			}else if($periodo){
				
									
				$sql= "SELECT data, nome, idProduto, quantidade_entrada FROM produto, entradas WHERE idProduto=fk_idProduto and data='$periodo'";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Id do produto" ."</th>"; 
					echo "<th>". "Nome" . "</th>";
					echo "<th>". "Quantidade_entrada" . "</th>";
					
				
				
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['idProduto']. "</td>";
					  echo "<td>". $dados['nome'] . "</td>";
					  echo "<td>". $dados['quantidade_entrada'] . "</td>";
					  echo "</tr>";
					  
				
				
				
			
			
			
					}
					
					echo "</table>";
				
			
				
			}else{
			
				echo "<b><p style='color: red'>Você tem que preencher pelo menos um campo do formulário para verificar as entradas.</p></b>";
				echo "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL= ../exibicao.html'>";
				
				
			}
			
			
			
?>


</body>
</html>