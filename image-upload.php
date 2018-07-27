<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mega College</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
		<div class="container">
			<nav class="navbar">
				<img src="assets/img/logo.png" class="center-block">
			</nav>
			<div class="section">
				<form class="form" method="POST" action="controller/displayController.php"  enctype="multipart/form-data">
					<div class="row">	
						<div class="file-upload col-lg-6 col-md-6 col-sm-6 col-xs-12">
						  	<div class="uploader" onclick="$('#filePhoto').click()">
							    Click here or drag here your images for preview and set userprofile_picture data
							    <img src=""/>
							    <input type="file" name="image"  id="filePhoto" />
							</div>
						</div>	
					</div>
					<input type="submit" name="next" class="btn btn-primary center-block" value="Next">
				</form>
			</div>
		<script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>