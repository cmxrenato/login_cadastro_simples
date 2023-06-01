
<!DOCTYPE html>
<head>
<title>Validação dos dados</title>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"> 
    
 <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php  
  
  /* require com o arquivo entre aspas simples*/
  
 require 'conexao.php';  
 
  
  $senha = $_POST["senha"];
  $email = $_POST["email"];






	$contador = 0;
  /*Verificação para não repetir o mesmo usuário cadastrado*/
  
  $listagem = mysqli_query($conexao, "SELECT * FROM login");
  $linha = mysqli_fetch_array($listagem);
      
      
     
      
      while ($linha = mysqli_fetch_array($listagem)){
		  
		  if ($email == $linha['email'] and $senha == $linha['senha']){
				
				
				
				header('location:sistema.php');
				exit();
				
				
				
				} else {
				
				$contador ++;
				
				} 
	
}
	
	



  
  ?>

		
        <section class="py-5 text-center container">
	  
        <div class="row py-lg-5">
		
          <div class="col-lg-6 col-md-8 mx-auto" >
            <h2 class="fw-light">Ops! Um erro aconteceu...</h2><br>
            <h4 class="fw-light">Verifique se seu email ou senha estão corretos.</h4><br>
            
            <a href="index.php" class="btn btn-primary">Voltar ao início</a>
            <div class="row py-lg-5"><img src="erro.jpg" ></div>
            
  <br>
			<div></div><br>
			
			
	
        
    
  <br>
         
      
      </div>
    </div>
  <br>

    
  </section>
           
           
</body>
</html>
