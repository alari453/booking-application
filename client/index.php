<!--Send Data to View-->
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Mars Flight Booking</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <!--Booking Form:-->
    <div class="container">
        <div id="header1">
            <h1>Mars Reservation Flight Bookings</h1>
        </div>
        <form method="post" action ="" class="inputForm">
            <label for="studentID">Student ID:</label>
            <input class="surveyInput" type="text" name="studentID" placeholder="ex. 1234567" required><br>

            <label for="name">Full Name:</label>
            <input class="surveyInput" type="text" name="name" placeholder="ex. John Smith" required><br>

            <label for="course">COSC or INFO:</label>
            <input class="surveyInput" type="text" name="course" placeholder="ex. COSC" required><br>

            <label for="lecturer">Favourite Lecturer:</label>
            <input class="surveyInput" type="text" name="lecturer" placeholder="ex. Mark George" required><br>

            <label for="paper">Favourite Paper:</label>
            <input class="surveyInput" type="text" name="paper" placeholder="ex. COSC349" required><br>

            <label for="language">Favourite Language:</label>
            <input class="surveyInput" type="text" name="language" placeholder="ex. Java" required><br>

            <input class="surveySubmit" type="submit" name="submit"></input>
        </form>

        <a class="resultsLink" href="http://192.168.10.13">Results Page</a>
    </div>

    <?php 
        /* connect to databse */
        $link = mysqli_connect('192.168.10.12', 'user1', 'password1', '349assignment');
        if (mysqli_connect_errno()){
            echo "Failed to connect to MQL: " . mysqli_connect_error();
            exit();
        }

        /* initialise parameters to post to db */
        $studentID = $_POST['studentID'];
        $name = $_POST['name'];
        $course = $_POST['course'];
        $lecturer = $_POST['lecturer'];
        $paper = $_POST['paper'];
        $language = $_POST['language'];   

        /* insert statement */
        $statement = mysqli_prepare( $link, "INSERT INTO information (studentID, name, course, lecturer, paper, language) 
        VALUES (?, ?, ?, ?, ?, ?)");
        
        /* if paramaters are valid, execute statement and then finish */
        if ($statement) {
            mysqli_stmt_bind_param( $statement, "ssssss", $studentID, $name, $course, $lecturer, $paper, $language);
            mysqli_stmt_execute($statement);
            mysqli_stmt_close($statement);
        } else {
            echo "not good. DIE";
        }

        /* close db connection */
        mysqli_close($link);
    ?>


    </body>
</html>