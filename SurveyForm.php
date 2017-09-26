<!DOCTYPE html>
<html>
<title>AirService - Airline Survey : Results</title>
<body>
	<h1>Airline Survey</h1>
	<?php
	if (empty($_POST['flightnum'])){ 
		echo "You did not submit the survey!"; 
	} else {
		$db_connect=mysql_connect("localhost:8889/flightsurvey","root","mgs314") or die("Unable to connect to the MySQL!");
		mysql_select_db("flightsurvey",$db_connect) or die("Unable to select database!");

		$sql_string = "INSERT INTO flightSurvey.survey(flightnum, date, time, friendliness, storage, seating, cleaness, noise) 
		VALUES('".$_POST['flightnum']."', '".$_POST['date']."', '".$_POST['time'].
			"', '".$_POST['friendliness']."', '".$_POST['storage']."', '".$_POST['seating'].
			"', '".$_POST['cleaness']."', '".$_POST['noise']."')";
$result=mysql_query($sql_string) or die("Error in query: $sql_string. ".mysql_error());  
mysql_close($db_connect); 
echo "Thank you! Your survey has been submitted!";
}
?>

</body>
</html>