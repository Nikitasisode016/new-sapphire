<?php 
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"hotel");

    // 1. Get Room Number (rn) and Room Type Code (rt) from URL
    $room_no = $_GET['rn'];
    $rt_code = $_GET['rt'];

    // 2. Determine the actual database table name ($room_type)
    $room_type = '';
    if ($rt_code == 'a') {
        $room_type = "single_deluxe";
    } elseif ($rt_code == 'b') {
        $room_type = "double_deluxe";
    } elseif ($rt_code == 'c') {
        $room_type = "semi_luxury";
    } elseif ($rt_code == 'd') {
        $room_type = "super_luxury";
    }

    // 3. Construct the UNBOOKING query
    if (!empty($room_type)) {
        // We set mandatory NOT NULL columns to an EMPTY STRING ('') 
        // and numeric columns to 0, which satisfies the database constraints 
        // while clearing the booking data.
        $query = "UPDATE `$room_type` SET 
            holder_name = '',
            holder_id = 0,
            holder_mobile = '',
            holder_address = '',
            child = 0,
            adult = 0,
            in_date = '',
            out_date = '',
            status = 0 
            WHERE room_no = $room_no";

$query_run = mysqli_query($connection, $query);

        if ($query_run) {
            // Redirect back to the admin page or rooms view after successful unbooking
            header("location:redirect_page.php"); 
            exit();
        } else {
            // Handle query failure (optional, for debugging)
            echo "Database Error: " . mysqli_error($connection);
        }
    } else {
        // Handle case where room type code was invalid
        echo "Error: Invalid room type provided.";
    }
?>