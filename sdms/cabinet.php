<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
} else{
  if(isset($_POST['submit']))
  {
    $cabinet_no=$_POST['cabinet_no'];
    $cabinet_name=$_POST['cabinet_name'];
    $capacity=$_POST['capacity'];

    $query=mysqli_query($con, "insert into  cabinet(cabinet_no,cabinet_name,capacity) value('$cabinet_no','$cabinet_name','$capacity')");
    if ($query) {
      echo "<script>alert('Saved.');</script>"; 
      echo "<script>window.location.href = 'cabinet.php'</script>";   
      $msg="";
    }
    else
    {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";    
    }
  }
  ?>
  <!DOCTYPE html>
  <html>
  <?php @include("includes/head.php"); ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <?php @include("includes/header.php"); ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php @include("includes/sidebar.php"); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
  
        </section>



        

        <!-- Main content -->

        <section class="content">

                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Cabinet</h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="container-fluid">
            <div class="row ">
              <div class="col-md-12">

                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Add Cabinet</h3>
                  </div>
                  <!-- /.card-header -->

                  
                  <!-- form start -->
                  <form role="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <span style="color: blue"><h5>CABINET DETAILS</h5></span>
                      <hr>
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="cabinet_no">Cabinet No</label>
                          <input type="text" class="form-control" id="cabinet_no" name="cabinet_no" placeholder="Enter Classroom No" required>
                        </div>
                        <div class="form-group col-md-5">
                          <label for="cabinet_name">Cabinet Name</label>
                          <input type="text" class="form-control" id="cabinet_name" name="cabinet_name" placeholder="Enter Classroom Name" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="capacity">Capacity</label>
                          <input type="tnumber" class="form-control" id="capacity" name="capacity" placeholder="capacity"required>
                        </div>
                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
             </div>
                <!-- /.card -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-purple ">
                                <?php $query1=mysqli_query($con,"Select * from cabinet");
                                $totalcust=mysqli_num_rows($query1);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalcust;?></h3>
                                    <p>Total Cabinet</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-add"></i>
                                </div>
                                <a href="cabinet_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <?php $query2=mysqli_query($con,"Select * from students where cabinet='IT3A'");
                                $totalmale=mysqli_num_rows($query2);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalmale;?></h3>

                                    <p>IT3A</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="cabinetlist.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-secondary">
                                <?php $query3=mysqli_query($con,"Select * from students where status='Inactive'");
                                $totalfemale=mysqli_num_rows($query3);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalfemale;?></h3>

                                    <p>Total Inactive Students</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="student_list_id=Inactive.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <?php $query2=mysqli_query($con,"Select * from students where status='Dropout'");
                                $totalmale=mysqli_num_rows($query2);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalmale;?></h3>

                                    <p>Total Dropout Student</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="student_list_id=Dropout.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <?php $query2=mysqli_query($con,"Select * from students where status='Transferee'");
                                $totalmale=mysqli_num_rows($query2);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalmale;?></h3>

                                    <p>Total Transferee Student</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="student_list_id=Transferee.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <?php $query2=mysqli_query($con,"Select * from students where status='Graduate'");
                                $totalmale=mysqli_num_rows($query2);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalmale;?></h3>

                                    <p>Total Graduate Student</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="student_list_id=Graduate.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                  



                        <!-- ./col -->



 
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php @include("includes/footer.php"); ?>

    </div>

    <!-- ./wrapper -->
    <?php @include("includes/foot.php"); ?>
  </body>
  </html>
  <?php
}?>

