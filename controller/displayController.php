<?php 
	require '../model/query.php';
	require '../connectDB/db.php';
	require '../function/generateTableFunction.php';
	$obj = new Query($pdo, 'person');
	$person = $obj->findData('id', $_POST['id'])->fetch();
	if (isset($_POST['update'])) {
		unset($_POST['update']);
		if ($_FILES['image']['error'] == 0) {
			$imageQueryDirectory = image($_FILES);
			$_POST['image'] = $imageQueryDirectory;
		}
		else{
			$_POST['image'] = $person['image'];
		}
		echo $person['image'];
		$stmt = $obj->save($_POST, 'id');
		$lastid = $_POST['id'];
		header('location:../view/smartCard.php?id='.$lastid.'');
	}
	if (isset($_POST['submit'])) {
		unset($_POST['submit']);

		$imageQueryDirectory = image($_FILES);

		$_POST['image'] = $imageQueryDirectory;

		$stmt = $obj->save($_POST);
		$lastid = $pdo->lastInsertId();
		header('location:../view/smartCard.php?id='.$lastid.'');
	}
	function image(array $files){
		$imageUploadDirectory = "../assets/img/";
		$imgTmpFile = $files['image']['tmp_name'];
		//Concatenate image name with directory
		$fileName = $files["image"]["name"];
		$imageQueryDirectory = "assets/img/".basename($files["image"]["name"]);
		move_uploaded_file($files["image"]["tmp_name"], $imageUploadDirectory.$fileName);
		return $imageQueryDirectory;
	}
?>