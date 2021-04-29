<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}

$id = validate($_GET['id']);

$sql = "SELECT * FROM atores WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
} else {
    	header("Location: read.php");
}


} else if(isset($_POST['update'])){
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
	$id = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../update.php?id=$id&error=Nome é obrigatório");
	}else if (empty($nationality)) {
		header("Location: ../update.php?id=$id&error=Nacionalidade é obrigatória");
        }else if (empty($birthDate)) {
		header("Location: ../update.php?id=$id&error=Data de nascimento é obrigatória");
	}else {

       $sql = "UPDATE atores
               SET name='$name', nationality='$nationality', birthDate='$birthDate'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=atualizado com sucesso");
       }else {
          header("Location: ../update.php?id=$id&error=erro desconhecido&$user_data");
       }
	}
}else {
	header("Location: read.php");
}