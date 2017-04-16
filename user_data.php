<?php
include 'dbh.php';

$sql = "SELECT * FROM user"; 
$result=$conn->query($sql);

 echo "<table>"; // start a table tag in the HTML
echo("<tr><td>first name</td><td>last name</td><td>user name</td><td>password</td></tr>");
 while($row = $result->fetch_assoc()){   //Creates a loop to loop through results
 echo "<tr><td>" . $row['first'] . "</td><td>" . $row['last'] . "</td><td>". $row['uid'] . "</td><td>". $row['pwd'] . "</td></tr>";  //$row['index'] the index here is a field name

}

echo "</table>"; //Close the table in HTML

//mysql_close(); //Make sure to close out the database connection
?>
<form action="index.php" method="POST">
	<button>home page</button>
</form>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;

}
</style>