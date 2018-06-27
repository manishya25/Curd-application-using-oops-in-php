<?PHP
include_once "connection.php";

$db=new Connection();
$conn = $db->getConnection();
$result = $conn->prepare("SELECT * FROM user"); 
$result->execute();
$array=$result->FetchAll(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Read operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
 
<div class="container">
  <h2>List of Users</h2>
 
  <div ><a href="userform.php" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Create New User</a></div>
  <table class="table table-striped table-responsive">
    <thead>
      <tr>
      	<th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Status</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    	<?PHP

    	foreach ($array as $array)
    
    {
    	?>
    	<tr>
           <td><?php echo $array['Id']; ?></td>
           <td><?php echo $array['FirstName']; ?></td>
           <td><?php echo $array['LastName'];?></td>
           <td><?php echo $array['EmailId']; ?></td>
           <td><?php echo $array['ContactN']; ?></td>
           <td><?php echo $array['Status']; ?></td>

     
    <td>
       	<a href="userform.php?id=<?php echo($array['Id']) ?>">
      <button type="submit" id="edit"  name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</button>
        </a>
     </td>
      <td>
      <a href="model.php?deleteid=<?php echo($array['Id']) ?>" onclick="return confirm('Are you sure?')">
      <button  type="submit" id="delete"  name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete </span></button>
      </a>
    </td>
     </tr>
     <?php
     
}
?>
    
  
    </tbody>
  </table>
</div>
</body>
</html>
