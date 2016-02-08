<?php

require_once("db_connect.php");
/*
Here we ask the connection from the file above once in order to loop through the codes down
*/

$sql = "SELECT * FROM .....";  // here we specifie which database are we going to fetch
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
echo "<th>Work-Item</th>";
echo "<th>Depence-On</th>";
echo "</tr>";

echo "<td>" . $row["Work-Item"]. "</td>" 
. "<td>" . $row["Dependec-On"]. "</td>";



echo "</tr>";
}

echo("</table>");
?>
