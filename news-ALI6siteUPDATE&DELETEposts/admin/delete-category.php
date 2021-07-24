<?php

 include "config.php";

 session_start();

if ($_SESSION["user_role"]=='0') {
    header("Location: {$hostname}/admin/post.php");
}

?>

<!-- Below PHP code is for -> To Delete category Table data. -->


<?php

$cat_id = $_GET['id'];
$sql = "DELETE FROM category WHERE category_id = {$cat_id}";

if (mysqli_query($conn, $sql)) {
     header("Location: {$hostname}/admin/category.php");
}

?>