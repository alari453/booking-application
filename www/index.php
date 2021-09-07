<!--To display data:-->
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Mars Reservation Booking Details</title>
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
  <h1>Mars Booking Details</h1>
  <p>Current Bookings to Mars:</p> <!--Testing Purposes-->

        <table border="5">
        <tr><th>BOOKINGID</th><th>FIRST NAME</th><th>LAST NAME</th><th>BOOKING TIME</th></tr>

        <!--Call information from the database:-->
        <?php
        $db_host   = '192.168.2.13';
        $db_name   = 'bookings';
        $db_user   = 'user1';
        $db_passwd = 'password1234';

        $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

        $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

        $q = $pdo->query("SELECT * FROM schedule");

        while($row = $q->fetch()){
          echo "<tr><td>".$row["bookingID"]."</td><td>".$row["fName"]."</td><td>".$row["lName"]."</td><td>".$row["time"]."</td></tr>\n";
        }
        ?>

        </table>
  </body>
</html>