<?php
	// get the base and height from the textfields
	$hoursWorked = $_POST['hoursWorked'];
	$hourlyRate = $_POST['hourlyRate'];

	// calculate the area
	const TAX = 0.2005
	$moneyBeforeTax = hoursWorked * hourlyRate
	$moneyTaken = TAX * $moneyBeforeTax
	$moneyEarned = $moneyBeforeTax - $moneyTaken

	<h3>Results:</h3>
	You earn $<?php echo "$moneyBeforeTax" ?> before tax.
	The government takes $<?php echo "$moneyTaken" ?>.
	You earn $<?php echo "$moneyEarned" ?> after tax.