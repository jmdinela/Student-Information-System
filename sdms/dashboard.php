<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
header('location:logout.php');
} 
?>
<!DOCTYPE html>
<html>
<?php @include("includes/head.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php @include("includes/header.php"); ?>
        <!-- Main Sidebar Container -->
        <?php @include("includes/sidebar.php"); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-purple ">
                                <?php $query1=mysqli_query($con,"Select * from students");
                                $totalcust=mysqli_num_rows($query1);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalcust;?></h3>
                                    <p>Total Students</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-add"></i>
                                </div>
                                <a href="student_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <?php $query2=mysqli_query($con,"Select * from students where status='Active'");
                                $totalmale=mysqli_num_rows($query2);
                                ?>
                                <div class="inner">
                                    <h3><?php echo $totalmale;?></h3>

                                    <p>Total Active Student</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="student_list_id=Active.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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

        <!-- /.Cabinet -->
                        <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Cabinet</h1>
                        </div>
                    </div><!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header --> 
            <div class="container-fluid">
           <div class="row">

  <?php
  $query = mysqli_query($con, "Select distinct cabinet from students ORDER BY cabinet");
  while ($cabinet = mysqli_fetch_assoc($query)) {
    $cabinet_id = $cabinet['cabinet'];
    $cabinet_name = $cabinet['cabinet_name'];
    $query2 = mysqli_query($con, "Select * from students where cabinet='$cabinet_id'");
    $total = mysqli_num_rows($query2);

    if ($total > 50) {
      $bg_color = "bg-red";
    } elseif ($total > 25) {
      $bg_color = "bg-yellow";
    } else {
      $bg_color = "bg-green";
    }
    ?>
    <div class="col-lg col-4">
      <div class="small-box <?php echo $bg_color; ?>" onclick="toggleStudentList('<?php echo $cabinet_id; ?>')">
        <div class="inner">
          <h3><?php echo $total; ?></h3>
          <p>Cabinet: <?php echo $cabinet_id; ?></p>
        </div>
      </div>
      <div id="student-list-<?php echo $cabinet_id; ?>" class="student-list">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Student Image</th>
              <th>Student Number</th>
              <th>Student Name</th>
              <th>Course</th>
              <th>Cabinet</th>
              <th>Year & Section</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $cnt = 1;
            while ($row = mysqli_fetch_array($query2)) {
              ?>
              <tr>
                <td><?php echo htmlentities($cnt); ?></td>
                <td class="align-middle"><a href="#"><img src="studentimages/<?php echo htmlentities($row['studentImage']); ?>" width="40" height="40"> </a></td>
                <td><?php echo htmlentities($row['studentno']); ?></td>
                <td><?php echo htmlentities($row['studentName']); ?></td>
                <td><?php echo htmlentities($row['course']); ?></td>
                <td><?php echo htmlentities($row['cabinet']); ?></td>
                <td><?php echo htmlentities($row['year']); ?></td>
                <td><?php echo htmlentities($row['status']); ?></td>
              </tr>
              <?php $cnt = $cnt + 1;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php } ?>
</div>



                
                

<!-- ./col -->
<!-- ./col -->

                        <!-- ./col -->

                        <!-- ./col -->
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div>
            <!-- /.container-fluid -->
            
        </section>
    </div>

    
    <!-- /.content-wrapper -->
    <?php @include("includes/footer.php"); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php @include("includes/foot.php"); ?>
</body>
<style>
  .student-list {
    display: none;
  }

  .student-list.active {
    display: block;
  }
</style>
<script>
  function toggleStudentList(cabinetId) {
    var studentList = document.getElementById('student-list-' + cabinetId);
    studentList.classList.toggle('active');
  }
  
</script>
<script>
$(document).ready(function(){
    $('#studentModal').on('hidden.bs.modal', function () {
        $(this).removeData('bs.modal');
    });
});
$(document).ready(function(){
    $('#studentModal').on('mouseleave', function () {
        $('#studentModal').modal('hide');
    });
});
</script>
</html>
