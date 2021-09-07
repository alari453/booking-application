<?php 
        /* connect to databse */
        $link = mysqli_connect('192.168.2.13', 'user1', 'password1234', 'bookings');

        /* check database connection */
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        /* declare parameters */
        $fName = mysqli_real_escape_string($link, $_REQUEST['fName']);
        $lName = mysqli_real_escape_string($link, $_REQUEST['lName']);
        $email = mysqli_real_escape_string($link, $_REQUEST['email']);
        $time = mysqli_real_escape_string($link, $_REQUEST['time']);

        /* insert information from index to database */
        $sql = "INSERT INTO schedule (fName, lName, email, time) VALUES ('$fName', '$lName', '$email', '$time')";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully. Choose one of the following options: </br>";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
        /* close db connection */
        mysqli_close($link);
?>

<a class="currentBookings" href="http://192.168.2.12"> View Current Bookings</a>
<a class="currentBookings" href="http://192.168.2.11"> Make another booking</a>
