
 <?php  
  
  /* require com o arquivo entre aspas simples*/
  
 require 'conexao.php';  
 
  $nome = $_POST["nome"];
  $senha = $_POST["senha"];
  $senha2 = $_POST["senha2"];
  $email = $_POST["email"];






 if ($senha == $senha2){
  /*Verificação para não repetir o mesmo usuário cadastrado*/
  
  $listagem = mysqli_query($conexao, "SELECT * FROM login");
  $linha = mysqli_fetch_array($listagem);
      
      while ($linha = mysqli_fetch_array($listagem)){
		  
		  if ($email == $linha['email']){
				
				
				
				header('location:pagina_user_repetido.php');
				
				
				mysqli_close($conexao);
				
			
			
			
		}
		  
	  }
 
	  /*Insere os dados no banco*/
	  
	  
	  $sql = "INSERT INTO login(nome,email,senha) 
				VALUES('$nome','$email','$senha')";
		
				mysqli_query($conexao,$sql);
		
		
				header('location:pagina_sucesso.php');
  

}else{
	
	header('location:cadastro.php');
	
}
  
  
  ?>
