<?php
function retreiveItems(){
    include 'sql.php';
    $str = "select * from items";
    $res=mysqli_query($sql,$str);
    return $res;
}
?>