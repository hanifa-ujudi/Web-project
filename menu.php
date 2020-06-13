<?php
session_start();
?>

<?php
if($_SESSION['role'] == "admin"){
?>
<div class="dropdown">
  <a href="home.php"><button class="dropbtn">Home</button></a>
 
</div>

<div class="dropdown">
  <button class="dropbtn">My Profile</button>
 
</div>

<div class="dropdown">
  <button class="dropbtn">Manage Teacher</button>
  <div class="dropdown-content">
  <a href="add_teacher.php">Add Teacher</a>
    <a href="#">View Teachers</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Manage Parent</button>
  <div class="dropdown-content">
  <a href="add_parent.php">Add Parent</a>
    <a href="#">View TeParentsacher</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Manage Subject</button>
  <div class="dropdown-content">
  <a href="add_student.php">Add Subject</a>
    <a href="#">View Subjects</a>
  </div>
</div>


<div class="dropdown">
  <button class="dropbtn">Manage Student</button>
  <div class="dropdown-content">
  <a href="add_student.php">Add Student</a>
    <a href="#">View Students</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Student Result</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>  
    <a href="#">Link 3</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Logout</button>
 
</div>

<?php
}else{
?>

<div class="dropdown">
  <button class="dropbtn">Home</button>
 
</div>

<div class="dropdown">
  <button class="dropbtn">My Profile</button>
 
</div>




<div class="dropdown">
  <button class="dropbtn">Student Result</button>
  <div class="dropdown-content">
    <a href="#">Add Teacher</a>
    <a href="#">View Teacher</a>  
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">View Subject</button>
 
</div>

<div class="dropdown">
  <button class="dropbtn">View Student</button>
 
</div>

<div class="dropdown">
  <button class="dropbtn">Logout</button>
 
</div>
<?php
}
?>