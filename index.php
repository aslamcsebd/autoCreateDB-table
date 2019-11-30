<?php 
   include('connection.php'); 
   $conn=DB_connect();
   $sql="select * from item_list";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="ISO-8859-1">
      <title>eCommerce</title>
      <!-- <meta http-equiv="refresh" content="5" /> -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
   </head>

   <body>

      <!-------------- navbar  -------------->
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
         <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="">Item Name<span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('add_category') }}">Item Name 2</a>
                  </li>                  
               </ul>
            </div>
      </nav>
      <div class="wrapper">
         <div class="container-fluid">
            <div class="row justify-content-center mt-4">
               <div class="col-6">
                  <div class="card">
                      <div class="card-header bg-success">Product list</div>
                         <?php if(isset($_SESSION['deleteItem'])) { ?>
                           <div class="alert alert-danger">
                              <?php echo $_SESSION['deleteItem']?>
                           </div>
                        <?php } ?>
                      <div class="card-body">
                        <table class="table table-striped table-dark">
                          <thead>
                            <tr>
                              <th>SL. No</th>
                              <th>Item Name</th>
                              <th>Action</th>                  
                            </tr>
                            <?php $i=1 ?>                            
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                               <tr>
                                 <td><?php echo $i ?></td>
                                 <td><?php echo $row['item_name']; ?></td>
                                 <td>
                                    <div class="btn-group" role="group">
                                       <a class="btn btn-info" onclick="return confirm('Are you sure?')" href="action.php?id=<?php echo $row['id']; ?>&itemName=<?php echo $row['item_name']; ?>">Delete</a>
                                    </div>                           
                                 </td>
                               </tr>
                            <?php $i++ ?>                            

                           <?php } ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
               </div>
               <div class="col-4">
                  <div class="card">
                     <div class="card-header bg-success">
                        Add Product
                     </div> 

                     <?php if(isset($_SESSION['confirmItem'])) { ?>
                        <div class="alert alert-success">
                           <?php echo $_SESSION['confirmItem']?>
                        </div>
                     <?php } ?> 

                     <div class="card-body">
                        <form action="action.php" method="post">
                           <div class="form-group">
                              <label>Product Name</label>
                              <input type="text" class="form-control" name="itemName" placeholder="Product Name">
                           </div>                               
                           <button type="submit" name="submit" class="btn btn-info">Add product</button>
                        </form>                 
                     </div>               
                  </div>            
               </div>
            </div>
         </div>         
      </div>























      <!-- Footer -->
      <footer class="footer">
         <div class="text-center py-2">© 2019 Copyright:
            <a href="https://css-tricks.com/couple-takes-sticky-footer/" target="_blank"> Footer Design Click here</a>
         </div>    
      </footer>
      <!-- Footer -->
   </body>
</html>

<?php unset($_SESSION['confirmItem']); ?>
<?php unset($_SESSION['deleteItem']); ?>
