<html dir='rtl'>
<head>
<title>Calculator</title>
<style>
.input{
	height:30px;
	margin-top:5;
	border:1px solid #f77;
	width:350px;
}
#content{
	width:50%;
	border-radius:10px;
	margin:auto;
	padding:5px;
	background:#f99;
}
.sub{
	background:#fff;
	border: 1px solid #f99;
	height:30px;
	width:20%;
}
.sub:hover{
	background:#eee;
	color:#000;
}
</style>
</head>
<body>
<div id='content'>
<center>
<form action='index.php' method='post'>
الرقم الاول    <input type='text' name='num1' class='input'/> <br>
الرقم الثانى  <input type='text' name='num2' class='input'/> <br>
<label>العملية</label>        
 <select class='input' name='clc'>
 <option>جمع</option>
 <option>طرح</option>
 <option>ضرب</option>
 <option>قسمة</option>
 </select><br>
 <input type='submit' class='sub' name='submit' value='احسب'/>
 </form>
</center>
</div>
</body>
</html>
<?php
$num1 = $_POST['num1'];
$num2= $_POST['num2'];
$clc= $_POST['clc'];
$sub = $_POST['submit'];
$res;
if($sub){
	if(!empty($num1)&&!empty($num2)){
		switch($clc){
			case "جمع":
			 $res = $num1+$num2;
			break;
			case "طرح":
			 $res = $num1-$num2;
			break;
			case "قسمة":
			 $res = $num1/$num2;
			break;
			case "ضرب":
			 $res = $num1*$num2;
			break;
		}
		echo "<div style='padding:5;border:2px solid;width:auto;margin:auto;'>$res</div>";
			
}
else echo "ادخل الرقمين اولا";
}
?>