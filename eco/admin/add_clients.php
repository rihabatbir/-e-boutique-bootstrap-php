<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style4.css">
    <script src="sweetalert2@11.js"></script>
</head>
<body>
<?php
require('config.php');

if (isset($_POST['submit'])) {
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
    $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $customer_email = mysqli_real_escape_string($conn, $_POST['customer_email']);
    $customer_pass = mysqli_real_escape_string($conn, $_POST['customer_pass']);
    $customer_address = mysqli_real_escape_string($conn, $_POST['customer_address']);


    
          
                // Insertion dans la base de données
                $query = "INSERT into customers ( customer_id, customer_name, customer_email, customer_pass,customer_address) 
                          VALUES ( '$customer_id', '$customer_name', '$customer_email','$customer_pass','$customer_address')";
                $res = mysqli_query($conn, $query);

                if ($res) {
                    echo "<script>"; 
                    echo "Swal.fire('client ajouté avec succès', '', 'success')"; 
                    echo "</script>";		 
                } else {
                    echo "<script>"; 
                    echo "Swal.fire('Echec!', '', 'error')"; 
                    echo "</script>";
                }
            }

?>
<form class="box" action="" method="post" enctype="multipart/form-data">
    <h1 class="box-title">Add clients</h1>
    <br>
    <input type="textarea" class="box-input" name="customer_id" placeholder="customer_id">
    <br>
    <input type="text" class="box-input" name="customer_name" placeholder="customer_name">
    <br>
    <input type="mail" class="box-input" name="customer_email" placeholder="customer_email">
    <br>
    <input type="password" class="box-input" name="customer_pass" placeholder="customer_pass">
    <br>
    <input type="text" class="box-input" name="customer_address" placeholder="customer_address">

    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
</body>
</html>
