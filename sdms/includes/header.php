<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

 

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item"> 
      <a class="nav-link" data-toggle="dropdown">
      <div class="user-panel ">
      <?php
      $eid=$_SESSION['sid'];
      $sql="SELECT * from tblusers   where id=:eid ";                                    
      $query = $dbh -> prepare($sql);
      $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);

      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $row)
        {    
          ?>
          <div class="image">
            <img class="img-box"
            src="staff_images/<?php echo htmlentities($row->userimage);?>" width="90px" height="90px" class="user-image"
            alt="User profile picture">
          </div>
          <?php 
        }
      } ?>

    </div>
    </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a href="profile.php" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="changepassword.php" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> settings 
        </a>
        <div class="dropdown-divider"></div>
        <a href="logout.php" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> logout 
        </a>
      </div>
    </li>
  </ul>
</nav>
    <!-- /.navbar -->