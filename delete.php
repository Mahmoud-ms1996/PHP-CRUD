<?php
    include 'connect.php';
    
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];
    
        $sql = "delete from `users` where id = $id";

        $result = mysqli_query($con, $sql);

        if($result){
            //echo "Deleted Successfully";
            //echo '<div class="alert alert-success ms-1 me-1 my-3" role="alert">Deleted Successfully</div>';
            header('location:display.php');
        } else {
            die(mysqli_error($con));
        }

    }
?>