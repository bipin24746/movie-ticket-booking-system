<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking - Bill</title>
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
    <div class="bill-container">
        <h1>Movie Ticket Booking - Bill</h1>
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "moviebooking";

        // Create a connection to the database
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve booking details from the URL
        if (isset($_GET['bookSeats'])) {
            $bookingId = $_GET['bookSeats'];
              // Display booking details
              echo "<div class='movie-details'>";
              echo "<p><strong>Movie:</strong> $movieName</p>";
              echo "<p><strong>Date:</strong> $showDate</p>";
              echo "<p><strong>Time:</strong> $showTime</p>";
              echo "<p><strong>Seats:</strong> $seatId</p>";
              echo "<p><strong>Booking Date:</strong> $bookingDate</p>";
              echo "<p><strong>Booking Time:</strong> $bookingTime</p>";
              echo "<p><strong>Customer Name:</strong> $fname</p>";
              echo "<p><strong>Email:</strong> $email</p>";
              echo "</div>";
              echo "<div class='amount-details'>";
              echo "<p><strong>Total Price:</strong> Rs. $totalPrice</p>";
              echo "</div>";
          } else {
              // Booking not found or invalid booking ID
              echo "<p>Booking not found.</p>";
          
        } else {
            echo "<p>Booking ID is missing.</p>";
            exit;
        }

        // Sanitize the input (optional)
        $bookingId = mysqli_real_escape_string($conn, $bookSeats);

        // Fetch booking details from the database based on the booking ID
        $sql = "SELECT * FROM booking WHERE id = $bookingId";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $movieId = $row['movie_id'];
            $showDate = date('F d, Y', strtotime($row['show_date']));
            $showTime = date('h:i A', strtotime($row['show_time']));
            $seatId = $row['seat_id'];
            $totalPrice = $row['total_price'];
            $bookingDate = date('F d, Y', strtotime($row['booking_date']));
            $bookingTime = date('h:i A', strtotime($row['booking_time']));
            $fname = htmlspecialchars($row['fname']);
            $email = htmlspecialchars($row['email']);

            // Fetch movie details from the database based on the movie ID
            $sql_movie = "SELECT * FROM movie WHERE id = $movieId";
            $result_movie = $conn->query($sql_movie);
            if ($result_movie && $result_movie->num_rows > 0) {
                $row_movie = $result_movie->fetch_assoc();
                $movieName = htmlspecialchars($row_movie['name']);

                // Close the movie details result
                $result_movie->close();
            } else {
                // Movie not found or invalid movie ID
                $movieName = "Unknown Movie";
            }

            // Close the booking details result
            $result->close();

            // Close the database connection
            $conn->close();

            // Display booking details
            echo "<div class='movie-details'>";
            echo "<p><strong>Movie:</strong> $movieName</p>";
            echo "<p><strong>Date:</strong> $showDate</p>";
            echo "<p><strong>Time:</strong> $showTime</p>";
            echo "<p><strong>Seats:</strong> $seatId</p>";
            echo "<p><strong>Booking Date:</strong> $bookingDate</p>";
            echo "<p><strong>Booking Time:</strong> $bookingTime</p>";
            echo "<p><strong>Customer Name:</strong> $fname</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "</div>";
            echo "<div class='amount-details'>";
            echo "<p><strong>Total Price:</strong> Rs. $totalPrice</p>";
            echo "</div>";
        } else {
            // Booking not found or invalid booking ID
            echo "<p>Booking not found.</p>";
        }
        ?>
    </div>
</body>
</html>
