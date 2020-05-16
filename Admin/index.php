<?php
      include "include/header.php";

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <?php
            $count=0;
      $sql="SELECT * FROM  books order by bid DESC "; 
      $result = mysqli_query($con,$sql);
      
      ?>
      <div class="card col-lg-12" style="text-align:center;">
  <div class="card-body">
  <table class="table table-striped">
    <thead>
      <tr>
         <th style="text-align:center;">Serial</th>
        <th style="text-align:center;">Book Name</th>
    <th style="text-align:center;">Author Name</th>
    <th style="text-align:center;">Action</th>
       
      </tr>
    </thead>
  <tbody>
<?php
    if(!empty($result)){
              
    while($row = mysqli_fetch_array( $result )){  
      $count++;
      $book = $row['bookname'];
      $author= $row['author'];
       $catagory= $row['catagory'];
      $bid = $row['bid'];
      ?>

      <!-- fetched information from database
               Variable added -->

      <tr>
       <td><?php  echo $count;  ?></td>
        <td><?php  echo $book ; ?></td>
    <td><?php  echo $author;  ?></td>
    <td style="color:blue;">X</td> 
        
       
      </tr>
      
   
  <?php
      
    }
  }
   ?>
    </tbody>
  </table>
 
</div>
</div>
          
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php

  include "include/footer.php";

  ?>