<?php
    include"./conn.php";
    if(isset($_POST['submit']))
    {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $sql = "INSERT INTO `contactdata`(`firstName` , `lastName` , `email` , `contactno`) VALUES ('$firstName' ,'$lastName' ,'$email' ,'$contact');";
        $result = $conn->query($sql);
        
        if ($result == TRUE){
            // echo "New Record Inserted Successfully";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        
        $conn->close();
    }
?>