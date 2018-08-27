<!Doctype html>

<html>

<head> <title>Exibindo saídas para o barco 1...</title> 

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
				
				$sql = "SELECT data, p.nome, quantidade, responsavel FROM produto as p, registro WHERE p.idProduto=fk_idProduto AND fk_ID= 13";
				$sql1 = "SELECT data, quantidade, responsavel, p.nome, s.nome FROM registro, produto as p, setor as s WHERE idProduto= fk_idProduto and s.ID= fk_ID order by data";
				$sql2= "SELECT data, quantidade, responsavel, p.nome, s.nome FROM registro, produto as p, setor as s WHERE p.idProduto= 1 and s.ID= 1 and data= '2018-06-19' order by data";
				
				$query = $mysqli->query($sql);
				$query->num_rows;
				$total = $query->num_rows;
				
				if($total == 0){
					
					echo "<b>Não Há retiradas PESSOAIS do estoque. </b>";
					echo "<meta HTTP-EQUIV='Refresh' CONTENT='5; URL= ../exibicao.html'>";
					
				}else{
				
					echo "<table border= '1px solid #FF0000'>";
					echo "<tr>";
					echo "<th>". "Data" ."</th>"; 
					echo "<th>". "Nome do produto". "</th>";
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

				}
?>

</body>
</html>