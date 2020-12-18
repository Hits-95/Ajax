<?php
	
	$str = $_GET['str'];
	//echo $str;
	$con = mysqli_connect('localhost', 'Hitesh', 'online', 'test');
	if($con){
		//mysqli_select_db($con, );
		$sql = "SELECT * FROM `user` WHERE fname = '".$str."' ";
		$result = mysqli_query($con, $sql);
		foreach($result as $val){		
			$data[] = array("id" => $val['id'],
							"fname" => $val['fname'],
							"lname" => $val['lname'],
							"email" => $val['email'],
							"job"   => $val['job'],
							"addr"  => $val['addr']
						);		
		}
		// Encoding array in JSON format
		echo json_encode($data);
	}else
		echo"connection not establish";


?>