<!DOCTYPE>
<html>
<head>
<title>Past Survey Results</title>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$DBConnect = @mysqli_connect("localhost", "root", "mgs314")
if($DBConnect === FALSE) {
	echo "<p>Unable to connect to the database server.</p>"
		. "<p>Error code ".mysql_errno()
		. ": ". mysql_error()."</p>";
else {
$DBName = "airlineSurvey";
if (!@mysqli_select_db($DBConnect, $DBName))
     die("<p>There are no past surveys!</p>");

$TableName = "t_survey";
$SQLstring = "SELECT * FROM $TableName";
$QueryResult = @mysqli_query($DBConnect, $SQLstring);
if (mysql_num_rows($QueryResult) == 0)
      echo"<p>There are no passengers!</p>";
else{
echo "<p>The following passengers have completed the survey:</p>";
echo "<table width='100%' border='1'>";
echo "<tr><th>Passenger Name</th></tr>";
$Row = mysqli_fetch_assoc($QueryResult);
do {
     echo "<tr><td>{$Row['psngr_name']}</td></tr>";
     $Row = mysqli_fetch_assoc($QueryResult);
} while ($Row);

$TableName = "t_options";
$SQLstring = "SELECT * FROM $TableName";
$QueryResult = @mysqli_query($DBConnect, $SQLstring);
if (mysqli_num_rows($QueryResult) == 0)
      echo"<p>There are no survey results!</p>";

echo "<p>Survey Results:</p>";
echo "<table width='100%' border='1'>";
echo "<tr><th>Friendliness of customer staff</th><th>Space for luggage storage</th><th>Comfort of seating</th><th>Cleanliness of aircraft</th><th>Noise level of aircraft</th></tr>";
$Row = mysqli_fetch_assoc($QueryResult);
do {
     echo "<tr><td>{$Row['no_op']}</td>";
     echo "<td>{$Row['poor']}</td>";
     echo "<td>{$Row['fair']}</td>";
     echo "<td>{$Row['good']}</td>";
     echo "<td>{$Row['exc']}</td></tr>";
     $Row = mysqli_fetch_assoc($QueryResult);
} while ($Row);

mysql_free_result($QueryResult);
mysql_close($DBConnect);
?>
</body>
</html>