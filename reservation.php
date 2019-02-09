<?php

$user_id = filter_input(INPUT_GET, 'UserID');
$start_time = filter_input(INPUT_GET, 'StartTime');
$end_time = filter_input(INPUT_GET, 'EndTime');
$room_number = filter_input(INPUT_GET, 'RoomNumber');

// do some checks to make sure data is correct



$db_connection = connect_to_db();
insert_reservation_to_db($user_id, $start_time, $end_time, $room_number, $db_connection);


function connect_to_db(){
    $servername = "localhost";
    $username = "joshros1_brian";
    $password = "12345";
    $database = "joshros1_room_scheduler";

    $dbh=mysql_connect ($servername, $username, $password)
    or die ('I cannot connect to the database.');
    mysql_select_db ($database);

// Create connection
    //$conn = new mysqli($servername, $username, $password);

// Check connection
   // if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);

    //echo "Connected successfully";

    return $dbh;
}

function insert_reservation_to_db($user_id, $start_time, $end_time, $room_number, $db_connection){
    $sql = "INSERT INTO Reservation (user_id, room_id, start_time, end_time)
VALUES ($user_id, $room_number, '" .$start_time . "', '" .$end_time . "')";

    if ($db_connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db_connection->error;
    }
}


echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Subscribe</title>
    </head>
    <body>
        <h2>Reservation Successful!</h2>
        
                
        <p><label>StartTime:    </label> " . $start_time . "</p>
        <p><label>EndTime:   </label> " . $end_time . "</p>
        <p><label>RoomNumber: </label> " . $room_number . "</p>
        
    </body>
</html>";
