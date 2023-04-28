<?php
include('inc/config.php');

?>
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>
            <?php
            $page = $Page ->get_file_name();
             echo $Banner->get_heading($page);
             ?>
             </h6>
            <h2><?php
            $page2 = $Page ->get_file_name();
             echo $Banner->get_heading2($page2);
             ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>