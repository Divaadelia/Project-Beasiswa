<?php 
  
  include('connect.php');
  $id     = $_GET['id'];
  $status = $_GET['status_ajuan'];
  $query  = "SELECT * FROM beasiswa WHERE id = $id LIMIT 1";
  $result = mysqli_query($con, $query);
  $row    = mysqli_fetch_array($result);
  if($status==0){
    $update = "UPDATE beasiswa SET status_ajuan = '1' WHERE id = '$id'";
  }
  elseif ($status==1) {
     $update = "UPDATE beasiswa SET status_ajuan = '0' WHERE id = '$id'";
  }
  if($con->query($update)){
    header("location: database.php");
  }
  ?>