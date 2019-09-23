<?php
$id=$_GET['id'];
delete_contact($id);
header("location:dashbord.php?m=contact&p=list");
?>