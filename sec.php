<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host = "localhost";
    $dbname = "message_db";
    $username = "root";
    $password = "";
            
    $conn = mysqli_connect( $host,
                            $username,
                            $password,
                            $dbname);
            
    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_error());
    }           
    
    
?>

</body>
</html>