<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$nationality = validate($_POST['nationality']);
	$birthDate = validate($_POST['birthDate']);

	$user_data = 'name='.$name. '&email='.$nationality. '&birthDate='.$birthDate;

	if (empty($name)) {
		header("Location: ../index.php?error=Nome é obrigatório&$user_data");
	}else if (empty($nationality)) {
		header("Location: ../index.php?error=Nacionalidade é obrigatória&$user_data");
	}else if (empty($birthDate)) {
		header("Location: ../index.php?error=Data de nascimento é obrigatória&$user_data");
	}else {

       $sql = "INSERT INTO atores(name, nationality, birthDate) 
               VALUES('$name', '$nationality', '$birthDate')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=criado com sucesso");
       }else {
          header("Location: ../index.php?error=erro desconhecido&$user_data");
       }
	}

}

?>
