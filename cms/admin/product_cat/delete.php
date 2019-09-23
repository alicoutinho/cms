<?php
$id=$_GET['id'];
delete_productcat($id);
header("location:dashbord.php?m=product_cat&p=list");
?>