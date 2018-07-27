<?php 
	require 'model/query.php';
	require 'connectDB/db.php';
	require 'function/generateTableFunction.php';
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
		<title>Nepal Municipality</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/styles.css" media="print">
	</head>
	<body>
		<div class="container">
			<nav class="navbar">
				<img src="assets/img/img.jpg" style="float: left;">
				<img src="assets/img/nepal.gif" style="float: right;" width="120px" height="100px">
			</nav>
			<div id="print-content">
				<form>
					<table class="table">
						<tbody>
							<tr>
								<td><label>First Name</label></td>
								<td><input name="First Name" maxlength="255" type="text" /></td>
							</tr>
							<tr>
								<td><label>Last Name</label></td>
								<td><input name="Last Name" maxlength="255" type="text" /></td>
							</tr>
							<tr>
								<td><label>Street Address</label></td>
								<td><input name="Street Address" maxlength="255" type="text" /></td>
							</tr>
							<tr>
								<td><label>City</label></td>
								<td><input name="City" maxlength="255" type="text" /></td>
							</tr>
							<tr>
								<td><label>State</label></td>
								<td><input name="State" maxlength="255" type="text" /></td>
							</tr>
							<tr>
								<td><label>Zip Code</label></td>
								<td><input name="Zip Code" maxlength="255" type="text" /></td>
							</tr>
							<tr>
								<td><label>Phone Number</label></td>
								<td><input name="Phone Number" maxlength="255" type="text" /></td>
							</tr>
							<tr>
								<td><label>E-Mail Address</label></td>
								<td><input name="Email Address" maxlength="255" type="text" /></td>
							</tr>
							<tr>
								<td colspan="2"><label>Description of item(s) to be serviced</label><br /><textarea name="Items" type="text"></textarea></td>
							</tr>
							<tr>
								<td colspan="2"><label>Description of Problem(s)</label><br /><textarea name="Problems" type="text"></textarea></td>
							</tr>
							<tr>
								<td colspan="2"><label>Any Special Notes</label><br /><textarea name="Notes type=" text=""></textarea></td>
							</tr>
						</tbody>
					</table>
					<input type="button" onclick="printDiv('print-table')" value="print a div!" />
				</form>
			</div>
		</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script>
			function printDiv(divName) {
			//alert('s');
				var printContents = '<div id="print-content"><form><table width="50%"><tbody>';
				var inputs, index;
				inputs = document.getElementsByTagName('input');
				for (index = 0; index < inputs.length - 1; ++index) {

					var fieldName = inputs[index].name;
					var fieldValue = inputs[index].value;
					printContents +='<tr><td><label>'+fieldName+'</label></td>';
					printContents +='<td>'+fieldValue+'</td></tr>';
				}
				var z = 8; // if you had more labels remeber to change this value 
				inputs = document.getElementsByTagName('textarea');
				for (index = 0; index < inputs.length; ++index) {
					//var fieldName = inputs[index].name;
					var fieldName = document.getElementsByTagName('label')[z].textContent;
					var fieldValue = inputs[index].value;

					printContents +='<tr><td colspan="2"><label>'+fieldName+'</label><br>'+fieldValue+'</td></tr>';
					++z;
				}
				printContents +='</tbody></table>';
				w=window.open();
				w.document.write(printContents);
				w.print();
				w.close();
			}
		</script>
	</body>
</html>