<?php
    if(isset($_GET['action'])){
        $servername = "localhost";
        $username = "root";
        $password = "root123456@";
        $database = "personalwebsite";
    
        $conn = new mysqli($servername, $username, $password, $database );
        if($conn->connect_error){
            die("Connection Failed: ". $conn->connect_error);
        }
        $nama = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $messages = $_POST['messages'];
    
        $sql = "INSERT into contactpengunjung (nama, email, phone, messages) values ('$nama','$email','$phone','$messages');";
        if(mysqli_query($conn,$sql)){
            echo "<script type='text/javascript'>";
            echo "alert('Your form has been submited, Thank you for contacting');";
            echo "window.location.href='index.html';";
            echo "</script>";
        }
        else{
        echo "Error: ".$sql ."<br>".$conn->error;
        }
        $conn->close();
    }
?>