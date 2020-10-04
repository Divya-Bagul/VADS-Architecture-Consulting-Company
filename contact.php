<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Comptible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/wt.css">

	<title>
		Contact
	</title>
</head>
<body>


 <div  class="container-fluid">
	<div class="row">
		<img src="image/c2.jpg" class="img"  alt="Responsive image">
	</div>
</div> 

<center><h2  id="contact" style="padding-top: 2%; color: #451f55;"> Get In Touch</h2></center>
	<hr width="50%"style="border:2px solid grey;	">

		
<div></div>
<div  class="container-fluid">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-4 ">
<form style=" padding-top: 4vh;" method="POST" action="contactform.php" >
		
		<div class="form-group">
		<b><label for="formGroupExampleInput">Name</label></b>
		<input type="text"  name="username" class="form-control inputbtn "  placeholder="Enter Name" required>
		</div>
		
		
		<div class="form-group">
		<b><label for="exampleInputEmail1">Email address</label></b>
		<input type="email" name="email" class="form-control inputbtn" placeholder="Enter Email" aria-describedby="emailHelp" required>
		
		</div>
		<div class="form-group">
		<b><label for="formGroupExampleInput">Subject</label></b>
		<input type="text"  name="subject" class="form-control inputbtn "  placeholder="Enter Name" required>
		</div>

		<div class="form-group">
		<b><label for="exampleFormControlTextarea1">Meassge</label></b>
		<textarea class="form-control inputbtn " name="message" placeholder="Write Your Meassge here...."  rows="3" required></textarea>
		</div>
		<button type="submit"  name="submit" class="btn btncontact">Submit</button>
		</form>

		</div>
	

<div class="col-sm-6">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361414.263400003!2d-113.75849480805297!3d36.24080384347216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1601802788724!5m2!1sen!2sin" width="430" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


<div>
	<p  style=" padding-top: 2;">
		
		<!--<p>We’re an energetic, flexible, and<br>
		open-minded team ready to work<br>
		hard for our clients.<br>-->
		If you’re interested in working<br>
		 with us,<br>
  	   	please send us a message!<br>  
 	
		Or give us a call...(612) 615-0060!<br>
​
		4931 West 35th Street<br>
		Suite 200<br>
		St. Louis Park, Minnesota 55416<br>
	</p>
		
		</p>
</div>
</div>
</div>
</div>

<br>

</body>

</html>
<?php include 'footer.php' ?>