<?php
require('../Database.php');
$db = new Database();

if(isset($_POST['add_soc'])) {
    $clanok_nadpis = $_POST['clanok_nadpis'];
    $clanok_text = $_POST['clanok_text'];
    if (isset($_FILES['clanok_image']['tmp_name']) && !empty($_FILES['clanok_image']['tmp_name'])) {
        $clanok_image = file_get_contents($_FILES['clanok_image']['tmp_name']);
    } else {
        $clanok_image = null;
    }
    // Add the remaining form fields
    $soc_id_clanku = $_POST['soc_id_clanku'];
    if (isset($_FILES['soc_image']['tmp_name']) && !empty($_FILES['soc_image']['tmp_name'])) {
        $soc_image = file_get_contents($_FILES['soc_image']['tmp_name']);
    } else {
        $soc_image = null;
    }
    $soc_nazov = $_POST['soc_nazov'];
    $soc_jadra = $_POST['soc_jadra'];
    $soc_pocet_jadier = $_POST['soc_pocet_jadier'];
    $soc_instrukcna_sada = $_POST['soc_instrukcna_sada'];
    $soc_l2 = $_POST['soc_l2'];
    $soc_l3 = $_POST['soc_l3'];
    $soc_vyr_proces = $_POST['soc_vyr_proces'];
    $soc_nazov_gpu = $_POST['soc_nazov_gpu'];
    $soc_frekvencia_gpu = $_POST['soc_frekvencia_gpu'];
    $soc_vulkan_verzia = $_POST['soc_vulkan_verzia'];
    $soc_open_gl_verzia = $_POST['soc_open_gl_verzia'];
    $soc_open_cl_verzia = $_POST['soc_open_cl_verzia'];
    $soc_verzia_directx = $_POST['soc_verzia_directx'];
    $soc_NPU = $_POST['soc_NPU'];
    $soc_typ_pamate = $_POST['soc_typ_pamate'];
    $soc_max_roz_obr = $_POST['soc_max_roz_obr'];
    $soc_max_roz_kamery = $_POST['soc_max_roz_kamery'];
    $soc_nahravanie_videii = $_POST['soc_nahravanie_videii'];
    $soc_prehravanie_videii = $_POST['soc_prehravanie_videii'];
    $soc_video_kodeky = $_POST['soc_video_kodeky'];
    $soc_audio_kodeky = $_POST['soc_audio_kodeky'];
    $soc_typ_pamate_ram = $_POST['soc_typ_pamate_ram'];
    $soc_frekvencia_pamate_ram = $_POST['soc_frekvencia_pamate_ram'];
    $soc_zbernica = $_POST['soc_zbernica'];
    $soc_max_vel_pamate = $_POST['soc_max_vel_pamate'];
    $soc_modem = $_POST['soc_modem'];
    $soc_4g_podpora = $_POST['soc_4g_podpora'];
    $soc_5G_podpora = $_POST['soc_5G_podpora'];
    $soc_max_prenosova_r = $_POST['soc_max_prenosova_r'];
    $soc_max_nahravacia_r = $_POST['soc_max_nahravacia_r'];
    $soc_verzia_wifi = $_POST['soc_verzia_wifi'];
    $soc_verzia_bluetooth = $_POST['soc_verzia_bluetooth'];
    $soc_navigacia = $_POST['soc_navigacia'];
    $soc_sirka_pasma = $_POST['soc_sirka_pasma'];
    $soc_antutu_zariadenie = $_POST['soc_antutu_zariadenie'];
    $soc_antutu_cpu = $_POST['soc_antutu_cpu'];
    $soc_antutu_gpu = $_POST['soc_antutu_gpu'];
    $soc_antutu_mem = $_POST['soc_antutu_mem'];
    $soc_antutu_ux = $_POST['soc_antutu_ux'];
    $soc_antutu_vs = $_POST['soc_antutu_vs'];
    $soc_mark_zariadenie = $_POST['soc_mark_zariadenie'];
    $soc_mark_benchmark = $_POST['soc_mark_benchmark'];
    $soc_mark_skore = $_POST['soc_mark_skore'];
    $soc_geekbench_zariadenie = $_POST['soc_geekbench_zariadenie'];
    $soc_geekbench_scs = $_POST['soc_geekbench_scs'];
    $soc_geekbench_mcs = $_POST['soc_geekbench_mcs'];

    try {
        // Save the article details
        $query = "INSERT INTO clanok_soc (id_soc, nadpis, text, clanok_obrazok) VALUES (:soc_id_clanku, :clanok_nadpis, :clanok_text, :clanok_image)";
        $stmt = $db->conn->prepare($query);
        $stmt->bindParam(':soc_id_clanku', $soc_id_clanku);
        $stmt->bindParam(':clanok_nadpis', $clanok_nadpis);
        $stmt->bindParam(':clanok_text', $clanok_text);
        $stmt->bindParam(':clanok_image', $clanok_image);
        /*if ($clanok_image && !empty($clanok_image)) {
            $clanokImageData = file_get_contents($clanok_image);
            $stmt->bindParam(':clanok_image', $clanokImageData, PDO::PARAM_LOB);
        } else {
            $stmt->bindValue(':clanok_image', null, PDO::PARAM_NULL);
        }*/
        $stmt->execute();

        // Save the system on a chip (SoC) details
        $query = "INSERT INTO soc (
    id_soc, id_soc_clanok, soc_obrazok, soc_nazov, soc_jadra, soc_pocet_jadier, soc_instrukcna_sada, soc_l2, soc_l3, soc_vyrobny_proces,
    soc_nazov_gpu, soc_frekvencia_gpu, soc_verzia_vulkan, soc_verzia_open_gl, soc_verzia_open_cl, soc_verzia_directx,
    soc_NPU, soc_typ_pamate, soc_max_rozlis_obr, soc_max_rozlis_kamery, soc_nahravanie_videii, soc_prehravanie_videii,
    soc_video_kodeky, soc_audio_kodeky, soc_typ_pamate_ram, soc_frekvencia_pamate, soc_zbernica, soc_max_velkost_pamate,
    soc_modem, soc_4g_podpora, soc_5g_podpora, soc_max_prenosova_r, soc_max_nahravanie_r, soc_verzia_wifi,
    soc_verzia_bluetooth, soc_navigacia, soc_sirka_pasma, soc_antutu_zariadenie, soc_antutu_cpu, soc_antutu_gpu,
    soc_antutu_mem, soc_antutu_ux, soc_antutu_vs, soc_mark_zariadenie, soc_mark_benchmark, soc_mark_skore,
    soc_geekbench_zariadenie, soc_geekbench_scs, soc_geekbench_mcs
) VALUES (
    :soc_id_clanku, :soc_id_clanku, :soc_image, :soc_nazov, :soc_jadra, :soc_pocet_jadier, :soc_instrukcna_sada, :soc_l2, :soc_l3, :soc_vyr_proces,
    :soc_nazov_gpu, :soc_frekvencia_gpu, :soc_vulkan_verzia, :soc_open_gl_verzia, :soc_open_cl_verzia, :soc_verzia_directx,
    :soc_NPU, :soc_typ_pamate, :soc_max_roz_obr, :soc_max_roz_kamery, :soc_nahravanie_videii, :soc_prehravanie_videii,
    :soc_video_kodeky, :soc_audio_kodeky, :soc_typ_pamate_ram, :soc_frekvencia_pamate_ram, :soc_zbernica, :soc_max_vel_pamate,
    :soc_modem, :soc_4g_podpora, :soc_5G_podpora, :soc_max_prenosova_r, :soc_max_nahravacia_r, :soc_verzia_wifi,
    :soc_verzia_bluetooth, :soc_navigacia, :soc_sirka_pasma, :soc_antutu_zariadenie, :soc_antutu_cpu, :soc_antutu_gpu,
    :soc_antutu_mem, :soc_antutu_ux, :soc_antutu_vs, :soc_mark_zariadenie, :soc_mark_benchmark, :soc_mark_skore,
    :soc_geekbench_zariadenie, :soc_geekbench_scs, :soc_geekbench_mcs
)";
$stmt = $db->conn->prepare($query);
$stmt->bindParam(':soc_id_clanku', $soc_id_clanku);
$stmt->bindParam(':soc_id_clanku', $soc_id_clanku);
$stmt->bindParam(':soc_image', $soc_image);
$stmt->bindParam(':soc_nazov', $soc_nazov);
$stmt->bindParam(':soc_jadra', $soc_jadra);
$stmt->bindParam(':soc_pocet_jadier', $soc_pocet_jadier);
$stmt->bindParam(':soc_instrukcna_sada', $soc_instrukcna_sada);
$stmt->bindParam(':soc_l2', $soc_l2);
$stmt->bindParam(':soc_l3', $soc_l3);
$stmt->bindParam(':soc_vyr_proces', $soc_vyr_proces);
$stmt->bindParam(':soc_nazov_gpu', $soc_nazov_gpu);
$stmt->bindParam(':soc_frekvencia_gpu', $soc_frekvencia_gpu);
$stmt->bindParam(':soc_vulkan_verzia', $soc_vulkan_verzia);
$stmt->bindParam(':soc_open_gl_verzia', $soc_open_gl_verzia);
$stmt->bindParam(':soc_open_cl_verzia', $soc_open_cl_verzia);
$stmt->bindParam(':soc_verzia_directx', $soc_verzia_directx);
$stmt->bindParam(':soc_NPU', $soc_NPU);
$stmt->bindParam(':soc_typ_pamate', $soc_typ_pamate);
$stmt->bindParam(':soc_max_roz_obr', $soc_max_roz_obr);
$stmt->bindParam(':soc_max_roz_kamery', $soc_max_roz_kamery);
$stmt->bindParam(':soc_nahravanie_videii', $soc_nahravanie_videii);
$stmt->bindParam(':soc_prehravanie_videii', $soc_prehravanie_videii);
$stmt->bindParam(':soc_video_kodeky', $soc_video_kodeky);
$stmt->bindParam(':soc_audio_kodeky', $soc_audio_kodeky);
$stmt->bindParam(':soc_typ_pamate_ram', $soc_typ_pamate_ram);
$stmt->bindParam(':soc_frekvencia_pamate_ram', $soc_frekvencia_pamate_ram);
$stmt->bindParam(':soc_zbernica', $soc_zbernica);
$stmt->bindParam(':soc_max_vel_pamate', $soc_max_vel_pamate);
$stmt->bindParam(':soc_modem', $soc_modem);
$stmt->bindParam(':soc_4g_podpora', $soc_4g_podpora);
$stmt->bindParam(':soc_5G_podpora', $soc_5G_podpora);
$stmt->bindParam(':soc_max_prenosova_r', $soc_max_prenosova_r);
$stmt->bindParam(':soc_max_nahravacia_r', $soc_max_nahravacia_r);
$stmt->bindParam(':soc_verzia_wifi', $soc_verzia_wifi);
$stmt->bindParam(':soc_verzia_bluetooth', $soc_verzia_bluetooth);
$stmt->bindParam(':soc_navigacia', $soc_navigacia);
$stmt->bindParam(':soc_sirka_pasma', $soc_sirka_pasma);
$stmt->bindParam(':soc_antutu_zariadenie', $soc_antutu_zariadenie);
$stmt->bindParam(':soc_antutu_cpu', $soc_antutu_cpu);
$stmt->bindParam(':soc_antutu_gpu', $soc_antutu_gpu);
$stmt->bindParam(':soc_antutu_mem', $soc_antutu_mem);
$stmt->bindParam(':soc_antutu_ux', $soc_antutu_ux);
$stmt->bindParam(':soc_antutu_vs', $soc_antutu_vs);
$stmt->bindParam(':soc_mark_zariadenie', $soc_mark_zariadenie);
$stmt->bindParam(':soc_mark_benchmark', $soc_mark_benchmark);
$stmt->bindParam(':soc_mark_skore', $soc_mark_skore);
$stmt->bindParam(':soc_geekbench_zariadenie', $soc_geekbench_zariadenie);
$stmt->bindParam(':soc_geekbench_scs', $soc_geekbench_scs);
$stmt->bindParam(':soc_geekbench_mcs', $soc_geekbench_mcs);
$stmt->execute();

    echo "Data has been successfully saved.";
} catch (PDOException $e) {
    // Handle database errors
    echo "Error: " . $e->getMessage();
}
}
?>

