<?php
include "confi.php";

if (isset($_REQUEST["submit"])) {

    $firstName = $_REQUEST["firstName"];
    $lastName = $_REQUEST["lastName"];
    $email = $_REQUEST["email"];
    $phoneNumber = $_REQUEST["phoneNumber"];

    $inse = "INSERT INTO signup (firstName, lastName, email, phoneNumber) VALUES ('$firstName','$lastName',' $email',' $phoneNumber')";
    $query1 = mysqli_query($connection, $inse);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="./css/form.css">


</head>

<body>

    <div class="login-form">
        <form>
            <h1>Details</h1>
            <input type="text" class="input-place " id="firstName" name="firstName" placeholder="First Name" required><br><br>
            <input type="text" class="input-place" id="lastName" name="lastName" placeholder="Last Name" required><br><br>
            <input type="email" class="input-place" id="email" name="email" placeholder="Email" required><br><br>
            <input type="number" class="input-place" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required><br><br><br>
            <button class="login-button" type="submit" name="submit">Send</button>

        </form>
    </div>






</body>

</html>