<?php
include_once "connection.php";

class ClassCrud
{	
	public $conn;
    public function __construct()
     { 	
        $db=new Connection();
        $this->conn = $db->getConnection();
      }



    public function create($fname,$lname,$email,$mnumber,$status)
      {
        $sql = "INSERT INTO user (`FirstName`, `LastName`, `EmailId`, `ContactN`, `Status`) VALUES ('$fname','$lname','$email','$mnumber','$status')";
        $res = $this->conn->prepare($sql);
        $res->execute(array(':FirstName'=>$fname,':LastName'=>$lname,':EmailId'=>$mnumber,':Status'=>$status));
          if ($res)
           {
 	         echo "data insert";
 	         header('Location:display.php');
            }
         else
            {
 	          echo "please try again";
            }
        }
      
    public function delete($id)
      {
        $sql = "DELETE FROM `user` WHERE `Id` = $id;";
        $res = $this->conn->prepare($sql);
        $res->execute(array());

         if ($res)
          {
 	       echo "data deleted";
           header('Location:display.php');

          }
         else
         {
 	       echo "please try again";
          }
         }
    public function edit($id,$fname,$lname,$email,$mnumber)
        {

         $sql = "UPDATE user SET FirstName='$fname',LastName='$lname',EmailId='$email',ContactN='$mnumber' WHERE Id=$id";
         $res = $this->conn->prepare($sql);
         $res->execute(array());
         if ($res) {
 	     echo "data deleted";
         header('Location:display.php');
        }
        else{
 	   echo "please try again";
        }

}

}

?>