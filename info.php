<?php 
	if (isset($_GET['id'])) {
		require 'model/query.php';
		require 'connectDB/db.php';
		require 'function/generateTableFunction.php';
		$obj = new Query($pdo, 'person');
		$person = $obj->findData('id', $_GET['id'])->fetch();
	}
?>
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
					<fieldset>
						<legend>Personal Infomation </legend>
						<div class="form-row">
							
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control input-md" placeholder="First Name" required="" name="fname" value="<?php if (isset($_GET['id'])){
											echo $person['fname'];
										} ?>">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Middle Name</label>
										<input type="text" class="form-control input-md" placeholder="Middle Name" name="mname" value="<?php if (isset($_GET['id'])){
											echo $person['mname'];
										} ?>">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>SurName</label>
										<input type="text" class="form-control input-md" placeholder="Surname" required="" name="lname" value="<?php if (isset($_GET['id'])){
											echo $person['lname'];
										} ?>">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Place Of Birth</label>
										<select class="form-control" name="birthPlace">
											<?php 
												if (isset($_GET['id'])) {
													echo '<option value="'.$person['birthPlace'].'">'.$person['birthPlace'].'</option>';
												}
											?>
											<option value="Kathmandu">Kathmandu</option>
											<option value="Bhaktapur">Bhaktapur</option>
											<option value="Lalitpur">Lalitpur</option>
										</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Nationality</label>
										<input type="text" class="form-control input-md" placeholder="Nationality" required="" name="nationality" value="<?php if (isset($_GET['id'])){
											echo $person['nationality'];
										} ?>">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Date Of Birth (A.D.)</label>
										<input type="date" class="form-control input-md" name="dobAD" value="<?php if (isset($_GET['id'])){
											echo $person['dobAD'];
										} ?>">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Date Of Birth (B.S.)</label>
										<input type="text" class="form-control input-md" placeholder="yyyy-mm-dd" required="" name="dobBS" value="<?php if (isset($_GET['id'])){
											echo $person['dobBS'];
										} ?>">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Level</label>
										<input type="text" class="form-control input-md" placeholder="Level" required="" name="level" value="<?php if (isset($_GET['id'])){
											echo $person['level'];
										} ?>">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
								<div class="form-group">
									<label style="margin-right: 15px;">Gender</label>
									<label class="radio-inline" for="radios-0">
										<input type="radio" name="gender" id="radios-0" value="Male" <?php if (isset($_GET['id'])){
											echo $person['gender']=='Male'?'checked':'';
										} ?>>
										Male
									</label> 
									<label class="radio-inline" for="radios-1">
										<input type="radio" name="gender" id="radios-1" value="Female" <?php if (isset($_GET['id'])){
											echo $person['gender']=='Female'?'checked':'';
										} ?>>
										Female
									</label> 
									<label class="radio-inline" for="radios-2">
										<input type="radio" name="gender" id="radios-2" value="Others" <?php if (isset($_GET['id'])){
											echo $person['gender']=='Others'?'checked':'';
										} ?>>
										Others
									</label> 
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Citizenship No.</label>
									<input type="text" class="form-control input-md" placeholder="Citizenship Number" required="" name="citizenship" value="<?php if (isset($_GET['id'])){
											echo $person['citizenship'];
										} ?>">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Citizenship Date of Issue (B.S)</label>
									<input type="text" class="form-control input-md" placeholder="yyyy-mm-dd" required="" name="citizenshipIssueDate" value="<?php if (isset($_GET['id'])){
											echo $person['citizenshipIssueDate'];
										} ?>">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Place of Issue for Citizenship</label>
									<select class="form-control input-md" name="citizenshipIssuePlace">
										<?php 
											if (isset($_GET['id'])) {
												echo '<option value="'.$person['citizenshipIssuePlace'].'">'.$person['citizenshipIssuePlace'].'</option>';
											}
										?>
										<option value="Kathmandu">Kathmandu</option>
										<option value="Bhaktapur">Bhaktapur</option>
										<option value="Lalitpur">Lalitpur</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>District</label>
		                            <select class="form-control" name="district">
		                            	<?php 
											if (isset($_GET['id'])) {
												echo '<option value="'.$person['district'].'">'.$person['district'].'</option>';
											}
										?>
		                                <option value="Kathmandu">Kathmandu</option>
		                                <option value="Bhaktapur">Bhaktapur</option>
		                                <option value="Lalitpur">Lalitpur</option>
		                            </select>
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Municipality/VDC</label>
		                            <input type="text" class="form-control  input-md" placeholder="Municipality/VDC" required="" name="municipality" value="<?php if (isset($_GET['id'])){
											echo $person['municipality'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Ward</label>
		                            <input type="text" class="form-control  input-md" placeholder="Ward" required="" name="ward" value="<?php if (isset($_GET['id'])){
											echo $person['ward'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Town/Village</label>
		                            <input type="text" class="form-control input-md" placeholder="Town/Village" required="" name="townVillage" value="<?php if (isset($_GET['id'])){
											echo $person['townVillage'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>House Number</label>
		                            <input type="text" class="form-control input-md" placeholder="House Number" maxlength="5" required="" name="houseNumber" value="<?php if (isset($_GET['id'])){
											echo $person['houseNumber'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Email</label>
		                            <input type="email" class="form-control input-md" placeholder="Email" name="email" value="<?php if (isset($_GET['id'])){
											echo $person['email'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Phone Number</label>
		                            <input type="text" class="form-control input-md" placeholder="Phone Number" maxlength="15" name="phNumber" value="<?php if (isset($_GET['id'])){
											echo $person['phNumber'];
										} ?>">
		                        </div>
                			</div>
                			<div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Landline Number</label>
		                            <input type="number" class="form-control input-md" placeholder="Phone Number" maxlength="10" name="landline" value="<?php if (isset($_GET['id'])){
											echo $person['landline'];
										} ?>">
		                        </div>
		                    </div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Family Information </legend>
						<div class="form-row">
							<div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Father Name</label>
		                            <input type="text" class="form-control input-md" placeholder="Father Name" required="" name="fatherName" value="<?php if (isset($_GET['id'])){
											echo $person['fatherName'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Occupation</label>
		                            <input type="text" class="form-control input-md" placeholder="Occupation" required="" name="fatherOccupation" value="<?php if (isset($_GET['id'])){
											echo $person['fatherOccupation'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Phone Number</label>
		                            <input type="text" class="form-control input-md" placeholder="Phone Number" maxlength="15" name="fatherPhNumber" value="<?php if (isset($_GET['id'])){
											echo $person['fatherPhNumber'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Mother Name</label>
		                            <input type="text" class="form-control input-md" placeholder="Mother Name" required="" name="motherName" value="<?php if (isset($_GET['id'])){
											echo $person['motherName'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Occupation</label>
		                            <input type="text" class="form-control input-md" placeholder="Occupation" required="" name="motherOccupation" value="<?php if (isset($_GET['id'])){
											echo $person['motherOccupation'];
										} ?>">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Phone Number</label>
		                            <input type="text" class="form-control input-md" placeholder="Phone Number" maxlength="15" name="motherPhNumber" value="<?php if (isset($_GET['id'])){
											echo $person['motherPhNumber'];
										} ?>">
		                        </div>
		                    </div>
		                    <?php 
								if (isset($_GET['id']))
								{
									?>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $person['id']?>">
	</div>
</div>
									<?php
								}
							?>
		                    <div class="file-upload col-lg-12 col-md-12 col-sm-12 col-xs-12">
							  	<label>Select Image To Upload</label>
								
								<?php if (isset($_GET['id'])){
									echo '<input type="file" name="image">';
									echo '<img src="'.$person['image'].'">';
								} 
								else{
									echo '<input type="file" name="image" required>';
								}
								?>
							</div>	
						</div>
					</fieldset>	
					<?php 
						if (isset($_GET['id'])) {
							echo '<input type="submit" name="update" value="Update" class="btn btn-primary center-block" >';
						}
						else{
							echo '<input type="submit" name="submit" value="Submit" class="btn btn-primary center-block" >';
						}
					?>
				</form>
			</div>
		</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>