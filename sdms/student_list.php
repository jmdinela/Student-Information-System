<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
 header('location:logout.php');
} 
if(isset($_GET['del']))
{
  mysqli_query($con,"delete from students where id = '".$_GET['id']."'");
  $_SESSION['delmsg']="student deleted !!";
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
              <h1>Student Details</h1>
            </div>
            <div class="col-sm-6">


            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Manage Students</h3>
                  <div class="card-tools">
                  <button id="fileButton" class="btn btn-sm btn-success" ><i class="fas fa-plus" ></i> Upload Data</button>

                  <input type="file" id="fileInput" style="display: none;" />

                    <a href="add_student.php"><button type="button" class="btn btn-sm btn-primary"  ><span style="color: #fff;"><i class="fas fa-plus" ></i>  New Students</span>
                    </button> </a>   
                   <a href="download_student_data.php" class="btn btn-sm btn-warning"><span style="color: #fff;"><i class="fas fa-download
                   " ></i> Download</a>           
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
               
                <div id="editData2" class="modal fade">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Student Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="info_update2">
                        <?php @include("view_student_info.php");?>
                      </div>
                      <div class="modal-footer ">

                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-danger" id="downloadPDF"> Download as PDF</button>
                    
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </div>
                <!--   end modal -->

                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="cabinet">Cabinet:</label>
            <input type="text" class="form-control" id="cabinet" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--   end cabinet_edit modal -->

                <div class="card-body mt-2 " >
                  <table id="example1" class="table table-bordered table-hover">
                    <thead> 
                      <tr> 
                        <th>#</th>
                        <th>Student Image</th>
                        <th>Student Number</th>
                        <th>Student Name</th>
                        <th>Course</th>
                        <th>Cabinet</th>
                        <th>Year & Section </th>
                        <th>Status </th>
                        <th>Action</th>
                      </tr> 
                    </thead> 
                    <tbody>
                      <?php $query=mysqli_query($con,"select * from students");
                      $cnt=1;
                      while($row=mysqli_fetch_array($query))
                      {
                        ?>                  
                        <tr>
                          <td><?php echo htmlentities($cnt);?></td>
                          <td class="align-middle"><a href="#"><img src="studentimages/<?php echo htmlentities($row['studentImage']);?>" width="40" height="40"> </a></td>
                          <td><?php echo htmlentities($row['studentno']);?></td>
                          <td><?php echo htmlentities($row['studentName']);?></td>
                          <td><?php echo htmlentities($row['course']);?></td>
                          <td><?php echo htmlentities($row['cabinet']);?></td>
        
                          <td><?php echo htmlentities($row['year']);?></td>
                          <td>
  <?php
    if ($row['status'] === 'Active') {
      $status_color = 'green';
    } else if ($row['status'] === 'Inactive') {
      $status_color = 'gray';
    } else if ($row['status'] === 'Dropout') {
      $status_color = 'red';
    } else if ($row['status'] === 'Transferee') {
      $status_color = 'orange';
    } else if ($row['status'] === 'Graduate') {
      $status_color = 'blue';
    } else {
      $status_color = 'black';
    }
    echo "<span style='color: $status_color;'>" . htmlentities($row['status']) . "</span>";
  ?>
</td>

                          <td>
                            <button  class=" btn btn-primary btn-xs edit_data" id="<?php echo  $row['id']; ?>" title="click for edit">Edit</i></button>
                            <button  class=" btn btn-success btn-xs edit_data2" id="<?php echo  $row['id']; ?>" title="click for edit">View</i></button>
                            <a href="student_list.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class=" btn btn-danger btn-xs ">Delete</a>
                            
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>

  <!-- ./upload -->

<script>
  document.getElementById("fileButton").addEventListener("click", function() {
    document.getElementById("fileInput").click();
  });
</script>
<script>
const saveChangesButton = document.querySelector('#saveChanges');

saveChangesButton.addEventListener('click', event => {
  const cabinet = document.querySelector('#cabinet').value;
  const recordId = saveChangesButton.dataset.recordId;

  // Make an AJAX request to update the database
  fetch(`update-record.php?id=${recordId}&cabinet=${cabinet}`, {
    method: 'POST'
  })
    .then(response => response.json())
    .then(result => {
      if (result.success) {
        // Hide the modal
        $('#editModal').modal('hide');

        // Update the table cell with the new data
        const row = document.querySelector(`[data-id="${recordId}"]`).parentNode.parentNode;
        row.querySelector('td:first-child').textContent = cabinet
</script>

<!-- ./wrapper -->
  <?php @include("includes/foot.php"); ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $(document).on('click','.edit_data',function(){
        var edit_id=$(this).attr('id');
        $.ajax({
          url:"edit_student.php",
          type:"post",
          data:{edit_id:edit_id},
          success:function(data){
            $("#info_update").html(data);
            $("#editData").modal('show');
          }
        });
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(document).on('click','.edit_data2',function(){
        var edit_id2=$(this).attr('id');
        $.ajax({
          url:"view_student_info.php",
          type:"post",
          data:{edit_id2:edit_id2},
          success:function(data){
            $("#info_update2").html(data);
            $("#editData2").modal('show');
          }
        });
      });
    });
  </script>
  

  <script>

<?php
  // Retrieve the data from the database
  $studentno = $row['studentno'];
  $studentName = $row['studentName'];
  $age = $row['age'];
  $sex = $row['sex'];
  $course = $row['course'];
  $year = $row['year'];
  $status = $row['status'];
  $email = $row['email'];
  $cabinet = $row['cabinet'];
  $parentName = $row['parentName'];
  $relation = $row['relation'];
  $occupation = $row['occupation'];
  $contactno = $row['contactno'];
?>
  document.getElementById("downloadPDF").addEventListener("click", function() {
    var pdf = new jsPDF();

    // Add the content to the PDF
    pdf.text(20, 20, "Student Details");
    pdf.text(20, 30, "Student Number: " + <?php echo json_encode($row['studentno']); ?>);
    pdf.text(20, 40, "Name: " + <?php echo json_encode($row['studentName']); ?>);
    pdf.text(20, 50, "Age: " + <?php echo json_encode($row['age']); ?>);
    pdf.text(20, 60, "Gender: " + <?php echo json_encode($row['sex']); ?>);
    pdf.text(20, 70, "Course: " + <?php echo json_encode($row['course']); ?>);
    pdf.text(20, 80, "Yr & Section: " + <?php echo json_encode($row['year']); ?>);
    pdf.text(20, 90, "Status: " + <?php echo json_encode($row['status']); ?>);
    pdf.text(20, 100, "Email: " + <?php echo json_encode($row['email']); ?>);
    pdf.text(20, 110, "Cabinet: " + <?php echo json_encode($row['cabinet']); ?>);
    pdf.text(20, 120, "Parent Name: " + <?php echo json_encode($row['parentName']); ?>);
    pdf.text(20, 130, "Relationship: " + <?php echo json_encode($row['relation']); ?>);
    pdf.text(20, 140, "Occupation: " + <?php echo json_encode($row['occupation']); ?>);
    pdf.text(20, 150, "Contact No.: 0" + <?php echo json_encode($row['contactno']); ?>);

    // Download the PDF
    pdf.save("student-details.pdf");
  });
</script>








</body>
</html>
