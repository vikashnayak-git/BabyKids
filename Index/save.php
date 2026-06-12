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
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `school`.`student`(`name`,`surname`,`email`,`subject`,`message`) VALUES
        ('$name','$surname','$email','$subject','$message');";

    echo "<br>";
    echo "$sql";

    if($conn->query($sql)==true){
        echo "Data Successfully Insert in DB";
    }        
    else{
        echo "ERROR: Data don't Insert in DB";
    } 
    $conn->close();
}
?>