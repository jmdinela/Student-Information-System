<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
  $sid=$_SESSION['edid']; 
  $studentno=$_POST['studentno'];
  $studentName=$_POST['studentName'];
  $age=$_POST['age'];
  $course=$_POST['course'];
  $year=$_POST['year'];
  $status=$_POST['status'];
  $cabinet=$_POST['cabinet'];
  $sex=$_POST['sex'];
  
  $sql="update students set studentno='$studentno',studentName='$studentName',age='$age',course='$course',year='$year',status='$status',cabinet='$cabinet',sex='$sex' where id='$sid'";
  $query = mysqli_query($con, $sql);
  if ($query) {
    echo "<script>alert('updated successfull.');</script>";
    echo "<script>window.location.href ='student_list.php'</script>";
  }else{
    echo "<script>alert('something went wrong, please try again later');</script>";
  }
}

if(isset($_POST['save']))
{
  $sid=$_SESSION['edid']; 
  $parentName=$_POST['parentName'];
  $relation=$_POST['relation'];
  $occupation=$_POST['occupation'];
  $contactno=$_POST['contactno'];
  $email=$_POST['email'];
  $sql="update students set parentName='$parentName',relation='$relation',occupation='$occupation',contactno='$contactno',email='$email' where id='$sid'";
  $query = mysqli_query($con, $sql);
  if ($query) {
    echo "<script>alert('updated successfull.');</script>";
    echo "<script>window.location.href ='student_list.php'</script>";
  }else{
    echo "<script>alert('something went wrong, please try again later');</script>";
  }
}


if(isset($_POST['save2']))
{
  $sid=$_SESSION['edid'];
  $studentimage=$_FILES["studentimage"]["name"];
  move_uploaded_file($_FILES["studentimage"]["tmp_name"],"studentimages/".$_FILES["studentimage"]["name"]);
  $sql="update students set studentImage='$studentimage' where id='$sid' ";
  $query = mysqli_query($con, $sql);
  if ($query) {
    echo "<script>alert('updated successfull.');</script>";
    echo "<script>window.location.href ='student_list.php'</script>";
  }else{
    echo "<script>alert('something went wrong, please try again later');</script>";
  }
}
?>





<!-- Content Wrapper. Contains page content -->
<div class="card-body">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
       <?php
       $eid=$_POST['edit_id'];
       $ret=mysqli_query($con,"select * from  students where id='$eid'");
       $cnt=1;
       while ($row=mysqli_fetch_array($ret))
       {
         $_SESSION['edid']=$row['id']; 
         ?>
         <div class="col-md-3">
           <!-- Profile Image -->
           <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="img-circle"
                src="studentimages/<?php echo htmlentities($row['studentImage']);?>" width="150" height="150" class="user-image"
                alt="User profile picture">
              </div>

              <h3 class="profile-username text-center"><?php  echo $row['studentName'];?></h3>



              <p class="text-muted text-center"><strong></strong></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Email</b> <a class="float"><?php  echo $row['email'];?></a>
                </li>
                <li class="list-group-item">
                  <b>Contact No</b> <a class="float-right"><?php  echo $row['contactno'];?> </a>
                </li>
                
              </ul>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item">Registration Detail</li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="companydetail">
                <form method="post" action="" enctype="multipart/form-data">
  <div class="card-body">

  <div class="row">
    <div class="form-group col-md-6">
      <label for="studentno">Student Number</label>
      <input type="text" class="form-control" id="studentno" name="studentno" value="<?php echo $row['studentno'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="studentName">Student Name</label>
      <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $row['studentName'];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="age">Age</label>
      <input type="text" class="form-control" id="age" name="age" value="<?php echo $row['age'];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="course">Course</label>
      <select type="select" class="form-control" id="course" name="course">
                            <option><?php echo $row['course'];?></option>
                            <option value="BSIT">Bachelor of Science in information Technology</option>
                            <option value="BSCS">Bachelor of Science in Computer Science</option>
                          </select>
    </div>
    <div class="form-group col-md-4">
      <label for="year">Yr & Section</label>
      <select type="select" class="form-control" id="year" name="year" value="<?php echo $row['year'];?>">
                            <option>Select Class</option>
                            <option value="1A">1A</option>
                            <option value=1B>1B</option>
                            <option value="1C">1C</option>
                            <option value="2A">2A</option>
                            <option value=2B>2B</option>
                            <option value="2C">2C</option>
                            <option value="3A">3A</option>
                            <option value=3B>3B</option>
                            <option value="3C">3C</option>
                            <option value="4A">4A</option>
                            <option value=4B>4B</option>
                            <option value="4C">4C</option>
                          </select>
    </div>
    <div class="form-group col-md-4">
      <label for="status">Status</label>
      <select type="select" class="form-control" id="status" name="status" placeholder="<?php echo $row['status'];?>">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Dropout">Dropout</option>
                            <option value="Transferee">Transferee</option>
                            <option value="Graduate">Graduate</option>
                          </select>
    </div>
    <div class="form-group col-md-4">
      <label for="cabinet">Cabinet</label>
      <input type="text" class="form-control" id="cabinet" name="cabinet" value="<?php echo $row['cabinet'];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="sex">Sex</label>
      <select type="select" class="form-control" id="sex" name="sex" placeholder="<?php echo $row['sex'];?>">
                            
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Prefer not to Say</option>
                          </select>
    </div>
  </div>
 </div>
  <!-- /.card-body -->

  <div class="modal-footer center">
    <input type="submit" name="submit" value="Save Changes" class="btn btn-primary">
  </div>
</form>

       
              <!-- /.tab-pane -->
              <div class=" tab-pane" id="parents">
                <form role="form" id=""  method="post" enctype="multipart/form-data" class="form-horizontal" >

                  <div class="row">
                    <div class="form-group col-md-4">
                     <label for="companyname">Parent Names</label>
                     <input name="parentName" class="form-control" id="parentName"  value="<?php  echo $row['parentName'];?>" required>
                   </div>
                   <!-- /.form-group -->
                   <div class="form-group col-md-4">
                     <label for="companyname">Relationship</label>
                     <input name="relation" class="form-control" id="relation"  value="<?php  echo $row['relation'];?>" required>
                   </div>
                   <!-- /.form-group -->

                   <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation">Occupation</label>
                      <input name="occupation" class="form-control" id="occupation" value="<?php  echo $row['occupation'];?>" required>
                    </div>        
                  </div>
                  <!-- /.col -->
                </div><!-- ./row -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Phone No.</label>
                      <input class="form-control" name="contactno"  value="<?php  echo $row['contactno'];?>"required>
                    </div>        
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Email</label>
                      <input class="form-control" name="email" value="<?php  echo $row['email'];?>"  required>
                    </div>        
                  </div>
                  <!-- /.col --> 
                </div>

                <!-- /.card-body -->
                <div class="modal-footer text-right">
                  <button type="submit" name="save" class="btn btn-primary">Save Changes</button>
                </div>

              </form>
            </div>

            <!-- /.tab-pane -->

            <div class=" tab-pane" id="change">
             <div class="row">
              <form role="form" id=""  method="post" enctype="multipart/form-data" class="form-horizontal" >
                <div class="form-group">
                  <label>Upload Image</label>
                  <input type="file" class="" name="studentimage" value="" required>
                </div>  

                <div class="modal-footer text-right">
                  <button type="submit" name="save2" class="btn btn-primary">Update</button>
                </div>

              </form>
            </div>
          </div>

            </form>
          </div>
          <!-- /.tab-pane -->
          <?php  
        }?>
      </div>
      <!-- /.tab-content -->
    </div><!-- /.card-body -->
  </section>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->