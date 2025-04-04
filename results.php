<?php
	// get hours worked and hourly rate from the textfields
	$hoursWorked = $_POST['hoursWorked'];
	$hourlyRate = $_POST['hourlyRate'];

	// calculate the area
	const TAX = 0.2005
    $moneyEarned = hoursWorked * hourlyRate
	$moneyTaken = TAX * $moneyEarned
?>
<h3>Results:</h3>
You earn $<?php echo "$moneyEarned" ?>.
The government takes <?php echo "$moneyTaken" ?>.