<?php
	session_start();
?>

<html>
<head>
<link href="bootstrap.min" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css" >

<style>

.form-group{
	width:490px;
	
}
.jumbotron{
	margin:auto;
	margin-top:70px;
	height:400px;
	width:700px;
	border-radius:15px;
}
#btn{
	float:right;
}
#img{
	border-radius:100px;
	width:280px;
	margin:center;
}
</style>
</head>
<body>
   <div class="container">
	<form action="login_handler.php" method="post">
	
	<div class="jumbotron" style="background-color:#dddddd">
	<div class="form-group" style="margin-left:0px;">
	<center><img src="capture.png" id="img"></center>
	</div>

    <div class="form-group">
		<div class="row">
				<div class="col-3">
				<label for="">Username</label>
				</div>
				<div class="col-9">
				<input type="text" name="user" class="form-control" placeholder="username">
				</div>
		</div>
        <br>
		<div class="form-group">
		<div class="row">
				<div class="col-3">
				<label for="">Password</label>
				</div>
				<div class="col-9">
				<input type="Password" name="pass" class="form-control" placeholder="Password">
				<font color="red">
				<?php
				if(isset($_SESSION['log_error']) && $_SESSION['log_error']=="error"){
					echo "incorrect username or password";
				}
				?>
				</font>
				</div>
		</div>

	</div>
	
	      <div class="form-group" id="btn">
		  
		
		  
		  <button class="btn btn-primary " value="login" name="login"  style="margin-left:40px; width:100px;">login</button> 
			 </div>
			 
			  

	</div>
</div>
</form>
</body>
</html>