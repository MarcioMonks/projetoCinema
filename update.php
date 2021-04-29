<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Atualizar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Atualizar</h4><hr><br>
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
		           value="<?=$row['name'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="nationality">Nacionalidade</label>
		     <input type="text" 
		           class="form-control" 
		           id="nationality" 
		           name="nationality" 
		           value="<?=$row['nationality'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="birthDate">Data de Nascimento</label>
		     <input type="date" 
		           class="form-control" 
		           id="birthDate" 
		           name="birthDate" 
		           value="<?=$row['birthDate'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden>

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Atualizar</button>
		    <a href="read.php" class="link-primary">Consultar</a>
	    </form>
	</div>
</body>
</html>