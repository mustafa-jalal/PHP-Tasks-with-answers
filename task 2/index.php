<?php
require "config.php";
?>
<html dir='rtl'>
<head>
<title>قاعدة بيانات طلاب</title>
<style>
#tbl{
	background:#777;
	margin:auto;
	border-radius:8px;
	width:70%;
	font-size:30px;
}
#sf{
	
	background:#d00;
	color:#fff;
}
.txt{
	height:30px;
	background:#fff;
	width:100%;
}
#sb{
	background:#a00;
	color:#fff;
}
#ft{
	margin:auto;
	background:#777;
	width:30%;
	border-radius:10px;
}
#num{
		margin:auto;
	background:#d00;
	width:30%;
	border-radius:10px;

}
#add{
    background:#d00;
    width:8%;
    text-align:center;
    padding:3px;
    border:1px solid #777;
    border-radius:10px;

}
    #add a {
        text-decoration:none;
        color:#fff;
        
        
}

</style>
</head> 
<body>
    <div id='add'><a href='edit.php?add=new'> اضافة طالب </a></div>
<table id='tbl'>
<tr id='sf'>
<td>#</td>
<td>اسم الطالب</td>
<td>الدرجة</td>
<td>النسبة المئوية</td>
</tr>
<?php
$sub = $_POST['sub'];
$from = $_POST['from'];
$to = $_POST['to'];
if($_GET['del']){
$m = $_GET['del'];
mysqli_query($conn,"delete from students where id =$m");
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
if ($sub){
	$from = ($from/100)*300;
	$to = ($to/100)*300;
	$sel2 = mysqli_query($conn,"SELECT * FROM students WHERE mark BETWEEN $from AND $to");
	while($stu_array = mysqli_fetch_array($sel2)){
	 echo "<tr>
	 <td id='sb'>".$stu_array['id']."</td>
	 <td>".$stu_array['name']."</td>
	 <td>".$stu_array['mark']."</td>
	 <td style='color:#fff;'>".ceil(($stu_array['mark']*100)/300)."%</td>
	 <td><a href='edit.php?id=".$stu_array['id']."'>تعديل</td>
	 <td><a href='index.php?del=".$stu_array['id']."'>حذف</td>

	 </tr>";
} 


}else{
while($stu_array = mysqli_fetch_array($sel)){
	 echo "<tr>
	 <td id='sb'>".$stu_array['id']."</td>
	 <td>".$stu_array['name']."</td>
	 <td>".$stu_array['mark']."</td>
	 <td style='color:#fff;'>".ceil(($stu_array['mark']*100)/300)."%</td>
	 <td><a href='edit.php?id=".$stu_array['id']."'>تعديل</td>
	 <td><a href='index.php?del=".$stu_array['id']."'>حذف</td>

	 </tr>";
} 

}
?>
</table>
<form method='post' action='index.php'>
<div id='ft'>
من :
<select name='from'>
<option value='0'>0%</option>
<option value='10'>10%</option>
<option value='30'>30%</option>
<option value='60'>60%</option>
<option value='80'>80%</option>
<option value='100'>100%</option>
</select>
الى:
<select name='to'>
<option>0%</option>
<option>10%</option>
<option>30%</option>
<option>60%</option>
<option>80%</option>
<option>100%</option>
</select>
<input type='submit' id='submit' name='sub' value='عرض'>
</div>
<div id='num'>
<?php 
echo "اجمالى عدد الطلاب : ".mysqli_num_rows($sel)."<br>";
$result = mysqli_query($conn,"select sum(mark) as value_sum from students"); 
$result = mysqli_fetch_array($result); 
echo "اجمالى عدد الدرجات : ".$result['value_sum'];

?>
</div>
</form>
</body>
</html> 

