<?php

require 'database.php';



if ($todos["completed"]) {


echo '<div class="col-md-9">';
echo $todos["title"];
echo '</div>';


require 'form2.php';


}

else {


}






?>




