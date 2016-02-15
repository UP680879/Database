<?php

require_once("db_connect.php");
/*
Here we ask the connection from the file above once in order to loop through the codes down
*/

$sql = "SELECT * FROM TaskTable";  // here we specifie which database are we going to fetch
$result = mysql_query($sql) or die(mysql_error()); // and we are going to store it in the variable that named here
/*
Here we are going to use table to do the Grantt chart on it
with some HTML and CDD
*/
echo "<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>";
echo("<table style=width:100%>");

echo "<tr>";

while ($row = mysql_fetch_array($result)){  

// this is to make it go through all the data

//$row = mysql_fetch_array($result) or die(mysql_error());   

 // this is like loop but only shows the first row

echo "<tr>";
echo "<th>T_Name</th>";
echo "<th>T_Start_Date</th>";
echo "<th>T_End_Date</th>";
echo "<th>T_Dependency</th>";
echo "<th>T_Start_Date_Late</th>";
echo "<th>T_End_Date_Late</th>";
echo "</tr>";

echo "<td>" . $row["T_Name"]. "</td>" 
. "<td>" . $row["T_Start_Date"]. "</td>"
. "<td>" . $row["T_End_Date"]. "</td>"
. "<td>" . $row["T_Dependency"]. "</td>"
. "<td>" . $row["T_Start_Date_Late"]. "</td>"
. "<td>" . $row["T_Start_Date_Late"]. "</td>"
;


echo "</tr>";
}

echo("</table>");
?>
