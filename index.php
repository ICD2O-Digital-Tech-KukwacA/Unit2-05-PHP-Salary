<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Salary Program">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Salary Program</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Salary Program in PHP</h1>";
			echo "<h3>This program will calculate the salary of the user.<h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="lblHoursWorked">HoursWorked (cm)</label>
      <input type="float" id="hoursWorked" placeholder="Hours Worked (h) :" name="hoursWorked"><br><br>
      <label for="lblHourlyRate">HourlyRate (cm)</label>
      <input type="float" id="hourlyRate" placeholder="Hourly Rate ($) :" name="hourlyRate"><br><br>
      <input type="submit" value="Calculate salary">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				You earn $<? php echo "$moneyBeforeTax" ?> before tax.
        The government takes $<? php echo "$moneyTaken" ?>.
        You earn <? php echo "$moneyEarned" ?> after tax.
      </iframe>
	</body>
</html>