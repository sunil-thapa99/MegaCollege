<?php 
	require '../model/query.php';
	require '../connectDB/db.php';
	require '../function/generateTableFunction.php';
	$obj = new Query($pdo, 'person');
	$person = $obj->findData('id', $_GET['id'])->fetch();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Mega College</title>
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		<link href="../assets/css/smart.css" rel="stylesheet" type="text/css" media="print,screen">
	</head>
	<body>
		<div id="background">
			<div id="Layer0"><img src="../assets/img/smart-card/Layer0.png"></div>
			<div id="idcard"><img src="../assets/img/smart-card/idcard.png"></div>
			<div id="Ellipse1">
				<img src="../<?php echo $person['image'] ?>" width="75px" height="75px">
			</div>
			<div id="Name">
				<?php 
					if (isset($person['mname'])) {
						echo '<p>Name: '. $person['fname'] . ' ' .$person['mname'].' '.$person['lname'].'</p>';
					}
					else{
						echo '<p>Name: '. $person['fname'] . ' '.$person['lname'].'</p>';
					}
				?>
			</div>
			<div id="Namecopy">
				<p>Level: <?php echo $person['level'] ?></p>
			</div>
			<div id="Namecopy2">
				<p>Student Id: <?php echo $person['id'] ?></p>
			</div>
			<div id="Namecopy3">
				<p>Address: <?php echo $person['townVillage'].', <br> <span id="location"> '.$person['municipality'].' - '.$person['ward'] .', </span><br><span id="location">'.$person['district']?></span></p>
			</div>
			<div id="Namecopy4">
				<p>Issue Date: 01/06/2016 | Expire Date: 09/18/2020</p>
			</div>
		</div>
		<div class="row">
			<a class="btn btn-primary btn-lg" href="../info.php?id=<?php echo $_GET['id'] ?>"> Back </a>
			<button class="btn btn-success btn-lg" onclick="printDiv('background')"> Print </button>
			<a class="btn btn-info btn-lg" href="../index.php"> Next </a>
			</div>
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function printDiv(divName) {
			    var printContents = document.getElementById(divName).innerHTML;
			    var originalContents = document.body.innerHTML;

			    document.body.innerHTML = printContents;

			    window.print();

			    document.body.innerHTML = originalContents;
			}
		</script>
 </body>
 </html>