<?php
$prodname = $_POST['prodname'];
include 'sql.php';
$query = "INSERT INTO product (name, qty) VALUES ('$prodname', 1)";
mysqli_query($sql,$query);
$query2 = "SELECT `id` FROM product WHERE name='$prodname'";
$result = mysqli_query($sql,$query2);
$row=mysqli_fetch_array($result);
$value = $row[0];
if(isset($_POST['qtyList'])){
    $qtylist = $_POST['qtyList'];
$itemList = $_POST['itemlist'];
for ($i = 0; $i < count($qtylist); $i++) {
    $query3 = "SELECT `id` FROM items WHERE name='$itemList[$i]'";
    $result1 = mysqli_query($sql,$query3);
    $row1=mysqli_fetch_array($result1);
    $value1 = $row1[0];
    $query3 = "INSERT INTO prod_item (prod_id,item_id,qty) VALUES ($value,$value1,$qtylist[$i])";
    mysqli_query($sql,$query3);
  }
}
?>