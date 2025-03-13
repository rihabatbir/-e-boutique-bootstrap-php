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
    $product_desc = mysqli_real_escape_string($conn, $_POST['product_desc']);
    $cat_id = mysqli_real_escape_string($conn, $_POST['cat_id']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $product_title = mysqli_real_escape_string($conn, $_POST['product_title']);
    $manifacturer = mysqli_real_escape_string($conn, $_POST['manifacturer']);

    // Vérification si un fichier a été téléchargé
    if (isset($_FILES['product_img']) && $_FILES['product_img']['error'] === UPLOAD_ERR_OK) {
        $product_img = $_FILES['product_img']['name'];
        $product_url=pathinfo($product_img, PATHINFO_FILENAME);;
        $chemin = "images/products/$product_img";

        // Récupération de l'image depuis un formulaire
        $image_tmp = $_FILES['product_img']['tmp_name'];

        // Vérification du type de l'image
        $type = exif_imagetype($image_tmp);
        if ($type === IMAGETYPE_PNG || $type === IMAGETYPE_JPEG || $type === IMAGETYPE_GIF) {
            // Enregistrement de l'image
            if (move_uploaded_file($image_tmp, $chemin)) {
                // Insertion dans la base de données
                $query = "INSERT into products ( product_desc, cat_id, product_img, product_price, product_title, manufacturer_id,product_url) 
                          VALUES ( '$product_desc', '$cat_id', '$product_img','$product_price','$product_title','$manifacturer','$product_url')";
                $res = mysqli_query($conn, $query);

                if ($res) {
                    echo "<script>"; 
                    echo "Swal.fire('produit ajouté avec succès', '', 'success')"; 
                    echo "</script>";		 
                } else {
                    echo "<script>"; 
                    echo "Swal.fire('Echec!', '', 'error')"; 
                    echo "</script>";
                }
            } else {
                echo "<script>"; 
                echo "Swal.fire('Erreur lors de l'enregistrement de l'image', '', 'error')"; 
                echo "</script>";
            }
        } else {
            echo "<script>"; 
            echo "Swal.fire('Seules les images au format PNG, JPEG ou GIF sont autorisées', '', 'error')"; 
            echo "</script>";
        }
    } else {
        echo "<script>"; 
        echo "Swal.fire('Veuillez sélectionner une image', '', 'error')"; 
        echo "</script>";
    }
}
?>
<form class="box" action="" method="post" enctype="multipart/form-data">
    <h1 class="box-title">Add product</h1>
    <br>
    <input type="textarea" class="box-input" name="product_desc" placeholder="product_desc">
    <br>
    <input type="number" class="box-input" name="cat_id" placeholder="cat_id">
    <br>
    <input type="file" class="box-input" name="product_img" placeholder="product_img">
    <br>
    <input type="text" class="box-input" name="product_price" placeholder="product_price">
    <br>
    <input type="text" class="box-input" name="product_title" placeholder="product_title">
    <br>
    <input type="number" class="box-input" name="manifacturer" placeholder="cat_id">
    <br>
    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
</body>
</html>
