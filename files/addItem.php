<?php

    include 'db.php';
    $itemName = "";
    $itemQty = "";
    $itemUnits = "";
    $url_to_page = $_SERVER['PHP_SELF'];
    if(isset($_POST['submitForm']))
    {
        $itemName = strtolower($_REQUEST['Itemname']);
        $itemUnits = $_REQUEST['Itemunits'];
        $itemQty = $_REQUEST['Itemqty'];

        $query = "Select * from items where name = '$itemName'";
        $resultset = mysqli_query($conn, $query);
        $exists = FALSE;        
        $num = mysqli_num_rows($resultset);
        if($num > 0 ){
            echo '<script language="javascript">';
            echo 'alert("Item already exists")';
            echo '</script>';
            $exists = TRUE;
            
        } 

        if(!$exists)
        {
            $query = "INSERT INTO items(name,category,qty) values ('$itemName' , '$itemUnits' , $itemQty )";
        
            if(mysqli_query($conn, $query)){
                echo '<script language="javascript">';
                echo 'alert("Item added successfully")';
                echo '</script>';
            } else{
                echo '<script language="javascript">';
                echo 'alert("Error while adding this item")';
                echo '</script>';
            }
        }

        echo "<script>window.location='$url_to_page';</script>";

    }
    
    


?>