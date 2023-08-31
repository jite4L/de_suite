<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "my name is: $username and my pass is: $password";
    
}
// if(isset($_POST['submit'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     echo "my name is $username and my password is:$password";
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cdkv.php" method="POST">
      username:  <input type="text" name="username">
      <br>
       password:  <input type="text" name="password">
       <br>
       <input type="submit" name="submit">
    </form>
    
    
</body>
</html>