<?php
function retreiveItems(){
    include 'sql.php';
    $str = "select * from items";
    $res=mysqli_query($sql,$str);
    return $res;
}

function retreiveProducts(){
    include 'sql.php';
    $str = "select * from product";
    $res=mysqli_query($sql,$str);
    return $res;
}
function henlo(){
    print_r("henlo");

}
function retreiveproductItems($prodId){
    include 'sql.php';
    $str = "SELECT * FROM `prod_item`,`items` WHERE `prod_item`.`item_id` = `items`.`id` and `prod_id`='$prodId'";
    $res=mysqli_query($sql,$str);
    return $res;
} 

function deleteitemsandproducts($prodId){
    include 'sql.php';
    ?>
    alert(<?php  echo $prodId?>)
    <?php
    $str1 = "DELETE FROM prod_item WHERE prod_id = '$prodId'";
    $str2 = "DELETE FROM product WHERE id = '$prodId'";
    mysqli_query($sql,$str1);
    mysqli_query($sql,$str2);
}
if(isset($_POST['prodID'])){
    deleteitemsandproducts($_POST['prodID']);
}
?>