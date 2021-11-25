<?php

$conn = new mysqli('localhost' , 'root' , '' , 'inventory');

if( $conn->connect_error)
{
    echo "<script>window.location='https://localhost/stocker/inventory/index.php'; </script>";
    
}

?>