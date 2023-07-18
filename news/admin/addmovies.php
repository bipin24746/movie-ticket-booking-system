<?php
include ('header.php');
?>
<?php
session_start();
if(!isset(  $_SESSION['email'] ))
{
    header("location:login.php");
    exit;
}

?>
<style>
  form {
  width: 500px;
  height: max-content;
  margin-top: 20px;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
  margin-left: 30%;
  margin-right: 30%;
}

h2 {
  text-align: center;
}

label {
  display: flex;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="date"],
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

textarea {
  height: 100px;
}

input[type="submit"] {
  background-color: #4caf50;
  color: white;
  padding: 10px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

</style>
<form action="addmoviebck.php" method="POST" enctype="multipart/form-data">
  <h2><u>Add Movie</u></h2>

  <label for="title">Movie Name:</label>
  <input type="text" id="name" name="name"><br>

  <label for="genre">Genre:</label>
  <input type="text" id="name" name="genre"><br>
  
  <label for="industry">Industry:</label>
  <input type="text" id="name" name="industry"><br>

  <label for="language">Language:</label>
  <input type="text" id="name" name="language"><br>

  <label for="duration">Movie Duration:</label>
  <input type="text" id="name" name="duration"><br>

  <label for="reldate">Released Date:</label>
  <input type="text" id="name" name="reldate"><br>

  <label for="director">Director:</label>
  <input type="text" id="name" name="director"><br>

  <label for="actor">Actors:</label>
  <input type="text" id="name" name="actor"><br>
  
  <label for="price">Ticket Price:</label>
  <input type="number" id="price" name="price"><br>
  
  <label for="image">Movie Poster Image:</label>
  <input type="file" id="image" name="image" ><br>

  <label for="time">First Show</label>
  <input type="time" id="time" name="fshow"><br>

  <!-- <label for="time">Second Show</label>
  <input type="time" id="time" name="sshow"><br>

  <label for="time">Third Show</label>
  <input type="time" id="time" name="tshow"><br> -->

  <label for="fdate">First Show Date:</label>
    <input type="date" id="fdate" name="fdate" required><br>

    <label for="sdate">Second Show Date:</label>
    <input type="date" id="sdate" name="sdate" required><br>


  


  <input type="submit" value="Add Movie" name="add">
</form>
