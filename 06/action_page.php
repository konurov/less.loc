<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
   
    $subject = $_POST['subject'];
   // if (empty($name)) {
   //   echo "Name is empty";
    //} else {
   //   echo $name;
   // }
   $sql = "INSERT INTO myuser (firstname, lastname, subject)
VALUES ('$firstname', '$lastname', '$subject')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <a href='http://less.loc/06/'>Главная стра....</a>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }





$conn->close();

?>