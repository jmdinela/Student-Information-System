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

            <div class="col-lg col-12">
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
                                <a href="cabinet_list.php" class="small-box-footer">View Cabinets <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
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
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="cabinet_no">Cabinet Code</label>
                          <input type="text" class="form-control" id="cabinet_no" name="cabinet_no" placeholder="Enter Cabinet Code" required>
                        </div>
                        <div class="form-group col-md-5">
                          <label for="cabinet_name">Cabinet Name</label>
                          <input type="text" class="form-control" id="cabinet_name" name="cabinet_name" placeholder="Enter Cabinet Name" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="capacity">Capacity</label>
                          <input type="tnumber" class="form-control" id="capacity" name="capacity" placeholder="capacity"required>
                        </div>
                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    </div>
                  </form>
                </div>
             </div>
                <!-- /.card -->



<!-- ./col -->
                    
                        



 
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>

              <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Manage Cabinet</h3>
                  <div class="card-tools">         
                  </div>
                </div>
                <!-- /.card-header -->
                <div id="editData" class="modal fade">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Student details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="info_update">
                        <?php @include("edit_student.php");?>
                      </div>
                      <div class="modal-footer ">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </div>
                <!--   end modal -->
               
                <div class="card-body mt-2 " >
                  <table id="example1" class="table table-bordered table-hover">
                    <thead> 
                      <tr> 
                        <th>#</th>
                        <th>Cabinet Number</th>
                        <th>Cabinet Name</th>
                        <th>Capacity</th>
                        <th>Action</th>
                      </tr> 
                    </thead> 
                    <tbody>
                      <?php $query=mysqli_query($con,"select * from cabinet");
                      $cnt=1;
                      while($row=mysqli_fetch_array($query))
                      {
                        ?>                  
                        <tr>
                          <td><?php echo htmlentities($cnt);?></td>
                          <td><?php echo htmlentities($row['cabinet_no']);?></td>
                          <td><?php echo htmlentities($row['cabinet_name']);?></td>
                          <td><?php echo htmlentities($row['capacity']);?></td>

                          <td>
                            <a href="cabinet_list.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class=" btn btn-danger btn-xs ">Delete</a>
                          </td>
                        </tr>
                        <?php $cnt=$cnt+1;
                      } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
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
  <?php
}?>

