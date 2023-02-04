<?php

 require_once('dashboard.php');  
 include "connection.php";
 $conn=mysqli_connect('localhost','root','','sia1');
 $result=mysqli_query($conn,"select * from user");
 

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>info</title>
  <link rel="stylesheet" href="css/footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
 
</head>
<body>
 <div class="container" style="margin-top:50px;">    
    
             <div class="border-bottom my-3"></div>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Add Information
                </button>
                
       <div class="border-bottom my-3"></div>
          <table class="table table-hover">
                  <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Actions</th>
                      </tr>

                </thead>
                    <tbody>
                          <?php while($row=mysqli_fetch_assoc($result)){?>
                      <tr>
                          <td><?php echo $row['id']?></td>
                          <td><?php echo $row['name']?></td>
                          <td><?php echo $row['age']?></td>
                          <td><?php echo $row['gender']?></td>
                          <td><?php echo $row['contact_no']?></td>
                          <td><?php echo $row['email']?></td>
                          <td>

                            <a href="update.php?id=<?php echo $row['id'] ?>"><button class="btn btn-dark">Edit</button></a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Delete</a>
                            
                             
                          </td>
                      </tr>
                          

                          <?php } ?>
                    
                </thead>
              
              </table>
              <?php require_once('addinfo.php'); ?>
              
   </div>x
  </script>
</body>
</html>