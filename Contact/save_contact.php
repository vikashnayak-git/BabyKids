<?php
if( isset($_POST['name'])){

    $server="localhost";
    $username="root";
    $password="";

    $conn = mysqli_connect($server, $username, $password);

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }
    echo "Success connecting to DB";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `school`.`contact`(`name`,`email`,`message`) VALUES
        ('$name','$email','$message');";

    echo "<br>";
    echo "$sql";

    if($conn->query($sql)==true){
        echo "<br>";
        echo "Data Successfully Insert in DB";
    }        
    else{
        echo "<br>";
        echo "ERROR: $sql <br> $conn->error";
    } 
    $conn->close();
}
?>