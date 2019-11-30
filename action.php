<?php include('connection.php'); 

   $conn=DB_connect();   

   if (isset($_POST['submit'])) {
      
      $itemName = $_POST['itemName'];

      $sql="insert into item_list (id,item_name) values (null,'$itemName')";
      $result=mysqli_query($conn,$sql);

         if ($result) {
            $sql2="CREATE TABLE $itemName (
               id int NOT NULL AUTO_INCREMENT,
               first varchar(20),
               second varchar(20),
               PRIMARY KEY(id)         
            )";         
         $result2=mysqli_query($conn,$sql2);

         $_SESSION['confirmItem']='Product add successfully';
         }
   }

   if (isset($_GET['id'])) {
      
      $itemID = $_GET['id'];       //price id
      $itemName = $_GET['itemName'];       //price id

      $sql="delete from item_list where id=$itemID";
      $result=mysqli_query($conn,$sql);

      if ($result) {

         $sql2 = "DROP TABLE $itemName";        
         $result=mysqli_query($conn, $sql2);
      }

      $_SESSION['deleteItem']='Product deleted successfully';
   }

   header("Location: index.php");


?>











