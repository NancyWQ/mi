<?php
header("Content-Type:application/json");
require("init.php");
$sql="select * from carousel where is_show = '1' ";
$result=mysqli_fetch_all(mysqli_query($conn,$sql),1);
if($result){
	echo json_encode($result);
}

?>