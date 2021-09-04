<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Database test page</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
<h1>Database test page</h1>

<p>Showing contents of bookings table for testing purposes:</p>

<table border="2">
<tr><th>ID</th><th>GROUP NAME</th><th>TIME</th></tr>

<?php
 
$db_host   = '192.168.2.13';
$db_name   = 'bookings';
$db_user   = 'user1';
$db_passwd = 'password1234';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM schedule");

while($row = $q->fetch()){
  echo "<tr><td>".$row["bookingID"]."</td><td>".$row["groupName"]."</td><td>".$row["time"]."</td></tr>\n";
}

?>
</table>
</body>
</html>