<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Renato Leal">
   
    <title>Cadastro</title>

   

    
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



<script type="text/javascript">
	
	function VerificarSenha(){
		
		var senha = document.getElementById("senha").value;
		var senha2 = document.getElementById("senha2").value;
		
		if (senha !== senha2){
			
			var mensagem = "Senhas diferentes!! Por favor, as senhas devem ser iguais.";
			
			alert (mensagem);
		
		
		}



</script>
    
</head>
  

<?php require 'conexao.php'; ?>
<script>
    /*function carregar(){
        document.getElementById("s1").value = localStorage.getItem("s1");
        document.getElementById("s2").value = localStorage.getItem("s2");
    }*/
    function submeter(){
        localStorage.setItem("s1",document.getElementById("s1").value);
        localStorage.setItem("s2",document.getElementById("s2").value);
		
		var pass1 = document.getElementById('s1');
		var pass2 = document.getElementById('s2');
		
		num1 = pass1.value;
		num2 = pass2.value;
		
		if (num1 !== num2){
			
			alert ("As senhas estão diferentes! Por favor, digite senhas iguais!");
			
					
			}
		
    }
	
</script>



<body onload="carregar();">
    
<header>

  
</header>

<main class= "form-signin w-100 m-auto">

    <section class="py-5 text-center container">
	  
        <div class="row py-lg-5">
		
          <div class="col-lg-6 col-md-8 mx-auto" >
            <h2 class="fw-light">Cadastro</h2><br>
            
  <br>
        
    <form action = "inserir_dados2.php" method= "post" onsubmit="submeter();">
     

        <div class="row g-3 align-items-center">
		<div class="col-auto">
			<label for="inputNome" class="col-form-label">Nome:&nbsp;</label>
			</div>
			
			<div class="col-auto">
			<input type="text" name="nome" class="form-control" required>
			</div>
			
			</div><br>
			
			
			 <div class="row g-3 align-items-center">
		<div class="col-auto">
			<label for="inputEmail" class="col-form-label">Email:&nbsp;</label>
			</div>
			
			<div class="col-auto">
			<input type="email" name="email" class="form-control" placeholder="name@example.com" required>
			</div>
			
			</div><br>
			
			
				
			
			<div class="row g-3 align-items-center">
		<div class="col-auto">
			<label for="inputSenha" class="col-form-label">Senha:</label>
			</div>
			
			<div class="col-auto">
			<input type="password" id="s1" name="senha" class="form-control" aria-labelledby="passwordHelpInline" minlength="8" maxlength="20">
			</div>
			
			<div class="col-12">
				<span id="" class="form-text">
				Crie a sua senha. Ela deve ter de 8 a 20 caracteres.
				</span>
			</div>
			</div><br>
			
			<div class="row g-3 align-items-center">
		<div class="col-auto">
			<label for="inputSenha" class="col-form-label">Confirme a sua Senha:&nbsp;&nbsp;&nbsp;</label>
			</div>
			
			<div class="col-auto">
			<input type="password" id="s2" name="senha2" class="form-control" aria-labelledby="passwordHelpInline" minlength="8" maxlength="20">
			</div>
			
			
			</div>


  <br>
        
    
    
        <div class="col-12">
			<button class="btn btn-success" type="submit" onclick="VerificarSenha()">Cadastrar</button>
		</div><br>
		
 
	
  
  </form>
				 <div class="col-12">
				<a href="index.php" class="btn btn-primary" type="submit">Voltar</a>
				</div><br>
  
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
