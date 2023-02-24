<?php 
  
  include('connect.php');
  $id     = $_GET['id'];
  $pilihan = $_GET['pilihan'];
  $query  = "SELECT * FROM beasiswa WHERE id = $id LIMIT 1";
  $result = mysqli_query($con, $query);
  $row    = mysqli_fetch_array($result);
  if($pilihan==0){
    $update = "UPDATE beasiswa SET pilihan = '1' WHERE id = '$id'";
  }
  elseif ($pilihan==1) {
     $update = "UPDATE beasiswa SET pilihan = '0' WHERE id = '$id'";
  }
  if($con->query($update)){
    header("location: database.php");
  }
  ?>