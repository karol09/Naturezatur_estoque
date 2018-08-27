<!DOCTYPE html>

<html>
<head>
<title> Cadastro de Produtos </title>
</head>


<body>

<form action="php/cadastro.php" method="post">

	
	<p>Produto: <input type= "text" name= "nome_produto" required /> </p>
	
	<p> Categoria: <input type="text" name="categoria" required /> </p>
	
	<p> Quantidade inicial: <input type="text" name="quantidade" required /></p>
	
	
	<p><input type="submit" value="Cadastrar"/> </p>
	
	<p> <input type="reset" value="Limpar texto"/>   </p>


</form>
</body>
</html>