
<?php
include('class_crud.php');
$xyz= new ClassCrud();

if(isset($_POST['create']))
{  
	

    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $mnumber= $_POST['mnumber'];
    $status=1;

$res = $xyz->create($fname,$lname,$email,$mnumber,$status);
}
 elseif(isset($_POST['edit'])){ 
 	$id=$_POST['id'];
	$fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $mnumber= $_POST['mnumber'];
    $status=1;
   
  $xyz->edit($id,$fname,$lname,$email,$mnumber,$status);
}
elseif(isset($_GET['deleteid']))
 {	

 	$id=$_GET['deleteid'];
 	echo "$id";
 	

    $xyz->delete($id);
}
  ?>
