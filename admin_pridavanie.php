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
        <p class="card-text"><form class="needs-validation" action="inc/soc_clanok/create_soc.php" method="post" novalidate>
                <div>
                  <label for="inputname" class="form-label">nádpis</label>
                  <input type="text" name="clanok_nadpis" class="form-control" maxlength="45" id="inputname" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať nádpis
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputtext">Text článku</label>
                  <textarea id ="inputtext" name="clanok_text" class="form-control"></textarea>
                  <div class="valid-feedback">
                  </div>
                    <div class="invalid-feedback">
                      Musíte zadať text článku
                    </div>
                </div>

                <div class="mt-3">
                  <label for="inputimage" class="form-label">Obrázok článku</label>
                  <input type="file" name="clanok_image" class="form-control" id="inputimage">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                    Musíte vložiť obrázok
                  </div>
                </div>

                <h2 class="text-center card-title mt-3"> <strong>Údaje o SoC</strong></h2>


                <div class="mt-3">
                  <label for="inputname" class="form-label">ID Článku</label>
                  <input type="number" name="soc_id_clanku" class="form-control" maxlength="45" id="inputname" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať ID Článku
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputimage" class="form-label">Obrázok pre SoC</label>
                  <input type="file" name="soc_image" class="form-control" id="inputimage">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                    Musíte vložiť obrázok
                  </div>
                </div>


                <div class="mt-3">
                  <label for="inputname" class="form-label">Názov SoC</label>
                  <input type="text" name="soc_nazov" class="form-control" maxlength="45" id="inputname" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať názov
                  </div>
                </div>


                <div class="mt-3">
                  <label for="inputtext">Jádra SoC</label>
                  <textarea id ="inputtext" name="soc_jadra" class="form-control">\n<br>\n<br>\n<br></textarea>
                  <div class="valid-feedback">
                  </div>
                    <div class="invalid-feedback">
                      Musíte zadať informácie
                    </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Počet jadier SoC</label>
                  <input type="text" name="soc_pocet_jadier" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať počet jadier
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Inštrukčná sada SoC</label>
                  <input type="text" name="soc_instrukcna_sada" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať inštrukčnú sadu
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">L2 cache SoC</label>
                  <input type="text" name="soc_l2" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať L2 cache
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">L3 cache SoC</label>
                  <input type="text" name="soc_nazov" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať L3 cache
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Výrobný proces SoC</label>
                  <input type="text" name="soc_vyr_proces" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať výrobný proces
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Názov GPU SoC</label>
                  <input type="text" name="soc_nazov_gpu" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať názov gpu
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Frekvencia GPU SoC</label>
                  <input type="text" name="soc_frekvencia_gpu" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať frekvenciu GPU
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Vulkan verzia SoC</label>
                  <input type="text" name="soc_vulkan_verzia" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu vulkanu
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">OpenGL verzia SoC</label>
                  <input type="text" name="soc_open_gl_verzia" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu OpenGL
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">OpenCL verzia SoC</label>
                  <input type="text" name="soc_open_cl_verzia" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu OpenCL
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">DirectX verzia SoC</label>
                  <input type="text" name="soc_verzia_directx" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať verziu DirectX
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">NPU SoC</label>
                  <input type="text" name="soc_NPU" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať NPU
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Typ pamäte SoC</label>
                  <input type="text" name="soc_typ_pamate" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať typ pamäte
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Max rozlíšenie obrazovky SoC</label>
                  <input type="text" name="soc_max_roz_obr" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať max rozlišenie obrazovky
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Max rozlíšenie kamery SoC</label>
                  <input type="text" name="soc_max_roz_kamery" class="form-control" maxlength="45" id="inputname">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať max rozlíšenie kamery
                  </div>
                </div>

                <div class="mt-3">
                  <label for="inputname" class="form-label">Nahrávanie videií SoC</label>
                  <input type="text" name="soc_nahravanie_videii" class="form-control" maxlength="45" id="soc_nahravanie_videii">
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať nahravanie videii
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