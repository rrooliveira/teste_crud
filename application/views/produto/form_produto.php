<br />
<div class="container">
<div class="row">
	<div class="col">
		<h2>FORMUL&Aacute;RIO DE CADASTRO DE PRODUTO</h2>
	</div>
</div>
<br />
<?php 

//CLASSE PARA OS INPUTS
$class_form_12 = 'col-12 col-form-label';
$class_col_12  = 'form-group col-md-12';
$class_col_6   = 'form-group col-md-6';
$class_col_4   = 'form-group col-md-4';
$class_col_3   = 'form-group col-md-3';

$atributos = array('class' => 'nome_da_classe',
				   'id'    => 'form_cadastrar_produto');

echo form_open(null,$atributos);

	//NOME
	echo '<div class="form-row">';
		echo '<div class="'.$class_col_12.'">';
			echo form_label("Nome:","nome");
			echo form_input($nome = array("name" 	  => "nome",
										  "id"	 	  => "nome",
										  "maxlength" => "100",
										  "size"      => "50",
										  "class"	  => "form-control",
										  "required"  => "required"
							)
				);
		echo '</div>';
	echo '</div>';
	
	//DESCRIÇÃO
	echo '<div class="form-row">';
		echo '<div class="'.$class_col_12.'">';
			echo form_label("Descri&ccedil;&atilde;o:","descricao");
			echo form_input($descricao = array("name"  		=> "descricao",
												"id"	 	=> "razao_social",
												"maxlength" => "255",
												"class"	  	=> "form-control",
												"required"  => "required",
							)
				);
		echo '</div>';
	echo '</div>';
	
	//QUANTIDADE
	echo '<div class="form-row">';
		echo '<div class="'.$class_col_12.'">';
			echo form_label("Quantidade:","quantidade");
			echo form_input($quantidade = array("name" 	  	=> "quantidade",
												"id"	  	=> "quantidade",
												"class"	  	=> "form-control",
												"required"  => "required",
												"type"	  	=> "number",
					)
				);
		echo '</div>';
	echo '</div>';
	
	//PREÇO
	echo '<div class="form-row">';
		echo '<div class="'.$class_col_12.'">';
		echo form_label("Pre&ccedil;o:","preco");
		echo form_input($preco = array("name" 	   => "preco",
									   "id"	 	   => "preco",
									   "size"      => "50",
									   "class"	   => "form-control",
									   "required"  => "required"
						)
				);
	echo '</div>';
	
	echo '<br /><br />';
	echo '<div class="form-row">';
		echo '<div class="col-md-12 col-md-offset-5">';
			echo form_submit('cadastrar', 'Cadastrar Produto','class="btn btn-primary"');
			echo '&nbsp;';
			$data = array(
					'name' => 'button',
					'id' => 'voltar',
					'value' => 'true',
					'type' => 'button',
					'content' => 'Voltar',
					'class' => 'btn btn-danger',
					'onclick' => 'window.history.go(-1)'
					
			);
			echo form_button($data);
		echo '</div>';
	echo '</div>';
	
	echo form_fieldset_close();
	echo form_close();
?>
</div>
<script	type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#form_cadastrar_produto").submit(function() {
			var form = $('#form_cadastrar_produto');
			
			$.ajax({
				method: "POST",
				url: "http://localhost/teste_crud/produto/cadastrar_produto",
				data: form.serialize()
			})
			.done(function( msg ) {
				jAlert( msg,'AVISO',function(e){
					if(e){
						window.location.href="http://localhost/teste_crud/produto/";
					} 
				});				
			});
			  return false;
		});
		return false;
	});
</script>