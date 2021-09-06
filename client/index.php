<!--Send Data to View-->
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Mars Reservation Flight Booking</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <!--Booking Form:-->
    <div class="container">
        <div id="header1">
            <h1>Mars Reservation Flight Bookings</h1>
        </div>
        
        <!--to display current bookings (www-index page) CHANGE HREF-->
        <a class="currentBookings" href="http://192.168.10.13"> View Current Bookings</a>

        <!--User Input-->
        <form method="post" action ="" class="inputForm">
            <label for="FName">First Name:</label>
            <input class="submitBooking" type="text" name="FName" placeholder="e.g. Jane" required><br>

            <label for="LName">Last Name:</label>
            <input class="submitBooking" type="text" name="LName" placeholder="e.g. Doe" required><br>

            <label for="Email">Email:</label>
            <input class="submitBooking" type="text" name="Email" placeholder="e.g. doeja@student.otago.ac.nz" required><br>

            <label for="preferredTime">Preferred Time:</label>
            <input class="submitBooking" type="text" name="preferredTime" placeholder="e.g. 13:00" required><br>

            <input class="submitBooking" type="submit" name="submit"></input>
        </form>

    </div>

    <?php 
        /* connect to databse */
        $link = mysqli_connect('192.168.10.12', 'user1', 'password1234', 'bookings');
        if (mysqli_connect_errno()){
            echo "Failed to connect to MQL: " . mysqli_connect_error();
            exit();
        }

        /* initialise parameters to post to db */
        $FName = $_POST['FName'];
        $LName = $_POST['LName'];
        $Email = $_POST['Email'];  
        $preferredTime = $_POST['preferredTime'];    

        /* insert statement */
        $statement = mysqli_prepare( $link, "INSERT INTO details (FName, LName, Email, preferredTime) 
        VALUES (?, ?, ?, ?)");
        
        /* if paramaters are valid, execute statement and then finish */
        if ($statement) {
            mysqli_stmt_bind_param( $statement, "????", $FName, $LName, $Email, $preferredTime);
            mysqli_stmt_execute($statement);
            mysqli_stmt_close($statement);
        } else {
            echo "Didn't work. Quit.";
        }

        /* close db connection */
        mysqli_close($link);
    ?>

    </body>
</html>