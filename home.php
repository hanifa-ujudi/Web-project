<?php
	session_start();
?>

<html>
<head>
<title>Home</title>
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

<?php
echo "welcome ".$_SESSION['user']."<br/> you login as ".$_SESSION['role'];

?>

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