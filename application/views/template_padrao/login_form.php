<?php 
$dominio = $_SERVER['SERVER_NAME'];
//include_once ('../acesso.sescon/index2.php');
?>

<form name="form_login" id="form_login" method="post">
	<table border="0" cellspacing="5" cellpadding="5">
			<style type="text/css"> 
			.classe_area_restrita{
								   font-size:20px; 
								   font-weight: bold;
								 }
			</style>
	    <tr>
			<td colspan="3" align="center">
				<label class="classe_area_restrita">Área Restrita</label>
			</td>
		</tr>
		<tr>	
			<td width="139" align="left" bgcolor="#F5F1EE" class="legenda">
				<strong>CNPJ/CPF:</strong><input type="text" name="usuario" id="usuario" title="Usuário - CNPJ" />
			</td>
			<td width="126" align="left" bgcolor="#F5F1EE" class="legenda">
				<strong>Senha:</strong><input type="password" name="senha" id="senha" title="Senha" />
			</td>
			<td width="17" align="center" bgcolor="#E0DDDA">
				<input type="submit" value="OK" class="submit_login_senha" />
			</td>
		</tr>
		<tr>
			<td colspan="4" align="right" class="legenda">
				<strong>Esqueceu a senha? <a target="_blank" href='https://www.sescon.org.br/site/index.php?pagina=esqueci_senha/esqueci_senha.php&site=novo&email_marketing=1'> Clique aqui </a></strong>
			</td>
		</tr>
	</table>
</form>

 