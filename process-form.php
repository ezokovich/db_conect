<?php error_reporting (E_ALL ^ E_NOTICE);?> 

<?php

$name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOLEAN);

if ( ! $terms) {
    die("Terms must be accepted");
}   

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
        
$sql = "INSERT INTO message (name, body, priority, type)
        VALUES (?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
                       $name,
                       $message,
                       $priority,
                       $type);

mysqli_stmt_execute($stmt);

echo "Record saved.";
if($_POST['submit']==0)      { $sql = "SELECT id,name, body,priority,type FROM message ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1' ><tr><th>ID</th><th>Name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["id"]."</td><td>".$row["name"]." ".$row["body"]."</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
     
    $conn->close();  }
?>
<?php 
if($_POST['submit']==0)      {   }
else if($_POST['submit']==1) {$sql = "DELETE FROM message WHERE id=3";

    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    } }
else if($_POST['submit']==2) { $sql = "UPDATE message SET name='Doe' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }}
?>