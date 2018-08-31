  <!DOCTYPE html>
  <html lang="">
  	<head>
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>Cadastro de entradas</title>
  
		<link href="css/estyle_1.css" rel="stylesheet" type="text/css">
		<link href="css/style_2.css" rel="stylesheet" type="text/css">
  	
  		<link href="css/style.css" rel="stylesheet" type="text/css">
				

		

		
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
					
			 var dataCompleta = ano + '-' +'0'+(mes + 1) + '-' + dia;

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
					  
					  
					  <!--<a href="#" style="color: #20B2AA" class=""> HOME </a>-->
					  	  
					  <a href="#"><button class="btn info">  </button></a>
					  <a href="index.php" class="">Saídas</a>
					  <a href="cadastro_entradas.php" class="active">Entradas</a>
					  <a href="cadastro_produto_1.php">Produtos</a>
					  <a href="exibicao.html">Filtrar registros</a>
					  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
						</a>
					  
			</div>
					
			</div>
			</div>
			

  			<div class="container">
  				<div class="row" style="text-align: center; padding-top: 15px;">
  					<div class="col-md-12 text-center">
  						<h2 class="section-title">Registro de entrada de produtos</h2>
  						<p class="section-description">Digite o número identificador do produto e as outras informações abaixo para registrar a entrada de 
						produtos no estoque.</p>
  					</div>
					</div>
					<div class="container">
					<div class="row">
  					<div class="col-md-8 col-md-offset-4">
  						<form id="" method="post" class="form" role="form" action="php/entrada.php" style="">
							<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" id="dataAutomatica" name="id" placeholder="número do produto" type="text" required  autofocus />
								</div>
								</div>
								
								<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" name="qtd" placeholder="quantidade" type="number" min="1" max="200" value="0" required />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 form-group">
									<input type="text" class="form-control" name="valor" placeholder="Valor unitário do produto" onKeyPress="return(MascaraMoeda(this,'.',',',event))" required />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 form-group">
									<input id="dataAutomatica" class="form-control" name="data" type="date" value="" required />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" name="fornecedor" placeholder="Fornecedor" />
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 form-group">
									<input class="form-control" name="receptor" placeholder="Responsável" />
								</div>
							</div>
							
							
							<div>
							<div class="row" style="text-align:center">
								<div class="col-md-3 form-group">
									<button class="btn btn-primary" type="submit">Registrar </button>
								
								</div>
								
								<div>  

								<div class="col-md-2 form-group">
									<button class="btn btn-primary" type="reset"> Apagar tudo </button>
								</div>

								</div>
								
				
								

							</div>
							</div>
						</form>
  					</div>
					</div>
					</div>
  				</div>
				
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				
  			</div>
			
			
			<div style="background-color: ">
					
					<div class="row" style="font-family: Verdana; text-align: center">
					
					<div class="col-md-12">  <p> &#169; Nomad Theme. By: Free Bootstrap template. <a style="color: orangeRed;" href= "http://www.naturezatur.com.br/"> NaturezaTur. </a> 
					
					Design: <a style="color: orangeRed;" href="https://www.facebook.com/?sk=nf"> Ana Karolina Silva </a></p>
					
					
					
					</div>
					</div>

  			</div>
  

  
  		
  	</body>
  </html>