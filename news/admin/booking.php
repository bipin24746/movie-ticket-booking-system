<?php include('header.php'); ?>

<style>
  .booking-list {
    margin-top: 50px;
  }

  .booking-list h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .booking-list table {
    width: 100%;
    border-collapse: collapse;
  }

  .booking-list th,
  .booking-list td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  .booking-list th {
    background-color: #f2f2f2;
  }
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviebooking";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all the bookings with real date and time
$sql = "SELECT booking.*, movie.name AS movie_name FROM booking JOIN movie ON booking.movie_id = movie.id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<div class='booking-list'>";
    echo "<h2>Booking List</h2>";

    echo "<table>";
    echo "<tr>
    <th>Name</th>
            <th>Movie Name</th>
            <th>Show Date</th>
            <th>Show Time</th>
            <th>Booking Date</th>
            <th>Booking Time</th>
            <th>Seat no</th>

          </tr>";

    while ($row = $result->fetch_assoc()) {
       $fname = $row['fname'];
       $lname = $row['lname'];
        $movieName = $row['movie_name'];
        $showDate = date('F j, Y', strtotime($row['show_date'])); // Format the date
        $showTime = date('h:i A', strtotime($row['show_time'])); // Format the time
        $bookingDate = date('F j, Y', strtotime($row['booking_date'])); // Format the booking date
        $bookingTime = date('h:i A', strtotime($row['booking_time'])); // Format the booking time
        $seatid = $row['seat_id'];

        echo "<tr>
        <td>$fname $lname</td>
                <td>$movieName</td>
                <td>$showDate</td>
                <td>$showTime</td>
                <td>$bookingDate</td>
                <td>$bookingTime</td>
                <td>$seatid</td>
              </tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "No bookings found.";
}

$conn->close();
?>
