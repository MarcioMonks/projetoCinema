<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Cadastrar Ator</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Nome</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Nome">
		    </div>

		   <div class="form-group">
		     <label for="nationality">Nacionalidade</label>
		     <input type="text" 
		           class="form-control" 
		           id="nationality" 
		           name="nationality" 
		           value="<?php if(isset($_GET['nationality']))
		                           echo($_GET['nationality']); ?>"
		           placeholder="Nacionalidade">
		   </div>

		   <div class="form-group">
		     <label for="birthDate">Data de Nascimento</label>
		     <input type="date" 
		           class="form-control" 
		           id="birthDate" 
		           name="birthDate" 
		           value="<?php if(isset($_GET['birthDate']))
		                           echo($_GET['birthDate']); ?>">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Cadastrar</button>
		    <a href="read.php" class="link-primary">Consultar</a>
	    </form>
	</div>
</body>
</html>
    
    

