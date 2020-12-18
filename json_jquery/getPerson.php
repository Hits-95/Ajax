<?php
	include("header.php");
	$con = mysqli_connect('localhost', 'Hitesh', 'online');
	if($con){
		mysqli_select_db($con, "test");
		$sql = "SELECT fname FROM `user`";
		$result = mysqli_query($con, $sql);
		
		echo "<option value='null'>Select Name</option>";

		foreach($result as $val){
			echo"<option value=".$val['fname'].">".$val['fname']."</option>";
		}
		
		
	}else
		echo"connection not establish";


?>
""