<?php
$id=$_GET['id'];
delete_newcat($id);
header("location:dashbord.php?m=news_cat&p=list");
?>