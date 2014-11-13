<?php   
require('koneksi.php');

	$time1 = strtotime('waktu');
	$time2 = time(now);
	$diff = $time2 - $time1;
	echo 'Time 1: '.date('H:i:s', $time1).'<br>';
	echo 'Time 2: '.date('H:i:s', $time2).'<br>';

if($diff){
    echo 'Diff: '.date('H:i:s', $diff);
}else{
    echo 'No Diff.';
} 
  
  
//menghitung subtotal  
  
  
?>