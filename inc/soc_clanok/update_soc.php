<?php
require('../config.php');

$clanok = $Clanok->get_clanok();
$soc_update_clanok = $SoC_update_clanok->get_update_soc_clanok();

$db =  new Database();
if(isset($_POST['update_soc'])){
    //$_POST obsahuje údaje zaslané pomocou HTTP POST metódy.
    //Používa na získanie údajov z formulárov odoslaných používateľmi
    $soc_id_clanku = $_POST['soc_id_clanku'];

    $clanok_update = [
        'clanok_nadpis' => $_POST['clanok_nadpis'],
        'clanok_text' => $_POST['clanok_text'],
        'clanok_image' => isset($_FILES['clanok_image']['tmp_name']) && !empty($_FILES['clanok_image']['tmp_name'])
            ? file_get_contents($_FILES['clanok_image']['tmp_name'])
            : null,
        'soc_id_clanku' => $soc_id_clanku,
    ];


    $soc_update = [
        'soc_id_clanku' => $soc_id_clanku,
        'soc_image' => isset($_FILES['soc_image']['tmp_name']) && !empty($_FILES['soc_image']['tmp_name']) ? file_get_contents($_FILES['soc_image']['tmp_name']) : null,
        'soc_nazov' => $_POST['soc_nazov'],
        'soc_jadra' => $_POST['soc_jadra'],
        'soc_pocet_jadier' => $_POST['soc_pocet_jadier'],
        'soc_instrukcna_sada' => $_POST['soc_instrukcna_sada'],
        'soc_l2' => $_POST['soc_l2'],
        'soc_l3' => $_POST['soc_l3'],
        'soc_vyr_proces' => $_POST['soc_vyr_proces'],
        'soc_nazov_gpu' => $_POST['soc_nazov_gpu'],
        'soc_frekvencia_gpu' => $_POST['soc_frekvencia_gpu'],
        'soc_vulkan_verzia' => $_POST['soc_vulkan_verzia'],
        'soc_open_gl_verzia' => $_POST['soc_open_gl_verzia'],
        'soc_open_cl_verzia' => $_POST['soc_open_cl_verzia'],
        'soc_verzia_directx' => $_POST['soc_verzia_directx'],
        'soc_NPU' => $_POST['soc_NPU'],
        'soc_typ_pamate' => $_POST['soc_typ_pamate'],
        'soc_max_roz_obr' => $_POST['soc_max_roz_obr'],
        'soc_max_roz_kamery' => $_POST['soc_max_roz_kamery'],
        'soc_nahravanie_videii' => $_POST['soc_nahravanie_videii'],
        'soc_prehravanie_videii' => $_POST['soc_prehravanie_videii'],
        'soc_video_kodeky' => $_POST['soc_video_kodeky'],
        'soc_audio_kodeky' => $_POST['soc_audio_kodeky'],
        'soc_typ_pamate_ram' => $_POST['soc_typ_pamate_ram'],
        'soc_frekvencia_pamate_ram' => $_POST['soc_frekvencia_pamate_ram'],
        'soc_zbernica' => $_POST['soc_zbernica'],
        'soc_max_vel_pamate' => $_POST['soc_max_vel_pamate'],
        'soc_modem' => $_POST['soc_modem'],
        'soc_4g_podpora' => $_POST['soc_4g_podpora'],
        'soc_5G_podpora' => $_POST['soc_5G_podpora'],
        'soc_max_prenosova_r' => $_POST['soc_max_prenosova_r'],
        'soc_max_nahravacia_r' => $_POST['soc_max_nahravacia_r'],
        'soc_verzia_wifi' => $_POST['soc_verzia_wifi'],
        'soc_verzia_bluetooth' => $_POST['soc_verzia_bluetooth'],
        'soc_navigacia' => $_POST['soc_navigacia'],
        'soc_sirka_pasma' => $_POST['soc_sirka_pasma'],
        'soc_antutu_zariadenie' => $_POST['soc_antutu_zariadenie'],
        'soc_antutu_cpu' => $_POST['soc_antutu_cpu'],
        'soc_antutu_gpu' => $_POST['soc_antutu_gpu'],
        'soc_antutu_mem' => $_POST['soc_antutu_mem'],
        'soc_antutu_ux' => $_POST['soc_antutu_ux'],
        'soc_antutu_vs' => $_POST['soc_antutu_vs'],
        'soc_mark_zariadenie' => $_POST['soc_mark_zariadenie'],
        'soc_mark_benchmark' => $_POST['soc_mark_benchmark'],
        'soc_mark_skore' => $_POST['soc_mark_skore'],
        'soc_geekbench_zariadenie' => $_POST['soc_geekbench_zariadenie'],
        'soc_geekbench_scs' => $_POST['soc_geekbench_scs'],
        'soc_geekbench_mcs' => $_POST['soc_geekbench_mcs']
    ];

    $clanokMapping = array(
        'clanok_nadpis' => 'nadpis',
        'clanok_text' => 'text',
        'clanok_image' => 'clanok_obrazok',
    );

    $socMapping = array(
        'soc_image' => 'soc_obrazok',
        'soc_nazov' => 'soc_nazov',
        'soc_jadra' => 'soc_jadra',
        'soc_pocet_jadier' => 'soc_pocet_jadier',
        'soc_instrukcna_sada' => 'soc_instrukcna_sada',
        'soc_l2' => 'soc_l2',
        'soc_l3' => 'soc_l3',
        'soc_vyr_proces' => 'soc_vyrobny_proces',
        'soc_nazov_gpu' => 'soc_nazov_gpu',
        'soc_frekvencia_gpu' => 'soc_frekvencia_gpu',
        'soc_vulkan_verzia' => 'soc_verzia_vulkan',
        'soc_open_gl_verzia' => 'soc_verzia_open_gl',
        'soc_open_cl_verzia' => 'soc_verzia_open_cl',
        'soc_verzia_directx' => 'soc_verzia_directx',
        'soc_NPU' => 'soc_NPU',
        'soc_typ_pamate' => 'soc_typ_pamate',
        'soc_max_roz_obr' => 'soc_max_rozlis_obr',
        'soc_max_roz_kamery' => 'soc_max_rozlis_kamery',
        'soc_nahravanie_videii' => 'soc_nahravanie_videii',
        'soc_prehravanie_videii' => 'soc_prehravanie_videii',
        'soc_video_kodeky' => 'soc_video_kodeky',
        'soc_audio_kodeky' => 'soc_audio_kodeky',
        'soc_typ_pamate_ram' => 'soc_typ_pamate_ram',
        'soc_frekvencia_pamate_ram' => 'soc_frekvencia_pamate',
        'soc_zbernica' => 'soc_zbernica',
        'soc_max_vel_pamate' => 'soc_max_velkost_pamate',
        'soc_modem' => 'soc_modem',
        'soc_4g_podpora' => 'soc_4g_podpora',
        'soc_5G_podpora' => 'soc_5g_podpora',
        'soc_max_prenosova_r' => 'soc_max_prenosova_r',
        'soc_max_nahravacia_r' => 'soc_max_nahravanie_r',
        'soc_verzia_wifi' => 'soc_verzia_wifi',
        'soc_verzia_bluetooth' => 'soc_verzia_bluetooth',
        'soc_navigacia' => 'soc_navigacia',
        'soc_sirka_pasma' => 'soc_sirka_pasma',
        'soc_antutu_zariadenie' => 'soc_antutu_zariadenie',
        'soc_antutu_cpu' => 'soc_antutu_cpu',
        'soc_antutu_gpu' => 'soc_antutu_gpu',
        'soc_antutu_mem' => 'soc_antutu_mem',
        'soc_antutu_ux' => 'soc_antutu_ux',
        'soc_antutu_vs' => 'soc_antutu_vs',
        'soc_mark_zariadenie' => 'soc_mark_zariadenie',
        'soc_mark_benchmark' => 'soc_mark_benchmark',
        'soc_mark_skore' => 'soc_mark_skore',
        'soc_geekbench_zariadenie' => 'soc_geekbench_zariadenie',
        'soc_geekbench_scs' => 'soc_geekbench_scs',
        'soc_geekbench_mcs' => 'soc_geekbench_mcs',
    );

    foreach ($clanok as $cc) {
        // Skontroluje, že či sa ID `$cc` objektu zhoduje s `$soc_id_clanku`
        if ($cc->id_soc == $soc_id_clanku) {
            foreach ($clanokMapping as $variable => $property) {
                // skontroluje, že či je `$clanok_update[$variable]` prázdna
                if (empty($clanok_update[$variable])) {
                    // pokiaľ je prázdna, tak priradí hodnotu `$cc->$property` `$clanok_update[$variable]`
                    $clanok_update[$variable] = $cc->$property;
                }
            }
        }
    }

    foreach ($soc_update_clanok as $sc) {
        if ($sc->id_soc == $soc_id_clanku) {
            foreach ($socMapping as $variable => $property) {
                if (empty($soc_update[$variable])) {
                    $soc_update[$variable] = $sc->$property;
                }
            }
        }
    }
   

    try{
        $query =  "UPDATE clanok_soc SET nadpis=:clanok_nadpis, text=:clanok_text, clanok_obrazok=:clanok_image  WHERE id_soc=:soc_id_clanku";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($clanok_update);


        $query = "UPDATE soc 
          SET soc_obrazok = :soc_image, soc_nazov = :soc_nazov, soc_jadra = :soc_jadra, soc_pocet_jadier = :soc_pocet_jadier,
              soc_instrukcna_sada = :soc_instrukcna_sada, soc_l2 = :soc_l2, soc_l3 = :soc_l3, soc_vyrobny_proces = :soc_vyr_proces,
              soc_nazov_gpu = :soc_nazov_gpu, soc_frekvencia_gpu = :soc_frekvencia_gpu, soc_verzia_vulkan = :soc_vulkan_verzia,
              soc_verzia_open_gl = :soc_open_gl_verzia, soc_verzia_open_cl = :soc_open_cl_verzia, soc_verzia_directx = :soc_verzia_directx,
              soc_NPU = :soc_NPU, soc_typ_pamate = :soc_typ_pamate, soc_max_rozlis_obr = :soc_max_roz_obr,
              soc_max_rozlis_kamery = :soc_max_roz_kamery, soc_nahravanie_videii = :soc_nahravanie_videii,
              soc_prehravanie_videii = :soc_prehravanie_videii, soc_video_kodeky = :soc_video_kodeky, 
              soc_audio_kodeky = :soc_audio_kodeky, soc_typ_pamate_ram = :soc_typ_pamate_ram,
              soc_frekvencia_pamate = :soc_frekvencia_pamate_ram, soc_zbernica = :soc_zbernica,
              soc_max_velkost_pamate = :soc_max_vel_pamate, soc_modem = :soc_modem, soc_4g_podpora = :soc_4g_podpora, 
              soc_5g_podpora = :soc_5G_podpora, soc_max_prenosova_r = :soc_max_prenosova_r,
              soc_max_nahravanie_r = :soc_max_nahravacia_r, soc_verzia_wifi = :soc_verzia_wifi,
              soc_verzia_bluetooth = :soc_verzia_bluetooth, soc_navigacia = :soc_navigacia, soc_sirka_pasma = :soc_sirka_pasma,
              soc_antutu_zariadenie = :soc_antutu_zariadenie, soc_antutu_cpu = :soc_antutu_cpu, soc_antutu_gpu = :soc_antutu_gpu,
              soc_antutu_mem = :soc_antutu_mem, soc_antutu_ux = :soc_antutu_ux, soc_antutu_vs = :soc_antutu_vs,
              soc_mark_zariadenie = :soc_mark_zariadenie, soc_mark_benchmark = :soc_mark_benchmark, soc_mark_skore = :soc_mark_skore,
              soc_geekbench_zariadenie = :soc_geekbench_zariadenie, soc_geekbench_scs = :soc_geekbench_scs,
              soc_geekbench_mcs = :soc_geekbench_mcs WHERE id_soc = :soc_id_clanku";


        $query_run = $db->conn->prepare($query);
        
        $query_run->execute($soc_update);




        if(isset($_SERVER['HTTP_REFERER'])){
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }else{
            header("Location: ../../admin_panel.php");
        }
        

    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
}else{
    print_r("F");
}
?>