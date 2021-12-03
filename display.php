<?php include 'connect.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Table</title>

  </head>

  <body>
    <div class="container" style="margin-bottom: 50px;">
        <a href="user.php" class="text-light" style="text-decoration: none;">
            <button type="button" class="btn btn-outline-primary mt-4 mb-4">    
            <i class="fa fa-user-plus"></i> User
            </button>
        </a>

    <table id="table_id" class="table table-striped table-bordered">
    
        <thead class="table-dark">
            <tr>
            <th scope="col"  style="text-align: center;">#No</th>
            <th scope="col"  style="text-align: center;">Full Name</th>
            <th scope="col"  style="text-align: center;">Email</th>
            <th scope="col"  style="text-align: center;">Phone Number</th>
            <th scope="col" style="text-align: center;">Edit | Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql="Select * from `users`";
                $result=mysqli_query($con, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $fullname=$row['fullname'];
                        $email=$row['email'];
                        $phone=$row['phone'];
                        echo '<tr>
                                <th scope="row"  style="text-align: center;">'.$id.'</th>
                                <td  style="text-align: center;">'.$fullname.'</td>
                                <td  style="text-align: center;">'.$email.'</td>
                                <td  style="text-align: center;">'.$phone.'</td>
                                <td style="text-align: center;">
                                <a href="edit.php?editid='.$id.'" class="text-light" style="text-decoration: none;">
                                    <button class="btn btn-outline-success btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                </a>
                                <a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration: none;" onclick="return confirm(\'Are you sure you want to delete this user?\');">
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </a>
                                </td>
                            </tr>';
                    }
                }
            ?>
                

        </tbody>
        <!-- <caption class="table table-bordered" colspan="12" style ="text-align: center">The number of users is <span style="color:black; font-weight: bold;"><?= mysqli_num_rows($result)?></span></caption> -->
    </table>

  </div>
    

  <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.18.19/js/dataTables.bootstrap4.min.js"></script>
  <script>
      $(document).ready( function () {
        $('#table_id').DataTable();
    } );
  </script>
  </body>
</html>