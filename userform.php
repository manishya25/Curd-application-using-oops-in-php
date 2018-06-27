

<?php
if (isset($_GET['id']))
{
include_once "connection.php";
$id=$_GET['id'];
$db=new Connection();
$conn = $db->getConnection();
$result = $conn->prepare("SELECT * FROM user where Id=$id"); 
$result->execute();
$array=$result->Fetch(PDO::FETCH_ASSOC); 


$fname=$array['FirstName'];
$lname=$array['LastName'];
$email=$array['EmailId'];
$mnumber=$array['ContactN'];
}
else{
	$fname="";
	$lname="";
	$email="";
	$mnumber="";
}
?>


<html>
<head>
  <title>User Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

 <center> <h2>user form</h2></center>
 <div class="row">
 	<div class="col-sm-3"></div>
 	 	<div class="col-sm-8">

  <form class="" action="model.php" method="post">
  <div class="form-group">
  First name: <input type="text" class="form-control" value= "<?php echo $fname; ?>" name="fname"><br>
</div>
<div class="form-group">
  Last name: <input type="text" class="form-control" value= "<?php echo $lname; ?>" name="lname"><br>
</div>
<div class="form-group">
  email Id: <input type="email" class="form-control" value= "<?php echo $email; ?>" name="email"><br>
</div>
<div class="form-group">
  ContactN:<input type="tel" class="form-control" value= "<?php echo $mnumber; ?>" name="mnumber"><br>
</div>
<div class="form-group">
  Status:<input  type="checkbox"  name="status" value="1" checked> <br>
</div>
<div class="form-group">
  <input type="hidden" name="id" class="form-control" value="<?php echo $_GET['id'];?>" checked> <br>
</div>
<div class="form-group">
  <?php
  if (isset($_GET['id']))
   {
      
   	?>
  	  <input type="submit"  value="update" name="edit">
  	<?php
  }
  else
  {
  	?>
  	  <input type="submit"  name="create">
<?php
  }
  ?>
</div>
</form>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>

