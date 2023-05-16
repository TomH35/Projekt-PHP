<?php
include('partials/header.php');
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['admin_name'])){
        header("Location:no-permission.php");
    }

?>
<main>
<?php
$clanok = $Clanok->get_clanok();
for ($i=0;$i<count($clanok);$i++){
echo '<div class="row d-flex justify-content-center mt-5 mb-5">';
echo '  <div class="card mb-3" style="max-width: 540px;">';
echo '    <img src="data:image/jpeg;base64,' . base64_encode($clanok[$i]->clanok_obrazok) . '" class="card-img-top" alt="Snapdragon SoC">';
echo '    <div class="card-body">';
echo '      <h5 class="card-title">' . $clanok[$i]->nadpis . '</h5>';
echo '      <p class="card-text">' . $clanok[$i]->text . '</p>';
echo '      <div class="d-flex justify-content-between">';
echo '        <div>';
echo '          <a href="Snapdragon_8_gen_2.php?index=' . $i . '" class="btn custom-button-color custom-button-margin">Čítat ďalej</a>';
echo '        </div>';
echo '        <div>';
echo '          <form action="inc/soc_clanok/delete_soc.php" method="post">';
echo '            <button class="btn custom-button-color custom-button-margin" type="submit" name="delete_soc" value="' . $clanok[$i]->id_soc . '">Vymazať</button>';
echo '          </form>';
echo '        </div>';
echo '      </div>';
echo '    </div>';
echo '  </div>';
echo '</div>';
}

?>
<div class="container text-center mt-3 mb-3">
<a href="admin_panel.php" class = "btn custom-button-color">Späť</a>
</div>
</main>
<?php
include('partials/footer.php');
?>