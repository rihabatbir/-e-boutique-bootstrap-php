<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="sweetalert2@11.js"></script>

</head>
<body>
<?php

require('config.php');

if (isset($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
    $stmt = $conn->prepare("DELETE FROM customers WHERE customer_id = ?");
    $stmt->bind_param("i", $customer_id);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
                Swal.fire('Supprimé avec succès de la base de données !', '', 'success')
             </script>";
    } else {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
                Swal.fire('Échec de la suppression', '', 'error')
             </script>";
    }

    // Fermer la requête et la connexion
    $stmt->close();
    $conn->close();
}
?>
</body>

















