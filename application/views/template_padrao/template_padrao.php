<!DOCTYPE html>
<html lang="en">
   <head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
   		<title>TESTE - CRUD</title>
   		
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   		<style>
			div.bg{
				background-color:#CCC;
				padding:2px 0 2px 0;
			}
			
			div.bg1{
				padding-top:10px;
				background-color:#CCD9EC;
			}
			div.bg2{
				padding-top:10px;
				background-color:#CCD9EC;
				height:100px;
			}
			div.bg3{
				padding-top:20px;
				background-color:#white;
				height:200px;
			}
		</style>
    </head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- BARRA DE NAVEGAÇÃO -->
			    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
					<div class="container">
			        	<a class="navbar-brand" href="#">TESTE CRUD - PRODUTOS</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
			        	</button>
			        	<div class="collapse navbar-collapse" id="navbarResponsive">
			          		<ul class="navbar-nav ml-auto">
			            		<li class="nav-item active">
			              			<a class="nav-link" href="/teste_crud">Home
			                			<span class="sr-only">(atual)</span>
			              			</a>
			            		</li>
					            <li class="nav-item">
					              	<a class="nav-link" href="<?php echo base_url();?>produto/form_produto">Cadastrar Produto</a>
					            </li>
					            <li class="nav-item">
					              	<a class="nav-link" href="<?php echo base_url();?>produto">Visualizar Produtos</a>
					            </li>
					            <li class="nav-item">
					              	<a class="nav-link" href="<?php echo base_url();?>contato">Contato</a>
					            </li>
			          		</ul>
			        	</div>
			      	</div>
			    </nav>
		    </div>
		</div>
	</div>
	<br /><br />
	
	<!-- CORPO DA PÁGINA -->
	<?php echo $conteudo;?>
	<script	type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.maskMoney.js'?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/jquery.alerts.css'?>" media="screen" />
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.alerts.js'?>"></script>
   		
    <script type="text/javascript">
		$(document).ready(function(){
			$("#preco").maskMoney({
			    allowNegative: true,
			    thousands: '.',
			    decimal: ',',
			    affixesStay: false
			  }).attr('maxlength', maxLength).trigger('mask.maskMoney');
		});
	</script>
    </body>   
</html>