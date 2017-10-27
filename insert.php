<?php

require 'database.php';


if (isset($_POST['todo'])){
$statment = $pdo->prepare("



INSERT INTO todos (title) VALUES (:todo) 


");
$statment->execute(array(
':todo' => $_POST['todo']
)
);
header('Location:index.php?todo=true');
        echo "<h5>Skapandet av todon lyckades!</h5>";





}










