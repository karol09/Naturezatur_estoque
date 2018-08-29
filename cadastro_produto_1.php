  <!DOCTYPE html>
  
  <html lang="">
  	<head>
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>Cadastro de produto</title>
  
  		
  		<link href="css/estyle_1.css" rel="stylesheet" type="text/css">
		
  		<link href="css/style_2.css" rel="stylesheet" type="text/css">
		
		<link href="css/alertas.css" rel="stylesheet" type="text/css">
  	  		
  		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/javascript.js" type="text/javascript"> </script>
  
<style type="text/css">
		
h2.section-title {
	font-weight: bold;
    font-size: 25px;
    letter-spacing: 0px;
    margin-bottom: 80px;
	padding-bottom: 20px;
	font-family: "Verdana", "COURIER", arial;
}

input{
	
	font-size: 35px;
}


p.section-description {
	font-weight: lighter;
	font-size: 15px;
}

h2.section-title + p {
	margin-top: -80px;
	margin-bottom: 35px;
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
		<div class="topnav" id="myTopnav">
					  
					  
							  
					  <a href="#"><button class="btn info">  </button></a>
					  <a href="index.php" class="">Saídas</a>
					  <a href="cadastro_entradas.php">Entradas</a>
					  <a href="cadastro_produtos_1.php" class="active">Produtos</a>
					  <a href="exibicao.html">Opção 4</a>
					  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
						</a>
					  
			</div>
					
			</div>
			</div>
			
  			<div class="container">
  				<div class="row" style="text-align: center; padding-top: 15px;">
				
				<div class="row" style="text-align: left">
					
						</div>
											
					</div>
					
					
					
							
  					<div class="col-md-12 text-center">
  						<h2 class="section-title">Cadastro de produtos</h2>
  						<p class="section-description">Ensira abaixo as informações dos produtos do estoque.</p>
  					</div>
					</div>
					<div class="container">
					<div class="row">
  					<div class="col-md-8 col-md-offset-4">
  						<form id="" method="post" class="form" role="form" action="php/cadastro.php">
							<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" id="" name="nome_produto" placeholder="nome do produto" type="text" required  autofocus />
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" id="" name="categoria" placeholder="categoria" type="text"  />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" name="quantidade" placeholder="quantidade" type="number" min="0" max="200" value="0" required />
								</div>
							</div>
							
							<div>
							<div class="row" style="text-align:center">
								<div class="col-md-3 form-group">
									<button class="btn btn-primary" type="submit">Cadastrar</button>
								</div>
								
							<div>
							
							
							<div class="col-md-2 form-group">
									<button class="btn btn-primary" type="reset">Apagar tudo</button>
								</div>
							
							</div>
								

							</div>
						
							</div>
						</form>
  					</div>
					</div>
					</div>
					
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					
  				</div>
				
				
			</div>
			
			<div style="background-color: ">
					
					<div class="row" style="font-family: Verdana; text-align: center">
					
					<div class="col-md-12">  <p> &#169; Nomad Theme. By: Free Bootstrap template. <a style="color: orangeRed;" href= "http://www.naturezatur.com.br/"> NaturezaTur.</a> 
					
					Design: <a style="color: orangeRed;" href="https://www.facebook.com/"> Ana Karolina Silva </a></p>
					
					
					
					</div>
					</div>
  			</div>
  
  		
  	</body>
  </html>