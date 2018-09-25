<div class="container">
	<div class="row h-100 justify-content-center align-items-center bg3">
		<div class="col-12">
			<h3>PRODUTO COM ESTOQUE BAIXO</h3>
		</div>
	</div>
		
	<div class="row">
		<?php 
			if($baixo_estoque){
				foreach($baixo_estoque as $baixo){
		?>
					<div class="col-lg-4 col-md-4 col-sm-1 mb-4">
						<div class="card">
						   	<img class="card-img-top" src="assets/imagens/500x325.png" width='500' height='325' alt="">
						    <div class="card-body">
						      	<h4 class="card-title">Produto: <?php echo $baixo['NOME'];?></h4>
					          	<p class="card-text">Descri&ccedil;&atilde;o: <?php echo $baixo['DESCRICAO'];?></p>
					           	<p class="card-text">R$ <?php echo number_format($baixo['PRECO'],2,',','.');?></p>
						    </div>
						</div>
					</div>
		<?php 
				}
			}else{
				echo '<div class="col-lg-4 col-md-4 col-sm-1 mb-4">NENHUM PRODUTO ENCONTRADO</div>';
			}
		?>	
	</div>
	<div class="row h-100 justify-content-center align-items-center bg3">
		<div class="col-12">
			<h3>CINCO &Uacute;LTIMOS PRODUTOS MOVIMENTADOS</h3>
		</div>
	</div>
		
	<div class="row">
		<?php 
			if($cinco_ultimos){
				foreach($cinco_ultimos as $cinco){
		?>
					<div class="col-lg-4 col-md-4 col-sm-1 mb-4">
						<div class="card">
						   	<img class="card-img-top" src="assets/imagens/500x325.png" width='500' height='325' alt="">
						    <div class="card-body">
						      	<h4 class="card-title">Produto: <?php echo $cinco['NOME'];?></h4>
					          	<p class="card-text">Descri&ccedil;&atilde;o: <?php echo $cinco['DESCRICAO'];?></p>
					           	<p class="card-text">R$ <?php echo number_format($cinco['PRECO'],2,',','.');?></p>
						    </div>
						</div>
					</div>
		<?php 
				}
			}else{
				echo '<div class="col-lg-4 col-md-4 col-sm-1 mb-4">NENHUM PRODUTO ENCONTRADO</div>';
			}
		?>	
	</div>
</div>