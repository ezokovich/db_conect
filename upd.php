<?php error_reporting (E_ALL ^ E_NOTICE);?> 
<?php 
require_once('sec.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <title>Document</title>
</head>
<body>
<form  method="post">
        
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>
        <label for="priority">priority</label>
        <select id="priority" name="priority">
            <option value="1">Low</option>
            <option value="2">Medium</option>
            <option value="3">High</option>
        </select>
        <fieldset>
            <legend>type</legend>
         <label>
             <input type="radio" name="type" value="1" checked>Complaint
         </label>
         <br>
         <label>
             <input type="radio" name="type" value="2">Sujection
         </label>
        </fieldset>
        
        <br>
        <button>enregistrer</a></button>
    </form>
    <?php 
     if(isset($_GET["id"]))
     {
       $id = $_GET["id"];
       $name = $_POST["name"];
       $message = $_POST["message"];
       $priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
       $type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
 
       
         $req=$conn->query("UPDATE message SET name='$name',body='$message',priority='$priority',type='$type' WHERE id=$id");
         
     }
     if(empty( $req)){
        echo "set your modification ";
        
      }
      else {
      
        echo "<button href='seco.php'?> <a href='seco.php'> afficher</button>";
      }
     ?>
    
</body>
</html>