<?php 
	require 'model/query.php';
	require 'connectDB/db.php';
	require 'function/generateTableFunction.php';

	
	print_r($lasidImage->fetch(PDO::FETCH_ASSOC));
	
?>