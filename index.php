<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Landing Page</title>
<!--Bootstrap Section->		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-End Bootstrap Section-->	

<!--Stylesheet Section-->		
	<link rel="stylesheet" href="css/style.css">
<!--End of Stylesheet Section-->		
</head>
<body>
<!--Header Section-->		
<section id="header">
	<div class="header container">
		<div class="nav-bar">
		<!--Logo/Brand Section-->		
			<div class="brand">
				<a href="#hero"><h1><span>N</span>et<span>W</span>eb <span>C</span>omputers</h1></a>
			</div>
		<!--End Logo Section-->	

		<!--Menu Section-->			
			<div class="nav-list">
				<div class="hamburger"><div class="bar"></div></div>
					<ul>
						<li><a href="#hero" data-after="Home">Home</a></li>
						<li><a href="#registration" data-after="Registration">Registration</a></li>
						<li><a href="#employee" data-after="Employee">Employee List</a></li>
						<li><a href="#services" data-after="Services">Services</a></li>
						<li><a href="#about" data-after="About Me">About Me</a></li>						
						<li><a href="#contact" data-after="Contact Us">Contact Us</a></li>
					</ul>
			</div>
		<!--End Menu Section-->			
		</div>
	</div>
</section>
<!--End Header Section-->		

<!--Hero Section-->		
<section id=hero>
	<div class="hero container">
		<div>
			<h1>Hello,</h1>
			<h1>My Name is </h1>
			<h1>Mark Mondoll</h1>
			<a href="#projects" type="button" class="cta">Portfolio</a>
		</div>
	</div>
</section>
<!--End Hero Section-->		


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

<!--PHP Code for Registration Section-->		
<?php 
if(isset($_POST['registration-submit'])){
	$employeename=$_POST['employeename'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$photo=$_FILES['photo']['name'];
	$photo_link=$_FILES['photo']['tmp_name'];
	$photo_size=$_FILES['photo']['size'];
	$photo_path="images/".$photo;
	$imgExplode=explode('.', $photo);
	$imgExt=end($imgExplode);
	$document=$_FILES['document']['name'];
	$document_link=$_FILES['document']['tmp_name'];
	$document_size=$_FILES['document']['size'];
	$document_path="images/".$document;


	if ($photo_size<=300240&&($imgExt=="PNG"||$imgExt=="png"||$imgExt=="JPG"||$imgExt=="jpg")) {
			$valid_status=true;
			echo "Valid Image <br>";
			move_uploaded_file($photo_link, "images/$photo");
		
	}else{
		$valid_status=false;
		echo "Image size is too large";
	}

		if ($document_size<300240) {
			$valid_status=true;
			echo "Valid Image <br>";
			move_uploaded_file($document_link, "document/$document");
	}else{
		echo "Document size is too large";
	}

}else{
	echo "Form Submit Failed";
}
?>
<!--End PHP Code for Registration Section-->		

<!--End Registration Section-->			

<!--Login Section-->		

<!--End Login Section-->		

<!--Service Section-->		
<section id="services">
	<div class="services container">
		<div class="services-top">
			<h1 class="services-title">Serv<span>i</span>ces</h1>
			<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
		</div>
		<div class="services-bottom">
			<div class="services-item">
				<div class="icon"><img src="https://img.icons8.com/color/48/000000/service.png"/></div>
				<h2>Web Design</h2>
				<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
			</div>
			<div class="services-item">
				<div class="icon"><img src="https://img.icons8.com/color/48/000000/service.png"/></div>
				<h2>Web Development</h2>
				<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
			</div>
			<div class="services-item">
				<div class="icon"><img src="https://img.icons8.com/color/48/000000/service.png"/></div>
				<h2>WordPress Customization</h2>
				<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
			</div>
			<div class="services-item">
				<div class="icon"><img src="https://img.icons8.com/color/48/000000/service.png"/></div>
				<h2>Web Design</h2>
				<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
			</div>
		</div>
	</div> 
</section>
<!--End Service Section-->	

<!--Projects Section-->		
<section id="projects">
	<div class="projects container">
		<div class="projects-header">
			<h1 class="projects-title">Recent <span>Projects</span></h1>
		</div>
		<div class="projects-bottom">
			<div class="projects-item">
				<div class="prejects-info">
					<h1>Project 1</h1>
					<h2>Code is love</h2>
					<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
				</div>
				<div class="projects-img">
					<img src="../images/p5.jpg" alt="img">
				</div>
			</div>
			<div class="projects-item">
				<div class="prejects-info">
					<h1>Project 2</h1>
					<h2>Code is love</h2>
					<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
				</div>
				<div class="projects-img">
					<img src="../images/p5.jpg" alt="img">
				</div>
			</div>
			<div class="prejects-info">
					<h1>Project 3</h1>
					<h2>Code is love</h2>
					<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
				</div>
				<div class="projects-img">
					<img src="../images/p5.jpg" alt="img">
				</div>
			</div>
			<div class="projects-item">
				<div class="prejects-info">
					<h1>Project 4</h1>
					<h2>Code is love</h2>
					<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
				</div>
				<div class="projects-img">
					<img src="../images/p5.jpg" alt="img">
				</div>
			</div>
			<div class="projects-item">
				<div class="prejects-info">
					<h1>Project 5</h1>
					<h2>Code is love</h2>
					<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
				</div>
				<div class="projects-img">
					<img src="../images/p5.jpg" alt="img">
				</div>
			</div>
		</div>
	</div> 
</section>
<!--End Projects Section-->	

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

		</div>
		<div class="employee-bottom"></div>
	</div> 
</section>
<!--End Employee Section-->		

<!--About Me Section-->		
<section id="about">
	<div class="about container">
		<div class="col-left">
			<div class="about-img">
				<img src="./images/p5.jpg" alt="My Picture">
			</div>
		</div>
		<div class="col-right">
			<h1 class="about-title">About Me</h1>
			<h2>Web Developer</h2>
			<p>WordPress and its plugin are created with PHP and JavaScript, naturally I use my knowledge of these programming languages if you need any specific feature on your website. If you want to change the look or add a design to your WordPress website that is not possible to achieve with a theme I can help you with this using CSS.</p>
			<a href="#" class="cta">Download Resume</a>
		</div>
	</div> 
</section>
<!--End About Me Section-->	

<!--Contact Us Section-->		
<section id="contact">
	<div class="contact container">
		<div class="contact-top">
			<h1 class="contact-title">Contact Us</h1>
		</div>
		<div class="contact-bottom"></div>
	</div> 
</section>
<!--End Contact Us Section-->		

<!--Footer Section-->		

<!--End Footer Section-->		

<!--Copyright Section-->
	<footer class="blockquote-footer bg-dark text-white" style="padding-top: 10px;padding-bottom: 10px;font-size: 15px;text-align: center;">&copy All Rights Reserved by <a href="https://netwebcomputers.com">NetWeb Computers</a></footer>
<!--End Copyright Section-->	

<!-- Script Section -->
<script src="./js/hamburger.js"></script>
<!-- End Script Section -->
</body>
</html>