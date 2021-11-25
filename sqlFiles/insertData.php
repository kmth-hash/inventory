<?php
    include 'sql.php';
$itemname = $_POST['itemName'];
$itemcategory = $_POST['itemCategory'];
$itemqty = $_POST['itemQty'];
$itemdesc = $_POST['itemDesc'];
$query = "INSERT INTO items (name, category, qty) VALUES ('$itemname', '$itemcategory','$itemqty')";
mysqli_query($sql,$query);

?>