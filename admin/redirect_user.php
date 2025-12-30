<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Booking Successful</title>
    
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../vendors/linericon/style.css">
    
    <style>
        body {
            background-color: #f8f9fa; /* Light background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .success-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 450px;
        }
        .success-icon {
            font-size: 60px;
            color: #28a745; /* Success Green */
            margin-bottom: 20px;
            display: block;
        }
        h3 {
            color: #1e7e34; /* Darker green heading */
            font-weight: 600;
            margin-bottom: 15px;
        }
        p {
            color: #6c757d;
            margin-bottom: 25px;
        }
        .btn-main {
            background-color: #ffc107; /* Warning yellow (matching your 'Book Now' button) */
            border-color: #ffc107;
            color: #212529; /* Dark text for contrast */
            font-weight: 700;
            padding: 10px 25px;
            transition: all 0.3s;
        }
        .btn-main:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: #212529;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <i class="lnr lnr-checkmark-circle success-icon"></i>
        
        <h3>Booking Confirmed!</h3>
        <p>
            Your room has been successfully booked with New Sapphire Hotel. We look forward to hosting you!
        </p>
        
        <a href="../rooms.php" class="btn btn-main">
            Go Back to Room Selection
        </a>
    </div>
</body>
</html>