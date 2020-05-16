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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Book</li>
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
         <div class="card col-lg-12">
           <div class="card-body">
             <div class="card col-lg-8" style="margin:0 auto;">
            <div class="card-body">
               <h2>Add new books from here</h2>
               <form action="database.php" method="POST">
                  <div class="form-group">
                    <label >Book ID:</label>
                    <input type="text" class="form-control" placeholder="Enter bid" name="bid">
                  </div>
                  <div class="form-group">
                    <label >Book Name:</label>
                    <input type="text" class="form-control" placeholder="Enter bookname" name="bookname">
                  </div>
                  <div class="form-group">
                    <label >Author Name:</label>
                    <input type="text" class="form-control" placeholder="Enter author name" name="author">
                  </div>
                  <div class="form-group">
                    <label >Book Category:</label>
                    <input type="text" class="form-control" placeholder="Enter category" name="catagory">
                  </div>
                  <div class="form-group">
                    <label >Book PDF Address:</label>
                    <input type="text" class="form-control" placeholder="Enter pdf link" name="address">
                  </div>
                  
                  
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
              
            </div>
            
          </div>
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