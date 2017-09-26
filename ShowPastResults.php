<<!DOCTYPE html>
<title>AirService - Airline Survey : Past Survey Results</title>
<body>
    <h1>Airline Survey</h1>

    <?php
    $db_connect=mysql_connect("localhost:8889/flightsurvey","root","mgs314") or die("Unable to connect to the MySQL!");
    mysql_select_db("flightSurvey",$db_connect) or die("Unable to select database!");
    $sql_string = "SELECT * FROM survey"; 
    $result=mysql_query($sql_string) or die("Error in query: $sql_string. ".mysql_error());  
    $row=mysql_fetch_row($result);


    echo '<font face="verdana">';
    echo '<table border="1" cellpadding="1" cellspacing="2">';
    echo "</b><tr></b>";
    for ($i=1; $i<mysql_num_fields($result); $i++)
    {
        echo '<td><b>'.
        mysql_field_name($result, $i);
        echo "</b></td></b>";
    }
    echo "</tr></b>";
    mysql_data_seek($result, 0);
    while ($row=mysql_fetch_row($result))
    {
        echo "<tr></b>";
        for ($i=1; $i<mysql_num_fields($result); $i++ )
        {
            echo '<td>';
            echo $row[$i];
            echo '</td>';
        }
        echo "</tr></b>";
    }

    echo "</table></b>";
    echo "</font>";
    mysql_free_result($result);
    mysql_close($db_connect);  
    ?> 

</body>
</html>