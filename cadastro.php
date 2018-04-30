<?php
	$banco = "id3731020_teste_scc4";
	$usuario = "id3731020_mateusbcb";
	$senha = "@Blender00";
	$hostname = "localhost";
	$conn = mysql_connect($hostname,$usuario,$senha); mysql_select_db($banco) or die( "Não foi possível conectar ao banco MySQL");
	if (!$conn) {
		echo "Não foi possível conectar ao banco MySQL.";
		exit;
	}
	else {
		echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.";
	}
	mysql_close(); 	
	
	echo '<link href="css/estilo.css" rel="stylesheet">';
	echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
	$tipo =     $_POST['tipo'];
	$genero =    $_POST['genero'];
	$nome =     $_POST['nome'];
	$email =    $_POST['email'];
	$cpf =      $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$rg =       $_POST['rg'];
	$tel =      $_POST['tel'];
	$celular =  $_POST['celular'];
	
	echo'<table>
			<tr>
				<th>Nome</th>
				<th>CPF/CNPJ</th>
				<th>E-mail</th>
				<th>Telefone</th>
				<th>Localização</th>
				<th>Status</th>
				<th> </th>
				<th> </th>
			</tr>
			<tr>
				<td>';echo $nome;echo '</td>
				<td>';echo $cpf;echo '</td>
				<td>';echo $email; echo'</td>
				<td>';echo $celular;echo'</td>
				<td>';echo $endereco;echo'</td>
				<td>';echo '<i class="fa fa-circle" style="font-size:24px;color:#2f9b29"></i> </td>
				<td>';echo '<i class="fa fa-pencil" style="font-size:24px;"></i> </td>
				<td>';echo '<i class="fa fa-trash" style="font-size:24px;"></i> </td>
			</tr>
		 </table>';
?>