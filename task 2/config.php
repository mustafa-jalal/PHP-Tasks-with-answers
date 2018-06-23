<?php
define("server_name","localhost"); 
define("username","id4758025_root"); 
define("password","mustafa8750"); 
$conn = mysqli_connect(server_name,username,password);
$db = mysqli_select_db($conn,"id4758025_students");
$sel = mysqli_query($conn,"select * from students");





?> 