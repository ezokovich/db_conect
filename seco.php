<?php 
require_once('sec.php');
?>
<?php error_reporting (E_ALL ^ E_NOTICE);?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php 
$sql = "SELECT id,name, body,priority,type FROM message ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      echo "<table border='1' >
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>body</th>
      <th>priority</th>
      <th>type</th>
      <th>update</th>
      <th>delete</th>
      </tr>
      ";
     // output data of each row
      while($row = $result->fetch_assoc()) {
        ?>
        <tr>
    <td><?php echo $row["id"]?></td>
    <td><?php echo $row["name"]?></td>
    <td><?php echo $row["body"]?></td>
    <td><?php echo $row["priority"]?></td>
    <td><?php echo $row["type"]?></td>
        </td><td>
        <a href='upd.php?id=<?php echo $row["id"];?> '> <i class='fa-solid fa-pen-to-square'></i></a>
         
        </td><td>
        <a href='supp.php?id=<?php echo $row['id'];?> '><i class='fa-solid fa-trash'></i></a> 
        </td></tr>
    <?php    
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    
?>


</body>
</html>