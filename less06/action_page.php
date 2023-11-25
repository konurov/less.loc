<?php 
  echo "<pre>";
  #print_r($_SERVER);
  #print_r($_POST);
  echo "</pre>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $subject = $_POST['subject'];
   // if (empty($name)) {
   //   echo "Name is empty";
    //} else {
   //   echo $name;
   // }
   $sql = "INSERT INTO myuser (firstname, lastname, subject)
VALUES ('$firstname', '$lastname', '$subject')";
if ($db->query($sql) === TRUE) {
    echo "New record created successfully <a href='http://less.loc/less06/'>Главная стра....</a>";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
  }





$db->close();


?>