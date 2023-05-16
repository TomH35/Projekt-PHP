<?php
include('partials/header.php');
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['admin_name'])){
        header("Location:no-permission.php");
    }

?>
<main>
<div class= "container mt-5 mb-5 d-flex justify-content-center">
<div class= "row mt-5 mb-5">
<div class= "col-sm-6 mt-5 mb-5">
<div class="card mb-5 mt-5" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/add-g273330623_1280.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Pridať alebo upraviť článok</h5>
        <p class="card-text"></p>
        <a href="admin_pridavanie.php" class="btn custom-button-color custom-button-margin">Pridať článok</a>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-sm-6 mt-5 mb-5">
  <div class="card mb-5 mt-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/trash-g0d0eff27b_1280.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Zmazať článok</h5>
          <p class="card-text"></p>
          <a href="admin_mazanie.php" class="btn custom-button-color custom-button-margin">Zmazať článok</a>
        </div>
      </div>
    </div>
  </div>


</div>
</div>
</div>
<div class="container d-flex justify-content-center mt-3 mb-3">
  <a href="inc/admin_login/Admin_logout.php" class = "btn custom-button-color">Logout</a>
</div>
</main>
<?php
include('partials/footer.php');
?>