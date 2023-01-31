<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
} else{
  if(isset($_POST['submit']))
  {
    $names=$_POST['names'];
    $age=$_POST['age'];
    $studentno=$_POST['studentno'];
    $sex=$_POST['sex'];
    $year=$_POST['year'];
    $status=$_POST['status'];
    $cabinet=$_POST['cabinet'];
    $parentname=$_POST['parentname'];
    $relation=$_POST['relation'];
    $ocupation=$_POST['ocupation'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $nextphone=$_POST['nextphone'];
    $country=$_POST['country'];
    $district=$_POST['district'];
    $state=$_POST['state'];
    $village=$_POST['village'];
    $photo=$_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"],"studentimages/".$_FILES["photo"]["name"]);
    $query=mysqli_query($con, "insert into  students(studentno,StudentName,year,status,cabinet,age,gender,email,parentName,relation,occupation,country,district,state,village,contactno,nextphone,studentImage) value('$studentno','$names','$year','$status','$cabinet','$age','$sex','$email','$parentname','$relation','$ocupation','$country','$district','$state','$village','$phone','$nextphone','$photo')");
    if ($query) {
      echo "<script>alert('Student has been registered.');</script>"; 
      echo "<script>window.location.href = 'add_student.php'</script>";   
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
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Add Student</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row ">
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Add Student</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <span style="color: brown"><h5>Student details</h5></span>
                      <hr>
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="studentno">Student No.</label>
                          <input type="text" class="form-control" id="studentno" name="studentno" placeholder="Enter student No" required>
                        </div>
                        <div class="form-group col-md-5">
                          <label for="names">Names</label>
                          <input type="text" class="form-control" id="names" name="names" placeholder="Names" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="age">Age</label>
                          <input type="text" class="form-control" id="age" name="age" placeholder="age"required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="sex">Sex</label>
                          <select type="select" class="form-control" id="sex" name="sex"required>
                            <option>Select Sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-2">
                          <label for="age">Year and Section</label>
                          <select type="select" class="form-control" id="year" name="year" required>
                            <option>Select Class</option>
                            <option value="3A">3A</option>
                            <option value=3B>3B</option>
                            <option value="3C">3C</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="age">Status</label>
                          <select type="select" class="form-control" id="status" name="status">
                            <option>Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Dropout">Dropout</option>
                            <option value="Transferee">Transferee</option>
                            <option value="Graduate">Graduate</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="age">Email</label>
                          <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="exampleInputFile">Student Photo</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="" name="photo" id="photo" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="cabinet">Cabinet</label>
                          <input type="text" class="form-control" id="cabinet" name="cabinet" placeholder="Enter Cabinet No." required>
                        </div>

                      </div>
                      <hr>
                      <span style="color: brown"><h5>Parent details</h5></span>
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="parentname">Parent Name.</label>
                          <input type="text" class="form-control" id="parentname" name="parentname" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="relation">Relationship</label>
                          <select type="select" class="form-control" id="relation" name="relation"required>
                            <option>Select Relationship</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Mother">Grandparents</option>
                          </select>
                        </div>

                        <div class="form-group col-md-2">
                          <label for="sex">Ocupation</label>
                          <input type="text" class="form-control" id="ocupation" name="ocupation" placeholder="occupation" required>

                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-3 ">
                          <label for="phone1">Contact Number</label>
                          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"required>
                        </div>

                        </div>
                      </div>
                      <hr>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
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
  </html>
  <?php
}?>
