<html>
 <head>
  <title>Employees</title>
 </head>
 <body>
  <table>
   <thead>
    <tr>
     <th>Employee ID</th>
     <th>Last Name</th>
     <th>First Name</th>
     <th>Title</th>
    </tr>
   </thead>
   <tbody>
<?php
$dbconn = pg_connect("host=ec2-54-204-24-154.compute-1.amazonaws.com
          port=5432
          dbname=dbjod4rptv3953 
          user=ltlvdznvovjwbi
          password=-ZqJ5BlJLigG94kv24HDCF7Cf4
          sslmode=require");




$query = pg_query($dbconn,"SELECT employee_id, last_name, first_name, title FROM employees");

while ($row=pg_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $row["employee_id"] . "</td>";
    echo "<td>" . htmlspecialchars($row["last_name"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["first_name"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
    echo "</tr>";
}
$result->closeCursor();
?>
   </tbody>
  </table>
 </body>
</html>