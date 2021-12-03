<?php

    include 'connect.php';
    
    $id = $_GET['editid'];

    $sql = "Select * from `users` where id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $fullname = $row['fullname'];
    $email = $row['email'];
    $phone = $row['phone']; 

    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];

        $sql = "update `users` set id = $id, fullname = '$fullname', email = '$email', phone = '$phone' where id = $id";

        $result = mysqli_query($con, $sql);

        if($result){
            echo '<div class="alert alert-success ms-1 me-1 my-3" role="alert"><i class="fa fa-check-circle"></i> Updated Successfully</div>';
            header( "refresh:2;url=display.php" );
        } else {
            die(mysqli_error($con));
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Adding-User</title>
  </head>
  <body>
    <div class="container ">
    <form method="POST">
        <div class="mb-3 my-5">
            <label class="form-label">Full Name</label>
            <input 
                type="text" 
                class="form-control" 
                name="fullname" 
                placeholder="Enter Your Name"
                autocomplete="off"
                value="<?php echo $fullname ?>">
            
        </div>
        <div class="mb-3 my-4">
            <label class="form-label">Email</label>
            <input 
                type="email" 
                class="form-control" 
                name="email" 
                placeholder="name@example.com"
                autocomplete="off"
                value="<?php echo $email ?>">
            <div class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 my-4">
            <label class="form-label">Phone Number</label>
            <input 
                type="text" 
                class="form-control" 
                name="phone" 
                placeholder="Enter Your Phone Number"
                autocomplete="off"
                value="<?php echo $phone ?>">
        </div>

        <button type="submit" class="btn btn-outline-primary mb-3 my-3" name="submit"><i class="fa fa-save"></i> Save</button>
    </form>
    </div>

  </body>
</html>