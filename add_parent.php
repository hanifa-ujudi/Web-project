<?php
	session_start();
?>

<html>
<head>
<title>Parent</title>
<link rel="stylesheet" href="css/mycss.css" >
<link rel="stylesheet" href="css/bootstrap.min.css" >
</head>

<body>
<div class="container">

<div class="row">
<div class="col-md-12" style="border:none; height:60px; background:#ffa500;">
heading
</div>
</div>

<div class="row">
<div class="col-md-2" style="border:1px solid; height:560px; padding-top:1px; padding-left:0px; background:#dddddd;">

<?php
    include("menu.php");
?>

</div>
<div class="col-md-10" style="border:1px solid; height:560px;">

<div class="row" style="margin-top:30px;">
<div class="col-md-2"></div>
<div class="col-md-8" style="border:1px solid; border-radius:20px; height:300px; background:#dddddd">
<h3 align="center">Add Parent</h3>
<form action="add_teacher_handler.php" method="post">
<div class="row" style="margin-top:10px;">
<div class="col-md-6">
    <input type="text" name="name" placeholder="Full Name" class="form-control" required>

</div>

<div class="col-md-6">
    <input type="text" name="address" placeholder="Address" class="form-control" required>

</div>

</div>

<div class="row" style="margin-top:10px;">
<div class="col-md-6">
<select  name="gender"  class="form-control">
        <option hidden>Gender</option>
        <option >Male</option>
        <option >Female</option>
</select>

</div>

<div class="col-md-6">
    <input type="email" name="email" placeholder="Email" class="form-control" required>

</div>

</div>

<div class="row" style="margin-top:10px;">
<div class="col-md-6">
    <input type="number" name="nphoneame" placeholder="Phone" class="form-control" required>

</div>

<div class="col-md-6">
<input type="text" name="user" placeholder="Username" class="form-control" required>


</div>

</div>

<div class="row" style="margin-top:10px;">
<div class="col-md-6">
    <input type="password" name="pass" placeholder="Password" class="form-control" required>

</div>

<div class="col-md-6">
    <input type="password" name="ncpassame" placeholder="Confirm Password" class="form-control" required>

</div>

</div>
<div class="row" style="margin-top:10px;">
<div class="col-md-6">
<center> <input type="submit" value="Add Parent" class="btn btn-primary" required></center>

</div>

<div class="col-md-6">
<center><input type="reset" value="clear" class="btn btn-danger" required></center>

</div>

</div>

</form>
</div>

<div class="col-md-2"></div>

</div>

</div>

</div>

<div class="row">
<div class="col-md-12" style="border:none; height:30px; background:#ffa500;">
heading
</div>
</div>

</div>

</body>
</html>