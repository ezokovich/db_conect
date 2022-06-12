<html>
<head>
<link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<?php 
require_once('sec.php');
?>
<?php  

if (isset($_GET["id"])) {
  $id=$_GET["id"];
}


$sql = "DELETE FROM message WHERE id=$id";
 
if (mysqli_query($conn,$sql)) {
  echo"you have delete successfully <br> <br>";}
 echo "<button href='seco.php'?> <a href='seco.php'>retour</button>";

$conn->close();
?>
</body>
</html>