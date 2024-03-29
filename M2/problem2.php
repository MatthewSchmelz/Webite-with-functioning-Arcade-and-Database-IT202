<?php
$a1 =[10.001,11.101,0.011,3.991,16.121,8.131,100.231,1.001];
$a2 =[1.99,1.99, 0.99, 1.973, 0.99,1.91, 0.91, 0.99];
$a3 =[0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 01.01];
$a4 =[10.01, -12.22, 0.23, 29.20, -5.13, 2.12];
function getTotal($arr) {
	//Matthew Schmelz, mws36, October 4, 2022
	//Whats happening here is that I am looping though the list, adding the new
	//amount to the $total variable. At the end I shave off the decimals by using
	//the number_format command which also completes the extra credit.
    //use the $arr variable to iterate over
    echo "<br>Processing Array: <br> <pre>". var_export($arr, True) . "</pre>";
    $total = 0.00;
    //TODO do adding here
	for($x=0;$x<count($arr);$x++){
		$total = $total + $arr[$x];
	}
    //TODO do rounding stuff here. 
	//TODO Extra Credit: show 2 point precision even if last number is a 0
	$total = number_format($total,2);
    echo "<br>The total is ".var_export($total, true);
 }

?>
<h2> Problem 2: Sum the values and display the total</h2>
<table>
<thead>
	<th>A1</th>
	<th>A2</th>
	<th>A3</th>
	<th>A4</th>
</thead>
<tbody>
	<tr>
		<td>
			<?php getTotal($a1); ?>
		</td>
		<td>
			<?php getTotal($a2); ?>
		</td>
		<td>
			<?php getTotal($a3); ?>
		</td>
		<td>
			<?php getTotal($a4); ?>
		</td>
	</tr>
</tbody>
</table>
<style>
	table {
		border-spacing: 5px 10px;
		border-collapse : separate;
	}
	td {
		border-right: solid 3px red;
		border-left: solid 3px red;
	}
</style>