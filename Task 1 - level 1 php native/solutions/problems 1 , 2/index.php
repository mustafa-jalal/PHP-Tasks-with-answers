<?php
echo "<b>output of Problem 1 </b><br>";
// My solution for problem 1
 $mus=(array('1','2','3','4','5','6','7','8','9'));
 $size = count($mus);
	for($i=0;$i<9;$i++){
		echo $mus[$i]." and my type is ".gettype($mus[$i])."<br>";
		$mus[$i] = intval($mus[$i]);
		echo $mus[$i]." Now I'm ".gettype($mus[$i])."<br>";
	 echo "<hr>";
	}
	
// Example 2 
	echo "<b>----Output of Example 2 ---- </b><br>";
	
	 //an salaries array with string values
	$salaries = array('A'=>'2000','B'=>'3350');
	
	 //type casting
	for($i='A';$i<'C';$i++)
	    $salaries[$i]=intval($salaries[$i]);
	
     // printing the integer values	
foreach($salaries as $key => $values)
echo $key.'=>'.$values." ".gettype($values).'<br>';	

//problem 2 (max ,min and average)
	echo "<b>output of Problem 2 </b><br>";
	echo "Max is ".max($mus)."<br>".
	     "Min is ".min($mus)."<br>".
		 "The middle is ".$mus[count($mus)/2];

?>