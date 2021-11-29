<?php
    include 'sql.php';
    $totalPurchasesThisMonth = 0;
    $totalPendingItems = 0;
    $totalItems = 0;

    $query = "SELECT count(*) as total from items";
    $res = mysqli_fetch_array(mysqli_query($sql,$query));
    $totalItems = $res["total"];

    $query = "SELECT COUNT(*) as total FROM purchase as o WHERE MONTH(o.date_purchase) = MONTH(NOW())";
    $res = mysqli_fetch_array(mysqli_query($sql,$query));
    $totalPurchasesThisMonth = $res["total"];

    $query = 'SELECT COUNT(*) as total FROM purchase where status <> "Pending"';
    $res = mysqli_fetch_array(mysqli_query($sql,$query));
    $totalPendingItems = $res["total"];

?>