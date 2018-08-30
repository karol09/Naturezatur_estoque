<!DOCTYPE html>

  <html lang="">
  	<head>
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>Cadastro de saídas</title>
  
  		
		<link href="css/alertas.css" rel="stylesheet" type="text/css">
		<link href="css/estyle_1.css" rel="stylesheet" type="text/css">
		
		<!--<link href="css/style_2.css" rel="stylesheet" type="text/css">
  		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  		
  		<!--<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>-->
  	  		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		
		<script src="js/javascript.js" type="text/javascript"> </script>
		
			<script type="text/javascript">
			
		function Data()
            {
                var data = new Date();
                var dia = data.getDate();
                var mes = data.getMonth();
                var ano = data.getFullYear();
               
			   if ((dia < 10) && (mes <10)){
					
				var dataCompleta = ano+'-'+'0'+(mes + 1)+'-'+'0'+dia;

               return dataCompleta;
					
				}else if((!dia < 10) && (mes < 10)){
					
			 var dataCompleta = ano + '-' +'0'+(mes + 1) + '-'+dia;

                return dataCompleta;
					
				}else if((dia < 10) && (!mes < 10)){
					
				var dataCompleta = ano + '-'+(mes + 1) + '-'+'0'+dia;

                return dataCompleta;
					
				}else{
					
					var dataCompleta = ano + '-'+(mes + 1) + '-'+ dia;

                return dataCompleta;
					
				}
            }
            
            window.onload = function(){
                var dateControl= document.querySelector('input[type="date"]');
				dateControl.value = Data();
            }
   
		</script>
		
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		
				
<style type="text/css">
		
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

		
h2.section-title {
	font-weight: bold;
    font-size: 25px;
    letter-spacing: 0px;
    margin-bottom: 80px;
	padding-bottom: 20px;
	font-family: "Verdana", "COURIER", arial;
}


p.section-description {
	font-weight: lighter;
	font-size: 15px;
}

h2.section-title + p {
	margin-top: -80px;
	margin-bottom: 35px;
}	

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.close {
    float: right;
	text-align: right;
    font-size: 56px;
  
} 

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
	width: 75%;
	height: 85%
}

.modal-header {
	
	margin: auto;
    background-color: #CD8500;
    color: white;
	width: 75%;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.closebtn {
    margin-left: 15px;
	color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;

}

.alert.warning {background-color: #ff9800;}

.closebtn:hover {
    color: black;

	
}

input{
	
	font-size: 35px;
}

.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.btn {
   border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 12px;
    font-family: arial;
}

.centered {
    margin: 0 auto !important;
    float: none !important;
}
</style>
	
  	</head>
  	<body>
  		<div class="section" style="background-color: #E0FFFF">
		<div class="container">
		
		<div class="row" style="">
		
		<p style=""><img src="img/logo.png" alt="NaturezaTur" width= "310px" height= "80px" align="left"/></p>
	
		
		</div>
		</div>
		
		
		<div class="row" style="padding-bottom: 0px;">
		<div class="col-md-6 col-md-offset-3">
		<div style="position: -webkit-sticky; position: sticky; top: 0;" class="topnav" id="myTopnav">
					  
					  <a href="#"><button class="btn info">  </button></a>
					  <a href="index.php" class="active">Saídas</a>
					  <a href="cadastro_entradas.php" class="">Entradas</a>
					  <a href="cadastro_produto_1.php" class="">Produtos</a>
					  <a href="exibicao.html">Opção 4</a>
					   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
						</a>				  
			</div>
					
			</div>
			</div>
			
			
<?php

include('conectarBd2.php');

$sql= "SELECT qtd_inicial, nome, idProduto, categoria FROM produto WHERE qtd_inicial= 0 or qtd_inicial < 30";
$query = $mysqli->query($sql);
$query->num_rows;
$total = $query->num_rows;


$num= 2;
		
?>
			
  			<div class="container">
  				<div class="row" style="text-align: center; padding-top: 15px;">
				<div class="row" style="text-align: left;">
				
				<?php if($total > 0){ ?>
				<div class="col-md-6 centered">
				<div class="alert">
				  <span class="closebtn">&times;</span>  
				  <strong><a href="#" id="myBtn" >Clique aqui! </a></strong>há produtos em pouca quantidade no estoque.
				</div>
				</div>
				
								
				<div id="myModal" class="modal">
									
								  <div class="modal-header">
								 
								  <span class="close">&times;</span>
									  <h2 class="">Estoque mínimo</h2>
									</div>
									
							<div class="modal-content" style="overflow-x:auto;">
							
								 <table border="1px solid black">
								<tr>
								 <th> IdProduto</th>
								 <th> Nome</th> 
								 <th> Quantidade do produto no estoque</th>
								 <th> Categoria</th>
								 </tr>
								 
								<?php while($dados= mysqli_fetch_array($query)){  ?>
								
								<?php 
								echo "<tr>";
								echo "<td>". $dados['idProduto'] . "</td>"; 
								echo "<td>". $dados['nome'] . "</td>"; 
								echo "<td>". $dados['qtd_inicial'] . "</td>"; 
								echo "<td>". $dados['categoria'] . "</td>"; 
								echo "</tr>";
								
								?>
								

								<?php } ?>
								
								
								</table>
								</div>
								 </div>
								  
							
				<?php }else{  ?>
					
			<div class="alert" style="display: none">
				  <span class="closebtn">&times;</span>  
				  <strong><a href="#" id="myBtn" >Clique aqui! </a></strong>Há produtos no estoque com quantidade baixa.
				</div>
				
					<?php } ?>
				
					</div>
						

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
									
  					<div class="col-md-12 text-center">
  						<h2 class="section-title">Registro de saída de produtos</h2>
  						<p class="section-description">Digite o número identificador do produto e as outras informações abaixo para 
						registrar as retiradas do estoque. <a href="php/exibir4.php">Clique aqui para ver produtos. </a> </p>
  					</div>
					</div>
					
					
					<div class="container">
					<div class="row">
  					<div class="col-md-8 col-md-offset-4">	
  						<form id="" method="post" class="form" role="form" action="php/saida.php" style="">
							<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" name="idproduto" placeholder="número do produto" type="text" required  autofocus />
								</div>							
								</div>
								
								<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" name="qtd" placeholder="quantidade" type="number" min="1" max="200" value="0" required />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" name="txtData" type="date" required />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" name="resp" placeholder="responsável" type="text" required />
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-6 form-group">
								<select required name="destino" class="form-control">

									<option value="">--------</option>
									 <option value="1">BARCO 01</option>
									 <option value="2">BARCO 02</option>
									 <option value="3" >BARCO 04</option>
									 <option value="4" >BARCO 05</option>
									 <option value="11" >DECK</option>
									 <option value="12" >RECEPÇÃO</option>
									 <option value="13" >PESSOAL</option>
								</select>
								</div>
								</div>
							
							<div class="row" style="text-align:center">
							<div class="col-md-3 form-group">
								
							<button class="btn btn-primary" type="submit">Registrar</button> </div>
							
							<div> <div class="col-md-2 form-group">
									
							<button class="btn btn-primary" type="reset">Apagar tudo</button>

							</div>		
							</div>			
							</div>	
						</form>
						
						
						
  					</div>
					
					</div>
					
					
					</div>
					
					
  				</div>	
  			</div>
			
			<div style="">
					
					<div class="row" style="font-family: Verdana; text-align: center">
					
					<div class="col-md-12">  <p> &#169; Nomad Theme. By: Free Bootstrap template. <a style="color: orangeRed" href= "http://www.naturezatur.com.br/"> NaturezaTur. </a> 
					
					Design: <a style="color: orangeRed;" href="https://www.facebook.com/"> Ana Karolina Silva </a></p>
					
					
					
					</div>
					</div>
  			</div>
  		
  	</body>
  </html>