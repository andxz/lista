<?php




require 'database.php';



if (isset($_POST['delete'])){

$statement = $pdo->prepare("DELETE FROM todos WHERE id = :id");
$statement->execute(array(
':id' => $_POST['delete'] ));
header('Location:index.php');




}




