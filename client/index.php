<!--Send Data to View-->
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Mars Reservation Flight Booking</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <div id="header1">
                <h1>Mars Reservation Flight Bookings</h1>
            </div>
            
            <!--link to current bookings (www-index page)-->
            <a class="currentBookings" href="http://192.168.2.12"> View Current Bookings</a>

            <!--form for user input, sends data to insert.php file-->
            <form method="post" action ="insert.php" class="inputForm">  
                <label for="fName">First Name:</label>
                <input class="submitBooking" type="text" name="fName" placeholder="e.g. Jane" required><br>

                <label for="lName">Last Name:</label>
                <input class="submitBooking" type="text" name="lName" placeholder="e.g. Doe" required><br>

                <label for="email">Email:</label>
                <input class="submitBooking" type="text" name="email" placeholder="e.g. doeja@student.otago.ac.nz" required><br>

                <label for="bookingtTime">Preferred Time:</label>
                <input class="submitBooking" type="text" name="bookingtTime" placeholder="e.g. 13:00" required><br>

                <input class="bookingSubmit" type="submit" name="submit"></input>
            </form>
        </div>
    </body>
</html>