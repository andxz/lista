<?php  
header('Content-Type: text/html;charset=UTF-8'); 
?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Webbshop</title>



    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">






</head>
<body>

<div class="parent">

<header>

<header class="content">


<a href="index.php"><h1>TO DO</h1></a>

    </header>






</header>






            <article class="box">








<?php



require 'database.php';
require 'insert.php';
require 'delete.php';
require 'completed.php';





echo '<div class="col-md-12">';
echo "<h5>Att göra:</h5>";
echo '</div>';

foreach($data as $todos) {
require 'todos.php';

}


                


echo '<div class="col-md-12">';
echo "<h5>Klara:</h5>";
echo '</div>';

foreach($data as $todos) {
require 'todos2.php';

}


        ?>




<div class="col-md-12">

	 <form action="insert.php" method="POST">
<br />
<h5>Att göra: </h5>
      <input type="text" name="todo">


<br />
<br />

      <button type="submit">Skicka</button>
    </form>



</div>

<div class="col-md-12">

<?php 

if(isset($_GET["todo"])) {
echo "<h5>Skapandet av todon lyckades!</h5>";

}
                
if(false) {


}

?>


    </div>



    </article>






        <footer>


© Andrez Romero 2017 (insert github länk)

        </footer>

    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</div>
</body>


</html>
