<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style4.css">
    <script src="sweetalert2@11.js"></script>
</head>
<body>
<?php
require('config.php');

if (isset($_GET['customer_id'])) {
    $customer_id = mysqli_real_escape_string($conn, $_GET['customer_id']);

    // Récupérer les informations du client à partir de la base de données
    $query = "SELECT * FROM customers WHERE customer_id = '$customer_id'";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        // Si aucun client trouvé avec cet ID
        echo "<script>"; 
        echo "Swal.fire('Client non trouvé!', '', 'error')"; 
        echo "</script>";
    }
}

if (isset($_POST['submit'])) {
    $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $customer_email = mysqli_real_escape_string($conn, $_POST['customer_email']);
    $customer_pass = mysqli_real_escape_string($conn, $_POST['customer_pass']);
    $customer_address = mysqli_real_escape_string($conn, $_POST['customer_address']);

    // Mettre à jour les informations du client dans la base de données
    $query = "UPDATE customers 
              SET customer_name = '$customer_name', 
                  customer_email = '$customer_email', 
                  customer_pass = '$customer_pass', 
                  customer_address = '$customer_address' 
              WHERE customer_id = '$customer_id'";
    $res = mysqli_query($conn, $query);

    if ($res) {
        echo "<script>"; 
        echo "Swal.fire('Informations du client mises à jour avec succès', '', 'success')"; 
        echo "</script>";		 
    } else {
        echo "<script>"; 
        echo "Swal.fire('Echec de la mise à jour!', '', 'error')"; 
        echo "</script>";
    }
}

?>
<form class="box" action="" method="post" enctype="multipart/form-data">
    <h1 class="box-title">Modifier le client</h1>
    <br>
    <input type="text" class="box-input" name="customer_name" placeholder="Nom du client" value="<?php echo isset($row['customer_name']) ? $row['customer_name'] : ''; ?>">
    <br>
    <input type="mail" class="box-input" name="customer_email" placeholder="Email du client" value="<?php echo isset($row['customer_email']) ? $row['customer_email'] : ''; ?>">
    <br>
    <input type="password" class="box-input" name="customer_pass" placeholder="Mot de passe du client" value="<?php echo isset($row['customer_pass']) ? $row['customer_pass'] : ''; ?>">
    <br>
    <input type="text" class="box-input" name="customer_address" placeholder="Adresse du client" value="<?php echo isset($row['customer_address']) ? $row['customer_address'] : ''; ?>">

    <input type="submit" name="submit" value="Mettre à jour" class="box-button" />
</form>
</body>
</html>
