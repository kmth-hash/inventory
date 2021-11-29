<?php
    include 'sql.php';
    
    $val = $_POST['search'];
    $query = 'SELECT * FROM items WHERE name LIKE "%$val%" OR id LIKE "%$val%" LIMIT 5';
    $res = mysqli_query($sql,$query);

    
?>

