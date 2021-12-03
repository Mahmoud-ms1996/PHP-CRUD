<?php

    $con = new mysqli('localhost', 'root', '', 'info-table');

   if(!$con){
        die(mysqli_error($con));
   }

?>