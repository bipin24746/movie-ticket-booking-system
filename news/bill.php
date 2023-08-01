<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.bill-container {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  width: 100%;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #555555;
}

.movie-details p {
  margin: 10px 0;
  color: #333333;
}

.amount-details {
  border-top: 2px solid #eeeeee;
  padding-top: 10px;
}

.amount-details p {
  margin: 5px 0;
}

strong {
  font-weight: bold;
}

    </style>
</head>
<body>
    <?php
    // Get movie details from the URL (query parameters)
    $movieName = isset($_GET['movie']) ? $_GET['movie'] : "";
    $date = isset($_GET['date']) ? $_GET['date'] : "";
    $time = isset($_GET['time']) ? $_GET['time'] : "";
    $totalTickets = isset($_GET['tickets']) ? $_GET['tickets'] : "";
    $totalAmount = isset($_GET['amount']) ? $_GET['amount'] : "";
    $seatDetails = isset($_GET['seats']) ? $_GET['seats'] : "";
    ?>

    <div class="bill-container">
        <h1>Movie Ticket Booking - Bill</h1>
        <div class="movie-details">
            <p><strong>Movie:</strong> <?php echo $movieName; ?></p>
            <p><strong>Date:</strong> <?php echo $date; ?></p>
            <p><strong>Time:</strong> <?php echo $time; ?></p>
            <p><strong>Seats:</strong> <?php echo $seatDetails; ?></p>
        </div>
        <div class="amount-details">
            <p><strong>Total Tickets:</strong> <?php echo $totalTickets; ?></p>
            <p><strong>Total Amount:</strong> Rs.<?php echo $totalAmount; ?></p>
        </div>
    </div>
</body>
</html>