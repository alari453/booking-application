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
        <a class="currentBookings" href="http://192.168.2.12"> View Current Bookings</a>

        <!--User Input-->
        <form method="post" action ="insert.php" class="inputForm">
            <label for="fName">First Name:</label>
            <input class="submitBooking" type="text" name="FName" placeholder="e.g. Jane" value="John" required><br>

            <label for="lName">Last Name:</label>
            <input class="submitBooking" type="text" name="LName" placeholder="e.g. Doe" value="John" required><br>

            <label for="email">Email:</label>
            <input class="submitBooking" type="text" name="Email" placeholder="e.g. doeja@student.otago.ac.nz" value="John" required><br>

            <label for="time">Preferred Time:</label>
            <input class="submitBooking" type="text" name="preferredTime" placeholder="e.g. 13:00" value="John" required><br>

            <input class="bookingSubmit" type="submit" name="submit"></input>
        </form>

    </div>
    </body>
</html>