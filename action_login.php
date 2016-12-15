<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "domisep";

$name_sent = $_POST['username'];
$password_sent = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT name, id, password FROM users WHERE name='$name_sent'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    if (strcmp($password_sent ,$row["password"]) == 0){
        echo "CONNECTé";        
    }else{
        echo "incorrect password";
    }


} else {
    echo "User doesn't exist";
}
$conn->close();
?>