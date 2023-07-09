<!doctype html>
<html lang="en">
  <head>
    <title>Online Movie Ticket Booking System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <script type="text/javascript">
    $(document).ready(function(){
        $(#loginForm).show();
    })
  </script>
  <body>
      
  <nav class="bg-gray-800">
        <div class="container mx-auto py-4 px-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Movie HUB</h1>
            <ul class="flex space-x-8">
                <li class="relative group">
                    <a href="index.php" class="text-white text-lg hover:text-blue-500">Home</a>
                </li>
                <li class="relative group">
                    <a href="#" class="text-white text-lg hover:text-blue-500">Movie</a>
                    <ul class="absolute left-0 mt-2 w-40 bg-white rounded-lg shadow hidden group-hover:block">
                        <li><a href="#" class="text-red-500 text-sm hover:text-red-600 cursor-pointer">Now Showing</a></li>
                        <li><a href="comingsoon.php" class="text-red-500 text-sm hover:text-red-600 cursor-pointer">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="relative group">
                    <a href="booking.php" class="text-white text-lg hover:text-blue-500">Book Ticket</a>
                </li>
                <li class="relative group">
                    <a href="contact.php" class="text-white text-lg hover:text-blue-500">Contact</a>
                </li>
            </ul>
            <ul class="flex space-x-8">
                <li>
                    <a href="#" class="text-white text-lg hover:text-blue-500" id="registerLink">Register</a>
                </li>
                <li>
                    <a href="#" class="text-white text-lg hover:text-blue-500" id="loginLink">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    

    <!-- Register Modal -->
    <?php
    include("register.php");
    ?>
    
    <!-- Login Modal -->
    <?php
    include("login.php");
    ?>
    



