<?php




require 'database.php';



if (isset($_POST['completed'])){

$statement = $pdo->prepare("



UPDATE todos
SET completed = 1
WHERE id = :id;


");
$statement->execute(array(
':id' => $_POST['completed'] ));
header('Location:index.php');




}
