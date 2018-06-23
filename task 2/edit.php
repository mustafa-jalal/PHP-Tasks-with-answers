<?php
require "config.php";
$id = $_GET['id'];
$sel1 = mysqli_query($conn,"select * from students where id = '$id'");
$sel2 = mysqli_fetch_array($sel1);
if($_GET['u']){
$mark = $_POST['mark'];
$name = $_POST['name'];
$u_id = $_GET['u'];

$sel5 = mysqli_query($conn,"UPDATE students SET name = '$name', mark = '$mark' WHERE students.id = '$u_id'");
if($sel5){echo "تم تحديث بيانات الطالب بنجاح";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}


}
if($_GET['add']){
if ($_GET['add'] == "ins"){
$mark = $_POST['mark'];
$name = $_POST['name'];
$add = mysqli_query($conn,"INSERT INTO `students` (`id`, `name`, `mark`) VALUES (NULL, '$name', '$mark')");
if($add){echo "تم اضافة الطالب";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

}
    
}
    

?>
<html dir='rtl'>
<head>
<title>
تعديل بيانات <?php echo $sel2['name']; ?>
</title>
<style>
.inp{
	height:35px;
	border:1px solid #a00;
	width:100%;
}
span{
	font-size:20px;
}
#content{
	padding:10px;
	background:#ccc;
	border-radius:8px;
}
#submit{
	width:80px;
	height:40px;
	border:1px solid #fff;
	background:#a00;
	color:#fff;
	margin-top:5px;
	
}
</style>
</head>
<body>
   
<div id='content'>
<?php if ($_GET['id']){?>
<form action='edit.php?u=<?php echo $id; ?>' method='post'>
<span>اسم الطالب </span><input type='text' name='name' value='<?php echo $sel2['name'];?>' class='inp'>
<br> 
<span>درجة الطالب </span><input type='text' name='mark' value='<?php echo $sel2['mark'];?>' class='inp'><br>
<input type='submit' name='sub' id='submit' value='تحديث'>
</form>
<?php }
else if($_GET['add'] == "new"){
?>
<form action='edit.php?add=ins' method='post'>
<span>اسم الطالب </span><input type='text' name='name' class='inp'>
<br> 
<span>درجة الطالب </span><input type='text' name='mark' class='inp'><br>
<input type='submit' name='sub' id='submit' value='اضافة الطالب'>
</form>
<?php 
    
}else 

?>
</div>
<a href='index.php'>رجوع</a>
</body>
</html>