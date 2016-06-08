<?php
class conexao{
	
      var $usuario = "root";
      var $senha = "";
      var $sid = "localhost";
      var $banco = "sqlcreator";
      var $link = "";
      public function conexao(){
          $this->Conecta();
      }
      function Conecta(){
          $this->link = mysql_connect($this->sid,$this->usuario,$this->senha);
		  //mysql_query("SET NAMES 'utf8'");
		  //mysql_query('SET character_set_connection=utf8');
		  //mysql_query('SET character_set_client=utf8');
		  //mysql_query('SET character_set_results=utf8');
          if (!$this->link){
              die("Problema na Conexão com o Banco de Dados");
          }elseif (!mysql_select_db($this->banco,$this->link)){
              die("Problema na Conexão com o Banco de Dados");
          }
      }

      /*function Conecta(){
          $this->link = new PDO('mysql:host=localhost;dbname=sqlcreator;charset=utf8mb4', 'root', '');
		  //mysql_query("SET NAMES 'utf8'");
		  //mysql_query('SET character_set_connection=utf8');
		  //mysql_query('SET character_set_client=utf8');
		  //mysql_query('SET character_set_results=utf8');
          if (!$this->link){
              die("Problema na Conexão com o Banco de Dados");
          }elseif (!mysql_select_db($this->banco,$this->link)){
              die("Problema na Conexão com o Banco de Dados");
          }
      }*/
      public function Desconecta(){

          mysql_close($this->link);
      }
	  
  	}
    /** TESTE SE CONEXAO FUNCIONOU  
	
  	$conexao = new conexao();
	$conexao->Conecta();
	$sql = "INSERT INTO  `sqlcreator`.`usuarios` (
			`cod` ,
			`nome` ,
			`email`
			)
			VALUES (
			NULL ,  'testase',  'testase'
			);";
	mysql_query($sql);
    */
?>

