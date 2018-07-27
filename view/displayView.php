<?php 
	require '../model/query.php';
	require '../connectDB/db.php';
	require '../function/generateTableFunction.php';
	$obj = new Query($pdo, 'person');
	$person = $obj->findData('id', $_GET['id'])->fetch();
	$img = new Query($pdo, 'image');
	$image = $img->findData('id', $person['image_id'])->fetch();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mega College</title>
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/styles.css" media="print">
	</head>
	<body>
		<div class="container">
			<nav class="navbar">
				<img src="../assets/img/img.jpg" style="float: left;">
				<img src="../assets/img/nepal.gif" style="float: right;">
			</nav>
			<div class="section">
				<form class="form">
					<fieldset>
						<legend>Personal Infomation </legend>
						<div class="form-row">
							<div  class="col-xs-6 col-sm-6 col-md-4">
			                    <img class="center-block" src="../<?php echo $image['image'] ?>" width="300px" height="250px">
			                </div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control input-md" value="<?php echo $person['fname'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Middle Name</label>
										<input type="text" class="form-control input-md" value="<?php echo $person['mname'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>SurName</label>
										<input type="text" class="form-control input-md" value="<?php echo $person['lname'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Place Of Birth</label>
										<input type="text" class="form-control input-md" value="<?php echo $person['birthPlace'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Nationality</label>
										<input type="text" class="form-control input-md" value="<?php echo $person['nationality'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Date Of Birth (A.D.)</label>
										<input type="date" class="form-control input-md" value="<?php echo $person['dobAD'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Date Of Birth (B.S.)</label>
										<input type="text" class="form-control input-md" value="<?php echo $person['dobBS'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-12 col-md-8 col-lg-12">
								<div class="form-group">
									<label style="margin-right: 15px;">Gender</label>
									<input type="text" class="form-control input-md" value="<?php echo $person['gender'] ?>" disabled="">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-xs-6 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Citizenship No.</label>
									<input type="text" class="form-control input-md" value="<?php echo $person['citizenship'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Citizenship Date of Issue (B.S)</label>
									<input type="text" class="form-control input-md" value="<?php echo $person['citizenshipIssueDate'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Place of Issue for Citizenship</label>
									<input type="text" class="form-control input-md" value="<?php echo $person['citizenshipIssuePlace'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Passport Number</label>
									<input type="text" class="form-control input-md"  value="<?php echo $person['passportNum'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Date of Issue (A.D) for Old Passport Number</label>
									<input type="date" class="form-control input-md"  value="<?php echo $person['passportIssueDate'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Place of Issue for Passport</label>
									<input type="text" class="form-control input-md" value="<?php echo $person['passportIssuePlace'] ?>" disabled="">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>District</label>
		                            <input type="text" class="form-control input-md"  value="<?php echo $person['district'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Municipality/VDC</label>
		                            <input type="text" class="form-control  input-md"  value="<?php echo $person['municipality'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Ward</label>
		                            <input type="text" class="form-control  input-md" value="<?php echo $person['ward'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Town/Village</label>
		                            <input type="text" class="form-control input-md"  value="<?php echo $person['townVillage'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>House Number</label>
		                            <input type="text" class="form-control input-md"  value="<?php echo $person['houseNumber'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Email</label>
		                            <input type="email" class="form-control input-md" value="<?php echo $person['email'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Phone Number</label>
		                            <input type="number" class="form-control input-md"  value="<?php echo $person['phNumber'] ?>" disabled="">
		                        </div>
                			</div>
                			<div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Landline Number</label>
		                            <input type="number" class="form-control input-md"  value="<?php echo $person['landline'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Occupation</label>
		                            <input type="text" class="form-control input-md" value="<?php echo $person['occupation'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Annual Income</label>
		                            <input type="number" class="form-control input-md"  value="<?php echo $person['annualIncome'] ?>" disabled="">
		                        </div>
		                    </div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Family Information </legend>
						<div class="form-row">
							<div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Father Name</label>
		                            <input type="text" class="form-control input-md"  value="<?php echo $person['fatherName'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Occupation</label>
		                            <input type="text" class="form-control input-md" value="<?php echo $person['fatherOccupation'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Phone Number</label>
		                            <input type="number" class="form-control input-md"  value="<?php echo $person['fatherPhNumber'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Mother Name</label>
		                            <input type="text" class="form-control input-md"  value="<?php echo $person['motherName'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Occupation</label>
		                            <input type="text" class="form-control input-md" value="<?php echo $person['motherOccupation'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Phone Number</label>
		                            <input type="number" class="form-control input-md"  value="<?php echo $person['motherPhNumber'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>GrandFather Name</label>
		                            <input type="text" class="form-control input-md"  value="<?php echo $person['grandFatherName'] ?>" disabled="">
		                        </div>
		                    </div>
		                    <div class="col-xs-6 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>GrandMother Name</label>
		                            <input type="text" class="form-control input-md"  value="<?php echo $person['grandMotherName'] ?>" disabled="">
		                        </div>
		                    </div>
						</div>
					</fieldset>
					<div class="row">
						<button class="btn btn-success btn-lg center-block" onclick="window.print()"> Print </button>
					</div>	
				</form>
			</div>
		</div>

		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/js/main.js"></script>
	</body>
</html>