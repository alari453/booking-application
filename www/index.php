<!--index page to display data:-->
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
  <head>
      <meta charset="utf-8">
      <title>Mars Reservation Flight Booking Details</title>
      <link rel="stylesheet" href="style.css">
      <!--table styling-->
      <style>
      th { text-align: left; }
      table, th, td {
        border: 3px solid grey;
        border-collapse: collapse;}
      th, td {
        padding: 0.5em;}
      </style>
  </head>

  <body>
  <div class="container">
          <div id="header1">
            <h1>Mars Reservation Booking Details</h1>
          </div>
    <h2>Current Bookings to Mars:</h2>

          <table border="5">
          <tr><th>BOOKINGID</th><th>FIRST NAME</th><th>LAST NAME</th><th>BOOKING TIME</th></tr>

          <!--call information from database:-->
          <?php
            $db_host   = '192.168.2.13';
            $db_name   = 'bookings';
            $db_user   = 'user1';
            $db_passwd = 'password1234';

            $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
            $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
            
            /*call schedule table from the database*/
            $q = $pdo->query("SELECT * FROM schedule");

            /*input data into table*/
            while($row = $q->fetch()){
              echo "<tr><td>".$row["bookingID"]."</td><td>".$row["fName"]."</td><td>".$row["lName"]."</td><td>".$row["bookingtTime"]."</td></tr>\n";
            }
          ?>

          </table>
  </body>
</html>