<?php 
require_once "../database/config.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="wrapper" style="zoom:90%" !important>
  <?php
      
      $id = @$_GET['id'];
      mysqli_query($con, "DELETE FROM tbl_klsmatkul WHERE id='$id'") or die (mysqli_error($con));
    ?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Berhasil", "Data Kelas Mata Kuliah telah dihapus", "success");
  
  setTimeout(function(){ 
   window.location.href = "../admin_backend_klsmatkul";

  }, 1000);
</script> 
</body>
</html>
