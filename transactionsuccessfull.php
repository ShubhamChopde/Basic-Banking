<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/contactus.css">
</head>
<body>

     <?php
     include 'navbar.php';
      ?>   

                    <?php

                    $user_name = "root";
                    $password = "";
                    $database = "Banking";
                    $host_name = "localhost"; 
                    $conn=mysqli_connect($host_name, $user_name, $password, $database);
    
                    if(!$conn){
                    die("Error Could not connect the database --> ".mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM transactionhistory ORDER BY sno DESC limit 1";
                     $result = mysqli_query($conn,$sql);
                 
                 ?>
        <div class="container col-md-4 text-center py-5">  
                <div class="card">
                <h5 ><i class = "fa fa-check-circle fa-3x"></i>
                    <br><br>Transaction Successfull</h5>
                <div>
                    <br>
                <table class="table ">
                    <tr class="">
                    <th>The Amount Transfer is :  <i class="fa fa-rupee sign fa-lg px-2"></i></th>
                    <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                     ?>
                        <td class="px-1"><?php echo $rows['balance'] ?></td>
                    <?php
                     }
                    ?>
                    </tr>

                </table>  
                </div>    
            </div>  
</div>
</body>
</html>