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
            echo "New Record Inserted Successfully";
        }
        else{
            echo "Error:".$sql."<br>".$conn->error;
        }
        
        $conn->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css_files/main_wrapper.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
</head>
<body>
    <div class="main_wrapper">
        <div class="header headingFont">
    
            <div class="icon">
                <img src="../assets/DESIGN/SB.png" alt="Shoe Box" >
            </div>
            
            <div>
                Search Bar
            </div>

            <div>
                <ul>
                    <li><a href="./home.html">Home</a></li>
                    <li><a href="./services.html">Services</a></li>
                    <li><a href="./aboutUs.html">About-Us</a></li>
                    <li><a href="./contactUs.html">Contact-Us</a></li>
                </ul>
            </div>
        </div>
        
        <div>
        <form action="" method="POST"> 
    <fieldset> 
    <legend>Personal information:</legend> 
    First name:<br> 
    <input type="text" name="firstName"> 
    <br> 
    Last name:<br> 
    <input type="text" name="lastName"> 
    <br> 
    Email:<br> 
    <input type="email" name="email"> 
    <br> 
    Contact Number:<br> 
    <input type="tel" name="contact"> 
    <br><br> 
    <input type="submit" name="submit" value="submit"> 
    </fieldset> 
    </form>
        </div>

        <div class="footer ">
            <div class="icon">
                <img src="../assets/DESIGN/SB_Black.png" alt="Shoe Box">
            </div>
        </div>
    </div>
</body>
</html>