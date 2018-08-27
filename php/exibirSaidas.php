<!Doctype html>

<html>

<head> <title>Exibindo saídas...</title>
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

<!-- SELECT data, quantidade, responsavel, p.nome, s.nome, categoria FROM registro, produto as p, setor as s WHERE
 idProduto=fk_idProduto and categoria='bebida' and ID=fk_ID order by data desc -->

<?php
		
			$ident= $_POST['identificador'];
			$destino= $_POST['destino'];
			$periodo= $_POST['data'];
			
			
			include("..\conectarBd.php");
			
			if($ident && $periodo && $destino){
				
				$sql= "SELECT data, quantidade, responsavel, nome FROM registro, produto WHERE fk_idProduto= '$ident' and idProduto= fk_idProduto and fk_ID= '$destino' and data= '$periodo' order by data";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Produto". "</th>";
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
			}else if($periodo && $destino){
				
				$sql= "SELECT data, p.nome as 'nome_produto', quantidade, s.nome as 'nome_setor', responsavel FROM produto as p, setor as s, registro WHERE idProduto=fk_idProduto and s.ID='$destino' and fk_ID=s.ID and data='$periodo' order by data";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Produto". "</th>";
					echo "<th>". "Quantidade" . "</th>";
					echo "<th>". "Destino" . "</th>";
					echo "<th>". "Responsável" . "</th>";
				
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					  echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['nome_produto'] . "</td>";
					  echo "<td>". $dados['nome_setor'] . "</td>";
					  echo "<td>". $dados['quantidade']. "</td>";
					  echo "<td>". $dados['responsavel'] . "</td>";
					  echo "</tr>";
					 
					}
					
					echo "</table>";
				
				
				
			}else if($ident && $periodo){
				
				$sql= "SELECT data, p.nome as 'nome_produtos', quantidade, s.nome as 'nome_setores', responsavel FROM produto as p, setor as s, registro WHERE fk_idProduto='$ident' and idProduto=fk_idProduto and s.ID=fk_ID and data='$periodo'";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Produto". "</th>";
					echo "<th>". "Quantidade" . "</th>";
					echo "<th>". "Responsável" . "</th>";
					echo "<th>". "Destino" . "</th>";
				
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					  echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['nome_produtos'] . "</td>";
					  echo "<td>". $dados['quantidade']. "</td>";
					  echo "<td>". $dados['responsavel'] . "</td>";
					  echo "<td>". $dados['nome_setores'] . "</td>";
					  echo "</tr>";
					 
					}
					
					echo "</table>";
				
				
		
			}else if($ident && !$periodo && !$destino){
				
				$sql= "SELECT data, quantidade, responsavel, nome FROM setor, registro WHERE fk_idProduto='$ident' and ID=fk_ID order by data";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Quantidade" . "</th>";
					echo "<th>". "Responsável" . "</th>";
					echo "<th>". "Destino" . "</th>";
				
				
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					  echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['quantidade']. "</td>";
					  echo "<td>". $dados['responsavel'] . "</td>";
					  echo "<td>". $dados['nome'] . "</td>";
					  echo "</tr>";
					 
					}
					
					echo "</table>";
				
				
				
				
				
			}else if($periodo){
				
				$sql= "SELECT data, p.nome as 'nome_produto', quantidade, s.nome as 'nome_setor' from produto as p, setor as s, registro WHERE data='$periodo' and p.idProduto=fk_idProduto and s.ID=fk_ID";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Quantidade" . "</th>";
					echo "<th>". "Produto" . "</th>";
					echo "<th>". "Destino" . "</th>";
				
				
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					  echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['quantidade']. "</td>";
					  echo "<td>". $dados['nome_produto'] . "</td>";
					  echo "<td>". $dados['nome_setor'] . "</td>";
					  echo "</tr>";
					 
					}
					
					echo "</table>";	
				
			}else if($ident && $destino){
				
				$sql= "SELECT data, p.nome as 'nome_produto', quantidade, s.nome as 'nome_setor' from produto as p, setor as s, registro WHERE fk_idProduto='$ident' and p.idProduto=fk_idProduto and fk_ID='$destino' and s.ID=fk_ID";
				
				
				$query = $mysqli->query($sql);
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Quantidade" . "</th>";
					echo "<th>". "Produto" . "</th>";
					echo "<th>". "Destino" . "</th>";
				
				
					echo "</tr>";
					while ($dados= mysqli_fetch_array($query)) {
					
					echo "<tr>";
					  echo "<td>". date('d/m/Y', strtotime($dados['data'])). "</td>";
					  echo "<td>". $dados['quantidade']. "</td>";
					  echo "<td>". $dados['nome_produto'] . "</td>";
					  echo "<td>". $dados['nome_setor'] . "</td>";
					  echo "</tr>";
					 
					}
					
					echo "</table>";
				
				
			}else{
				
				echo "<b><p style='color: red'>Você tem que preencher pelo menos um campo do formulário para verificar as saídas do estoque.</p></b>";
				echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL= ../exibicao.html'>";
				
				
			}
			
?>	
		

</body>
</html>