<?php
include_once 'conexao.php';



	$conexao = new conexao();
	$conexao->Conecta();
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	
	$sql = "INSERT INTO  `sqlcreator`.`usuarios` (
			`cod` ,
			`nome` ,
			`email`
			)
			VALUES (
			NULL ,  '".$nome."',  '".$email."'
			);";
	mysql_query($sql);
	$conexao->Desconecta();
	
	
?>


<!--<script>
function retorno() {
	alert("Entidade cadastrado com sucesso!");
    window.location.href = 'cadastroentidade.php';
}
//window.location = 'http://www.oficinadanet.com.br';
</script> -->