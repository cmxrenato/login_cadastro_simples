<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Renato Leal">
   
    <title>Login</title>

   

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    


<style type="text/css">
  


h5
{

  background-color: yellow;
}

#titulo
{
  border-top: 2px solid;
  border-color: grey;
  padding-top: 30px;
 
}


</style>

    
</head>
  
<?php  
  
  /* require com o arquivo entre aspas simples*/
  
 require 'conexao.php';  
  
  
  
  ?>


<body>
    
<header>

  
</header>

<main class= "form-signin w-100 m-auto">

    <section class="py-5 text-center container">
	  
        <div class="row py-lg-5">
		
          <div class="col-lg-6 col-md-8 mx-auto" >
            <h2 class="fw-light">Faça o login para entrar</h2><br>
            
  <br>
        
    <form action = "banco.php" method= "post">
     

        <div class="row g-3 align-items-center">
		<div class="col-auto">
			<label for="inputEmail" class="col-form-label">Email:&nbsp;&nbsp;&nbsp;&nbsp;</label>
			</div>
			
			<div class="col-auto">
			<input type="email" name="email" class="form-control" placeholder="name@example.com">
			</div>
			
			</div><br>
			
			
			<div class="row g-3 align-items-center">
			<div class="col-auto">
			<label for="inputSenha" class="col-form-label">Senha:&nbsp;&nbsp;&nbsp;</label>
			</div>
			
			<div class="col-auto">
			<input type="password" name="senha" class="form-control" aria-labelledby="passwordHelpInline" minlength="8" maxlength="20">
			</div>
			
			<div class="col-12">
				<span id="" class="form-text">
				A senha deve ter de 8 a 20 caracteres.
				</span>
			</div>
			</div>


  <br>
        
    
    
        <div class="col-12">
    <button class="btn btn-success" type="submit">Entrar</button>
  </div><br>
  
  <div class="col-12">
    <a href="cadastro.php">Primeiro Acesso: fazer cadastro</a>
  </div>
  
  
  </form>
  <br>
          
      
      </div>
    </div>
  <br>

    
  </section>

</main>

<footer class="text-muted py-5">
	
	  <p class="py-5 text-center container">&copy; Renato_Leal-2023</p>

</footer>
</body>
</html>
