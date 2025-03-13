<?php
 require('config.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style1.css" />
     <style>
           body{
           font-family: Consolas;
           }
     </style>
 </head>
 <body>
     
<div class="ligne1"> 
    <h1> Home / View Clients </h1>   
</div>




                <div class="ligne2" >
                    <table class="" >
                        
                            <tr>
                                <th>customer_id</th>
                                <th>customer_name</th>
                                <th>customer_email</th>
                                <th>Adresse</th>

                                
                            </tr>

                        
                        <?php
                            $get_pro = "select * from customers";
                            $run_pro = mysqli_query($conn,$get_pro);
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $customer_id = $row_pro['customer_id'];
                                $customer_name = $row_pro['customer_name'];
                                $customer_email = $row_pro['customer_email'];
                                $adresse = $row_pro['customer_address'];

                                
                            ?>

                            <tr>
                                <td><?php echo $customer_id; ?></td>
                                <td><?php echo $customer_name; ?></td>
                                <td> <?php echo $customer_email; ?></td>
                                <td> <?php echo $adresse; ?></td>
                                <td>  <!-- colonne de suppression-->
                                    <a href="delete_clients.php?customer_id="> Delete </a>
                                </td>
                                <td>  <!-- colonne d'edition-->
                                    <a href="update_clients.php?customer_id="> Edit</a>
                                </td>
                            </tr>

                                
                            </tr>
                            <?php } ?> 
                           
                    </table>
                    
                            <?php  ?> 
                        
                    </table>
                    <a href="add_clients.php"><h2>ajouter un client</h2></a>
                </div>
    </body> 
</html>           
