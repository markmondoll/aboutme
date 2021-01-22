<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>image upload</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!--Registration Section-->		
<section id="registration">
	<div class="registration container">
		<div class="registration-top">
			<h1 class="registration-title">Registration</h1>
			<!--Registration Table-->		
			<form action="" onsubmit="return true" method="POST" enctype="multipart/form-data">
				<table class="table">
				<tr>
					<th colspan="3"><h1>Please write the details information</h1></th>
				</tr>
					<tr>
						<td>Employee Name:</td>
						<td colspan="2">
							<input class="form-control" type="text" id="employeename"  placeholder="Employee Name" required name="employeename">
						</td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td colspan="2"><input class="form-control" type="gender" id="gender" placeholder="Employee Gender" name="gender"></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td colspan="2"><input class="form-control" type="text" id="phone" placeholder="017-xxxxxxxx or 018-xxxxxxxx" name="phone"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td colspan="2"><input class="form-control" type="" id="email1"  placeholder="Employee Email" name="email"></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td colspan="2"><input class="form-control" type="" id="address" placeholder="Employee Address" name="address"></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td colspan="2"><input class="form-control" type="" id="username"  placeholder="Employee Username" name="username"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td colspan="2"><input class="form-control" type="" id="password"  placeholder="Employee Password" name="password"></td>
					</tr>
					<tr>
						<td>Photo:</td>
						<td colspan="2"><input class="form-control" type="file" id="photo"  placeholder="Upload your passport size photo" name="photo"></td>
					</tr>
					<tr>
						<td>Document:</td>
						<td colspan="2"><input class="form-control" type="file" id="document"  placeholder="Upload your other document" name="document"></td>
					</tr>
					<tr>
						<td colspan="3" style="text-align:center"><input type="submit" value="Save" id="sub-btn" name="registration-submit"></td>
					</tr>
				</table>
			</form>
	<div>
		<img src="<?php echo $photo_path ?>" alt="$photo">
	</div>
	<div>
		<img src="iimages/<?php echo $photo?>" alt="$photo">
	</div>
			<!--End Registration Table-->		

		</div>
		<div class="registration-bottom"></div>
	</div> 
</section>


<!-- New Code from Teacher -->

<?php 
include "config.php";
if (isset($_POST['registration-submit'])) {
	$employeename=$_POST['employeename'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$username=$_POST['username'];
	$password=$_POST['password'];	
	//$photo=$_FILES;
	$photo=$_FILES['photo']['name'];
	$tmp_name=$_FILES['photo']['tmp_name'];
	$size=$_FILES['photo']['size'];
	echo $employeename."<br>";
	echo $photo."<br>";
	$imgExplode=explode('.', $photo);
	$imgExt=end($imgExplode);
	echo $imgExt."<br>";
	echo $size."<br>";
	$imag_path="images/".$photo;
	$valid_status=false;
	if($size<=1000241318&&($imgExt=="PNG"||$imgExt=="png"||$imgExt=="JPG")){
		$valid_status=true;
		echo "Valid Image";
		move_uploaded_file($tmp_name, "images/$photo");
		$query="INSERT INTO employee (employeename,photo) values(
		'$employeename','$imag_path')";
		$result=mysqli_query($conn, $query);
		if($result){
			echo "Image Insert DB Success";
		}else{
			echo "Image Insert DB Failed";
		}
	}else{
		$valid_status=false;
		echo "Image Size is TOO large";
	}
}
?>

<!-- End of New Code from Teacher -->
<!--Employee Section-->		
<section id="employee">
	<div class="employee container">
		<div class="employee-top">
			<h1 class="employee-title">Employee List</h1>
		</div>
<!--Employee Table-->		
		<div>
		<table class="table">
			<thead class="thead-dark">
				<tr class="bg-primary">
					<th colspan="9"><h1>Emoloyee Details</h1></th>
				</tr>
				<tr>
					<th>ID</th>
					<th>Employee Name</th>
					<th>Gender</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Address</th>
					<th>Username</th>
					<th>Photo Location</th>
					<th>Document Location</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				if($conn){
					$a="SELECT id,employeename,gender,phone,email,address,username,photo,document FROM `employee`";
					$x=mysqli_query($conn, $a);
					if (mysqli_num_rows($x) > 0) { 
						while ($row=mysqli_fetch_assoc($x)) {?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['employeename']; ?></td>
								<td><?php echo $row['gender']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['photo']; ?></td>
								<td><?php echo $row['document']; ?></td>
							</tr>
							<?php
						}
					}
				}
				?>
			</tbody>
		</table>
<!-- End Employee Table-->		
		<img src="<?php echo $imag_path ?>" alt="">

		</div>
		<div class="employee-bottom"></div>
	</div> 
</section>
<!--End Employee Section-->		

</body>
</html>