<?php
include('partials/header.php');
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['admin_name'])){
        header("Location:no-permission.php");
    }

?>
<main class="mt-5 mb-5">
        <section class="container">

          <!--formular-->

          <div class = "d-flex justify-content-center">

          <div class="card w-50">
        <div class="card-body">
        <h2 class="text-center card-title"> <strong>Vytvoriť článok</strong></h2>
        <p class="card-text"><form class="needs-validation" action="inc/soc_clanok/create_soc.php" method="post" enctype="multipart/form-data" novalidate>
                <div>
                  <label for="clanok_nadpis" class="form-label">nádpis</label>
                  <input type="text" name="clanok_nadpis" class="form-control" maxlength="45" id="clanok_nadpis" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať nádpis
                  </div>
                </div>

                <div class="mt-3">
                  <label for="clanok_text">Text článku</label>
                  <textarea id ="clanok_text" name="clanok_text" class="form-control"></textarea>
                  <div class="valid-feedback">
                  </div>
                    <div class="invalid-feedback">
                      Musíte zadať text článku
                    </div>
                </div>

                <div class="mt-3">
                  <label for="clanok_image" class="form-label">Obrázok článku</label>
                  <input type="file" name="clanok_image" class="form-control" id="clanok_image">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                    Musíte vložiť obrázok
                  </div>
                </div>

                <h2 class="text-center card-title mt-3"> <strong>Údaje o SoC</strong></h2>


                <div class="mt-3">
                  <label for="soc_id_clanku" class="form-label">ID Článku</label>
                  <input type="number" name="soc_id_clanku" class="form-control" maxlength="45" id="soc_id_clanku" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať ID Článku
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_image" class="form-label">Obrázok pre SoC</label>
                  <input type="file" name="soc_image" class="form-control" id="soc_image">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                    Musíte vložiť obrázok
                  </div>
                </div>


                <div class="mt-3">
                  <label for="soc_nazov" class="form-label">Názov SoC</label>
                  <input type="text" name="soc_nazov" class="form-control" maxlength="45" id="soc_nazov" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať názov
                  </div>
                </div>


                <div class="mt-3">
                  <label for="soc_jadra">Jádra SoC</label>
                  <textarea id ="soc_jadra" name="soc_jadra" class="form-control"><br><br><br></textarea>
                  <div class="valid-feedback">
                  </div>
                    <div class="invalid-feedback">
                      Musíte zadať informácie
                    </div>
                </div>

                <div class="mt-3">
                  <label for="soc_pocet_jadier" class="form-label">Počet jadier SoC</label>
                  <input type="text" name="soc_pocet_jadier" class="form-control" maxlength="45" id="soc_pocet_jadier">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať počet jadier
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_instrukcna_sada" class="form-label">Inštrukčná sada SoC</label>
                  <input type="text" name="soc_instrukcna_sada" class="form-control" maxlength="45" id="soc_instrukcna_sada">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať inštrukčnú sadu
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_l2" class="form-label">L2 cache SoC</label>
                  <input type="text" name="soc_l2" class="form-control" maxlength="45" id="soc_l2">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať L2 cache
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_l3" class="form-label">L3 cache SoC</label>
                  <input type="text" name="soc_l3" class="form-control" maxlength="45" id="soc_l3">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať L3 cache
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_vyr_proces" class="form-label">Výrobný proces SoC</label>
                  <input type="text" name="soc_vyr_proces" class="form-control" maxlength="45" id="soc_vyr_proces">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať výrobný proces
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_nazov_gpu" class="form-label">Názov GPU SoC</label>
                  <input type="text" name="soc_nazov_gpu" class="form-control" maxlength="45" id="soc_nazov_gpu">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať názov gpu
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_frekvencia_gpu" class="form-label">Frekvencia GPU SoC</label>
                  <input type="text" name="soc_frekvencia_gpu" class="form-control" maxlength="45" id="soc_frekvencia_gpu">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať frekvenciu GPU
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_vulkan_verzia" class="form-label">Vulkan verzia SoC</label>
                  <input type="text" name="soc_vulkan_verzia" class="form-control" maxlength="45" id="soc_vulkan_verzia">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu vulkanu
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_open_gl_verzia" class="form-label">OpenGL verzia SoC</label>
                  <input type="text" name="soc_open_gl_verzia" class="form-control" maxlength="45" id="soc_open_gl_verzia">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu OpenGL
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_open_cl_verzia" class="form-label">OpenCL verzia SoC</label>
                  <input type="text" name="soc_open_cl_verzia" class="form-control" maxlength="45" id="soc_open_cl_verzia">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu OpenCL
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_verzia_directx" class="form-label">DirectX verzia SoC</label>
                  <input type="text" name="soc_verzia_directx" class="form-control" maxlength="45" id="soc_verzia_directx">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu DirectX
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_NPU" class="form-label">NPU SoC</label>
                  <input type="text" name="soc_NPU" class="form-control" maxlength="45" id="soc_NPU">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať NPU
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_typ_pamate" class="form-label">Typ pamäte SoC</label>
                  <input type="text" name="soc_typ_pamate" class="form-control" maxlength="45" id="soc_typ_pamate">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať typ pamäte
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_max_roz_obr" class="form-label">Max rozlíšenie obrazovky SoC</label>
                  <input type="text" name="soc_max_roz_obr" class="form-control" maxlength="45" id="soc_max_roz_obr">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať max rozlišenie obrazovky
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_max_roz_kamery" class="form-label">Max rozlíšenie kamery SoC</label>
                  <input type="text" name="soc_max_roz_kamery" class="form-control" maxlength="45" id="soc_max_roz_kamery">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať max rozlíšenie kamery
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_nahravanie_videii" class="form-label">Nahrávanie videií SoC</label>
                  <input type="text" name="soc_nahravanie_videii" class="form-control" maxlength="45" id="soc_nahravanie_videii">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať nahravanie videii
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_prehravanie_videii" class="form-label">Prehrávanie videií SoC</label>
                  <input type="text" name="soc_prehravanie_videii" class="form-control" maxlength="45" id="soc_prehravanie_videii">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať prehravanie videii
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_video_kodeky" class="form-label">Video kodeky SoC</label>
                  <input type="text" name="soc_video_kodeky" class="form-control" maxlength="45" id="soc_video_kodeky">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať video kodeky
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_audio_kodeky" class="form-label">Audio kodeky SoC</label>
                  <input type="text" name="soc_audio_kodeky" class="form-control" maxlength="45" id="soc_audio_kodeky">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať audio kodeky
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_typ_pamate_ram" class="form-label">Typ pamäte RAM SoC</label>
                  <input type="text" name="soc_typ_pamate_ram" class="form-control" maxlength="45" id="soc_typ_pamate_ram">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať typ pamäte RAM
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_frekvencia_pamate_ram" class="form-label">Frekvencia pamäte RAM SoC</label>
                  <input type="text" name="soc_frekvencia_pamate_ram" class="form-control" maxlength="45" id="soc_frekvencia_pamate_ram">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať frekvenciu pamäte RAM
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_zbernica" class="form-label">Zbernica SoC</label>
                  <input type="text" name="soc_zbernica" class="form-control" maxlength="45" id="soc_zbernica">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať zbernicu SoC
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_max_vel_pamate" class="form-label">Max velkosť pamäte RAM SoC</label>
                  <input type="text" name="soc_max_vel_pamate" class="form-control" maxlength="45" id="soc_max_vel_pamate">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať max velkost pamate
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_modem" class="form-label">Modem SoC</label>
                  <input type="text" name="soc_modem" class="form-control" maxlength="45" id="soc_modem">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať modem
                  </div>
                </div>
                
                <div class="mt-3">
                  <label for="soc_4g_podpora" class="form-label">4G podpora SoC</label>
                  <input type="text" name="soc_4g_podpora" class="form-control" maxlength="45" id="soc_4g_podpora">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať 4G podporu
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_5G_podpora" class="form-label">5G podpora SoC</label>
                  <input type="text" name="soc_5G_podpora" class="form-control" maxlength="45" id="soc_5G_podpora">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať 5G podporu
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_max_prenosova_r" class="form-label">Max prenosová rychlosť SoC</label>
                  <input type="text" name="soc_max_prenosova_r" class="form-control" maxlength="45" id="soc_max_prenosova_r">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať max prenosovú rychlosť
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_max_nahravacia_r" class="form-label">Max nahravacia rychlosť SoC</label>
                  <input type="text" name="soc_max_nahravacia_r" class="form-control" maxlength="45" id="soc_max_nahravacia_r">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať max nahravaciu rychlosť
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_verzia_wifi" class="form-label">Verzia wi-fi SoC</label>
                  <input type="text" name="soc_verzia_wifi" class="form-control" maxlength="45" id="soc_verzia-wifi">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu wi-fi
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_verzia_bluetooth" class="form-label">Verzia bluetooth SoC</label>
                  <input type="text" name="soc_verzia_bluetooth" class="form-control" maxlength="45" id="soc_verzia_bluetooth">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu bluetooth
                  </div>
                </div>


                <div class="mt-3">
                  <label for="soc_navigacia" class="form-label">Navigácia SoC</label>
                  <input type="text" name="soc_navigacia" class="form-control" maxlength="45" id="soc_navigacia">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať max prenosovú rychlosť
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_sirka_pasma" class="form-label">Šírka pásma SoC</label>
                  <input type="text" name="soc_sirka_pasma" class="form-control" maxlength="45" id="soc_sirka_pasma">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať šírku pásma
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_antutu_zariadenie" class="form-label">Antutu zariadenie</label>
                  <input type="text" name="soc_antutu_zariadenie" class="form-control" maxlength="45" id="soc_antutu_zariadenie">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať Antutu zariadenie
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_antutu_cpu" class="form-label">Antutu CPU</label>
                  <input type="text" name="soc_antutu_cpu" class="form-control" maxlength="45" id="soc_antutu_cpu">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať Antutu CPU
                  </div>
                </div>


                <div class="mt-3">
                  <label for="soc_antutu_gpu" class="form-label">Antutu GPU</label>
                  <input type="text" name="soc_antutu_gpu" class="form-control" maxlength="45" id="soc_antutu_gpu">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať Antutu GPU
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_antutu_mem" class="form-label">Antutu MEM</label>
                  <input type="text" name="soc_antutu_mem" class="form-control" maxlength="45" id="soc_antutu_mem">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať Antutu MEM
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_antutu_ux" class="form-label">Antutu UX</label>
                  <input type="text" name="soc_antutu_ux" class="form-control" maxlength="45" id="soc_antutu_ux">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať Antutu UX
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_antutu_vs" class="form-label">Antutu výsledné skóre</label>
                  <input type="text" name="soc_antutu_vs" class="form-control" maxlength="45" id="soc_antutu_vs">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať Antutu výsledné skóre
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_mark_zariadenie" class="form-label">3D Mark zariadenie</label>
                  <input type="text" name="soc_mark_zariadenie" class="form-control" maxlength="45" id="soc_mark_zariadenie">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať 3D mark zariadenie
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_mark_benchmark" class="form-label">3D Mark Benchmark</label>
                  <input type="text" name="soc_mark_benchmark" class="form-control" maxlength="45" id="soc_mark_benchmark">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať 3D mark benchmark
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_mark_skore" class="form-label">3D Mark skóre</label>
                  <input type="text" name="soc_mark_skore" class="form-control" maxlength="45" id="soc_mark_skore">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať 3D mark skore
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_geekbench_zariadenie" class="form-label">Geekbench zariadenie</label>
                  <input type="text" name="soc_geekbench_zariadenie" class="form-control" maxlength="45" id="soc_geekbench_zariadenie">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať Geekbench zariadenie
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_geekbench_scs" class="form-label">Geekbench Single-core skóre</label>
                  <input type="text" name="soc_geekbench_scs" class="form-control" maxlength="45" id="soc_geekbench_scs">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať Geekbench single-core skóre
                  </div>
                </div>

                <div class="mt-3">
                  <label for="soc_geekbench_mcs" class="form-label">Geekbench Multi-core skóre</label>
                  <input type="text" name="soc_geekbench_mcs" class="form-control" maxlength="45" id="soc_geekbench_mcs">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať Geekbench multi-core skóre
                  </div>
                </div>

                
                <div class="mt-3 d-flex justify-content-center">
               <button class="btn custom-button-color" value="Vytvoriť" name="add_soc" type="submit">Vytvoriť</button>
                </div>
              </form></p>
        </div>
        </div>
        </div>
        <div class="container text-center mt-3 mb-3">
        <a href="admin_panel.php" class = "btn custom-button-color">Späť</a>
        </div>

        </section>



    </main>


<?php
include('partials/footer.php');
?>