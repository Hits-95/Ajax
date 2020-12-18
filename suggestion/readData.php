<?php
	$keyword = $_GET['keyword'];

	$con = mysqli_connect('localhost', 'Hitesh', 'online', 'test');
	
	if($con){
		//mysqli_select_db($con, );
		$sql = "SELECT * FROM `user` WHERE fname like '" . $_GET["keyword"] . "%'";
		$result = mysqli_query($con, $sql);
		if(!empty($result)) {
			foreach($result as $val) {
?>
				<li  class="list-group-item"  onclick="selectFname('<?php echo $val["fname"]; ?>');"><?php echo $val["fname"]; ?></li>
<?php
			}
		}else
			echo"None.";
	}else
			echo"connection not establish";


	echo $keyword;
?>
