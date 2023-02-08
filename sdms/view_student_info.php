<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');

?>
<div class=" row card-body">
  <?php
  $eid2=$_POST['edit_id2'];
  $ret2=mysqli_query($con,"select * from  students where id='$eid2'");
  while ($row=mysqli_fetch_array($ret2))
  {
    ?> 
    <div class="col-md-4">
      <img src="studentimages/<?php echo htmlentities($row['studentImage']);?>" width="200" height="200">
    </div>
    <div class="col-md-8">
      <table>
         <tr>
          <th>Student Number</th>
          <td>&nbsp;<?php  echo $row['studentno'];?></td>
        </tr>
        <tr>
          <th>Names</th>
          <td><?php  echo $row['studentName'];?></td>
        </tr>
        <tr>
          <th>Age</th>
          <td>&nbsp;<?php  echo $row['age'];?></td>
        </tr>
        <tr>
          <th>Sex</th>
          <td>&nbsp;<?php  echo $row['sex'];?></td>
        </tr>
        <tr>
          <th>Course</th>
          <td><?php  echo $row['course'];?></td>
        </tr>
        <tr>
          <th>Yr & Section</th>
          <td>&nbsp;<?php  echo $row['year'];?></td>
        </tr>
        <tr>
          <th>Status</th>
          <td>&nbsp;<?php  echo $row['status'];?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td>&nbsp;<?php  echo $row['email'];?></td>
        </tr>
        <tr>
          <th>Cabinet</th>
          <td><?php  echo $row['cabinet'];?></td>
        </tr>
        <tr>
          <th>Parent Name</th>
          <td><?php  echo $row['parentName'];?></td>
        </tr>
        <tr>
          <th>Relationship</th>
          <td><?php  echo $row['relation'];?></td>
        </tr><tr>
          <th>Occupation</th>
          <td><?php  echo $row['occupation'];?></td>
        </tr>
        <tr>
          <th>Contact No.</th>
          <td>0<?php  echo $row['contactno'];?></td>
        </tr>
      </table>
    </div>
    <?php 
  } ?>
</div>