<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="form_database";

    $conn=new mysqli($servername,$username,$password,$dbname);
    
    if($conn->connect_error){
        die("Connection Failed:".$conn->connect_error);
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["Name"];
        $email=$_POST["Email"];
        $subject=$_POST["Subject"];
        $service=$_POST["Service"];
        $message=$_POST["Message"];

        $sql="INSERT INTO form_submission(Name,Email,Subject,Services,Message)VALUES('$name','$email','$subject','$service','$message')";

        if($conn->query($sql)=== TRUE){
            echo "<script>alert('Form submitted successfully!'); window.location.href='index.php';</script>";
        }else{
            echo "Error:".$sql."<br>".$conn->error;
        }
    }
    $conn->close();
?>