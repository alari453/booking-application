<?php 
        /* connect to databse */
        $link = mysqli_connect('192.168.2.13', 'user1', 'password1234', 'bookings');
        
        // if (mysqli_connect_errno()){
        //     echo "Failed to connect to MQL: " . mysqli_connect_error();
        //     exit();
        // }

        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // /* initialise parameters to post to db */
        // $fName = $_POST['fName'];
        // $lName = $_POST['lName'];
        // $email = $_POST['email'];  
        // $time = $_POST['time'];   
        
        // Escape user inputs for security
        $fName = mysqli_real_escape_string($link, $_REQUEST['fName']);
        $lName = mysqli_real_escape_string($link, $_REQUEST['lName']);
        $email = mysqli_real_escape_string($link, $_REQUEST['email']);
        $time = mysqli_real_escape_string($link, $_REQUEST['time']);

        // /* insert statement */
        // $statement = mysqli_prepare( $link, "INSERT INTO schedule (fName, lName, email, time) 
        // VALUES (?, ?, ?, ?)");
        
        // /* if paramaters are valid, execute statement and then finish */
        // if ($statement) {
            
        //     mysqli_stmt_bind_param( $statement, "ssss", $fName, $lName, $email, $time);
        //     mysqli_stmt_execute($statement);
        //     mysqli_stmt_close($statement);
        // } else {
        //     echo "<script>alert(Didn't work. Program has quit.)</script>";
        // }

        // Attempt insert query execution
        $sql = "INSERT INTO schedule (fName, lName, email, time) VALUES ('$fName', '$lName', '$email', '$time')";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
        /* close db connection */
        mysqli_close($link);
?>