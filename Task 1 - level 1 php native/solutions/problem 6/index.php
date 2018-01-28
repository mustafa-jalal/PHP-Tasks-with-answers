<?php
    $p = 1.00000; 
 	$a = 0.00000;  
 	$e = 2.00000; 
 	$x = 7.00000; 
    $c= 9.99100; 
    $f = 11.99100; 
 
   echo  round($p+$a+$e+$x+$c+$f);

	echo "
	<br>
in the above code in fact we don't need for all of those variables
 just this variable \$c is OK to get the result	;
 <br><br>
  the new code :
	";
	$c= 9.99100; 
   echo round($c);

?>