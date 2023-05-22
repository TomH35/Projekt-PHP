<?php
$clanok = $Clanok->get_clanok();
for ($i=0;$i<count($clanok);$i++){
    echo    '<div class="row d-flex justify-content-center">';
    echo     '<div class="card mb-3" style="max-width: 540px;">';
    echo        '<img src="data:image/jpeg;base64,' . base64_encode($clanok[$i]->clanok_obrazok) . '" class="card-img-top" alt="Snapdragon SoC">';
    echo       '<div class="card-body">';
    echo          '<h5 class="card-title">'.$clanok[$i]->nadpis.'</h5>';
    echo         '<p class="card-text">'.$clanok[$i]->text.'</p>';
    echo           '<a href="Snapdragon_8_gen_2.php?index=' .$clanok[$i]->id_soc. '" class="btn custom-button-color custom-button-margin">Čítat ďalej</a>';
    echo          '</div>';
    echo          '</div>';
    echo        '</div>';
}

?>