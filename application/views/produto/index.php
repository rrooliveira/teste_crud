<br />
<div class="container">
<div class="row">
	<div class="col">
		<h2>LISTA DE PRODUTOS CADASTRADOS</h2>
	</div>
</div>
<br />
 	<div class="row">
 		<div class="col-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOME</th>
						<th>QUANTIDADE</th>
						<th>PRE&Ccedil;O</th>
						<th>A&Ccedil;&Atilde;O</th>
					</tr>
				</thead>
				<tbody>
		<?php
			foreach($produtos as $produto){
				$class = '';
				
				if($produto['QUANTIDADE'] <= 3){
					$class = 'table-danger';
				}
				
				echo '<tr class="'.$class.'">
						<td>'.$produto['ID'].'</td>
						<td><a href="#" data-toggle="modal" data-target="#produto_'.$produto['ID'].'">'.$produto['NOME'].'</a></td>
						<td>'.$produto['QUANTIDADE'].'</td>
						<td>R$ '.number_format($produto['PRECO'],2,',','.').'</td>
						<td>
							<a href="#" onclick="editar('.$produto['ID'].')"><img src="'. base_url() .'assets/imagens/editar.png'.'" border="0" title="Editar Produto" /></a>
							&nbsp;
							<a href="#" onclick="excluir('.$produto['ID'].')"><img src="'. base_url() .'assets/imagens/excluir.png'.'" border="0" title="Excluir Produto" /></a>
							&nbsp;
							<a href="#" onclick="aumentar('.$produto['ID'].')"><img src="'. base_url() .'assets/imagens/aumentar.png'.'" border="0" title="Aumentar Estoque +1" /></a>
							&nbsp;
							<a href="#" onclick="diminuir('.$produto['ID'].')"><img src="'. base_url() .'assets/imagens/diminuir.png'.'" border="0" title="Diminuir Estoque -1" /></a>
						</td>
					</tr>';		

			}
		?>
				</tbody>
			</table>
 		</div>
 	</div>
</div>
<?php
foreach($produtos as $produto){
?>
	<!-- Modal -->
	<div class="modal fade" id="produto_<?php echo $produto['ID'];?>" tabindex="-1" role="dialog" aria-labelledby="produto_<?php echo $produto['ID'];?>Label" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="produto_<?php echo $produto['ID'];?>Label"><?php echo 'Produto: <strong>' . $produto['NOME'];?></strong></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php echo 'Descri&ccedil;&atilde;o: <strong>' . $produto['DESCRICAO'];?></strong>
	        <br />
	        <?php echo 'Pre&ccedil;o: <strong>R$ ' .number_format($produto['PRECO'],2,',','.');?></strong>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
	      </div>
	    </div>
	  </div>
	</div>
<?php
}
?>
<script	type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js'?>"></script>
<script type="text/javascript">
	function editar(id){
		window.location = "http://localhost/teste_crud/produto/editar/id/"+id;
	}

	function excluir(id){
		$.ajax({
			method: "POST",
			url: "http://localhost/teste_crud/produto/excluir",
			data: { id: id }
		})
		.done(function( msg ) {
			jAlert( msg,'AVISO',function(e){
				if(e){
					location.reload();
				} 
			});
		});
	}

	function aumentar(id){
		$.ajax({
			method: "POST",
			url: "http://localhost/teste_crud/produto/aumentar_estoque",
			data: { id: id }
		})
		.done(function( msg ) {
			jAlert( msg,'AVISO',function(e){
				if(e){
					location.reload();
				} 
			});
		});
	}

	function diminuir(id){
		$.ajax({
			method: "POST",
			url: "http://localhost/teste_crud/produto/diminuir_estoque",
			data: { id: id }
		})
		.done(function( msg ) {
			jAlert( msg,'AVISO',function(e){
				if(e){
					location.reload();
				} 
			});
		});
	}
</script>