<?php


$index = $_GET['index'];

$soc_clanok = $SoC_clanok->get_SoC_clanok($index);

$html = '';

$html .= '<div class="row custom-margin-left-image mb-5">
            <div class="col-sm-3">
            <img src="data:image/jpeg;base64,' . base64_encode($soc_clanok[0]->soc_obrazok) . '" alt="snapdragon SoC" class="custom-img-size">
    </div>
        <div class="col-sm-9">
        <h2 class="custom-margin-left-title">'. $soc_clanok[0]->soc_nazov .'</h2>
    </div>
    </div>


      <!-- Tabuľka v karte -->
    <div class="row">
        <div class="card w-75 mx-auto">
            <div class="card-body">
              <h4 class="card-title">CPU</h4>
              <p class="card-text">
                <table class="table">
                <tbody>

                <tr>
                    <th scope="row"><strong>Jadra</strong></th>
                    <td> '. $soc_clanok[0]->soc_jadra .'</td> 
                   
                </tr>
                <tr>
                    <th scope="row"><strong>Počet jadier</strong></th>
                    <td>'. $soc_clanok[0]->soc_pocet_jadier .'</td>
                
                </tr>
                <tr>
                    <th scope="row"><strong>Inštrukčná sada</strong></th>
                    <td>'. $soc_clanok[0]->soc_instrukcna_sada .'</td>
                   
                </tr>
                <tr>
                    <th scope="row"><strong>Vyrovnávacia pamäť L2</strong></th>
                    <td>'. $soc_clanok[0]->soc_l2 .'</td>
                   
                </tr>
                <tr>
                  <th scope="row"><strong>Vyrovnávacia pamäť L3</strong></th>
                  <td>'. $soc_clanok[0]->soc_l3 .'</td>
                 
              </tr>
              <tr>
                <th scope="row"><strong>Výrobný proces</strong></th>
                <td>'. $soc_clanok[0]->soc_vyrobny_proces .'</td>
               
            </tr>
            </tbody>

            </table></p>
            </div>
          </div>
   
    </div>

    

  <div class="row mt-3">
    <div class="card w-75 mx-auto">
        <div class="card-body">
          <h4 class="card-title">GPU</h4>
          <p class="card-text">
            <table class="table">
            <tbody>

            <tr>
                <th scope="row"><strong>Názov GPU</strong></th>
                <td> '. $soc_clanok[0]->soc_nazov_gpu .'</td> 
               
            </tr>
            <tr>
                <th scope="row"><strong>Frekvencia GPU</strong></th>
                <td>'. $soc_clanok[0]->soc_frekvencia_gpu .'</td>
            
            </tr>
            <tr>
                <th scope="row"><strong>Verzia Vulkan</strong></th>
                <td>'. $soc_clanok[0]->soc_verzia_vulkan .'</td>
               
            </tr>
            <tr>
              <th scope="row"><strong>Verzia OpenGL ES</strong></th>
              <td>'. $soc_clanok[0]->soc_verzia_open_gl .'</td>
             
          </tr>
            <tr>
              <th scope="row"><strong>Verzia OpenCL</strong></th>
              <td>'. $soc_clanok[0]->soc_verzia_open_cl.'</td>
             
          </tr>
          <tr>
            <th scope="row"><strong>Verzia DirectX</strong></th>
            <td>'. $soc_clanok[0]->soc_verzia_directx .'</td>
           
        </tr>
        </tbody>

        </table></p>
        </div>
      </div>

</div>

<div class="row mt-3">
  <!--karta-->
  <div class="card w-75 mx-auto">
      <div class="card-body">
        <h4 class="card-title">ISP</h4>
        <p class="card-text">
          <!--tabulka v karte-->
          <table class="table">
          <tbody>

          <tr>
              <th scope="row"><strong>Neurálny procesor (NPU)</strong></th>
              <td>'. $soc_clanok[0]->soc_NPU .'</td> 
             
          </tr>
          <tr>
              <th scope="row"><strong>Typ pamäte</strong></th>
              <td>'. $soc_clanok[0]->soc_typ_pamate .'</td>
          
          </tr>
          <tr>
              <th scope="row"><strong>Maximálne podporované rozlíšenie obrazovky</strong></th>
              <td>'. $soc_clanok[0]->soc_max_rozlis_obr .'</td>
             
          </tr>
          <tr>
            <th scope="row"><strong>Maximálne podporované rozlíšenie kamery</strong></th>
            <td>'. $soc_clanok[0]->soc_max_rozlis_kamery .'</td>
           
        </tr>
          <tr>
            <th scope="row"><strong>Nahrávanie videii</strong></th>
            <td>'. $soc_clanok[0]->soc_nahravanie_videii .'</td>
           
        </tr>
        <tr>
          <th scope="row"><strong>Prehrávanie videii</strong></th>
          <td>'. $soc_clanok[0]->soc_prehravanie_videii.'</td>
         
      </tr>
      <tr>
        <th scope="row"><strong>Video kodeky</strong></th>
        <td>'. $soc_clanok[0]->soc_video_kodeky.'</td>
       
    </tr>
    <tr>
      <th scope="row"><strong>Audio kodeky</strong></th>
      <td>'. $soc_clanok[0]->soc_audio_kodeky .'</td>
     
  </tr>
      </tbody>

      </table></p>
      </div>
    </div>

</div>

<div class="row mt-3">
<div class="card w-75 mx-auto">
    <div class="card-body">
      <h4 class="card-title">Pamäť</h4>
      <p class="card-text">
        <table class="table">
        <tbody>

        <tr>
            <th scope="row"><strong>Typ pamäte</strong></th>
            <td>'. $soc_clanok[0]->soc_typ_pamate_ram .'</td> 
           
        </tr>
        <tr>
            <th scope="row"><strong>Frekvencia pamäte</strong></th>
            <td>'. $soc_clanok[0]->soc_frekvencia_pamate .'</td>
        
        </tr>
        <tr>
            <th scope="row"><strong>Zbernica</strong></th>
            <td>'. $soc_clanok[0]->soc_zbernica .'</td>
           
        </tr>
        <tr>
            <th scope="row"><strong>Šírka pásma</strong></th>
            <td>'. $soc_clanok[0]->soc_sirka_pasma .'</td> 
        </tr>
        <tr>
          <th scope="row"><strong>Maximálna velkosť pamäte</strong></th>
          <td>'. $soc_clanok[0]->soc_max_velkost_pamate .'</td>
      </tr>
    
    </tbody>

    </table></p>
    </div>
  </div>

</div>

<div class="row mt-3">
<div class="card w-75 mx-auto">
  <div class="card-body">
    <h4 class="card-title">Konektivita</h4>
    <p class="card-text">
      <table class="table">
      <tbody>

      <tr>
          <th scope="row"><strong>Modem</strong></th>
          <td>'. $soc_clanok[0]->soc_modem .'</td> 
         
      </tr>
      <tr>
          <th scope="row"><strong>4G podpora</strong></th>
          <td>'. $soc_clanok[0]->soc_4g_podpora .'</td>
      
      </tr>
      <tr>
          <th scope="row"><strong>5G podpora</strong></th>
          <td>'. $soc_clanok[0]->soc_5g_podpora .'</td>
         
      </tr>
      <tr>
        <th scope="row"><strong>Maximálna prenosová rýchlosť</strong></th>
        <td>'. $soc_clanok[0]->soc_max_prenosova_r .'</td>
       
    </tr>
      <tr>
        <th scope="row"><strong>Maximálna rychlosť nahrávania</strong></th>
        <td>'. $soc_clanok[0]->soc_max_nahravanie_r .'</td>
       
    </tr>
    <tr>
      <th scope="row"><strong>Verzia Wi-Fi</strong></th>
      <td>'. $soc_clanok[0]->soc_verzia_wifi .'</td>
     
  </tr>
  <tr>
    <th scope="row"><strong>Verzia Bluetooth</strong></th>
    <td>'. $soc_clanok[0]->soc_verzia_bluetooth .'</td>
   
</tr>
<tr>
  <th scope="row"><strong>Navigácia</strong></th>
  <td>'. $soc_clanok[0]->soc_navigacia .'</td>
 
</tr>
  </tbody>

  </table></p>
  </div>
</div>

</div>
<div class="row mt-3">
  <!--karta-->
<div class="card w-75 mx-auto">
<div class="card-body">
<h5 class="card-title">Benchmarky</h5>
<p class="card-text">
  <!--akordeon-->
  <div class="accordion accordion-flush " id="accordionPanelsStayOpen">
    <!--prvy item akordeonu-->
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        AnTuTu Benchmark
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row"><strong>Zariadenie</strong></th>
              <td>'. $soc_clanok[0]->soc_antutu_zariadenie .'</td>
          </tr>

          <tr>
              <th scope="row"><strong>CPU</strong></th>
              <td>'. $soc_clanok[0]->soc_antutu_cpu .'</td> 
             
          </tr>
          <tr>
              <th scope="row"><strong>GPU</strong></th>
              <td>'. $soc_clanok[0]->soc_antutu_gpu .'</td>
          
          </tr>
          <tr>
              <th scope="row"><strong>MEM</strong></th>
              <td>'. $soc_clanok[0]->soc_antutu_mem .'</td>
             
          </tr>
          <tr>
            <th scope="row"><strong>UX</strong></th>
            <td>'. $soc_clanok[0]->soc_antutu_ux .'</td>
           
        </tr>
          <tr>
            <th scope="row"><strong>Výsledné skóre</strong></th>
            <td>'. $soc_clanok[0]->soc_antutu_vs .'</td>
        </tr>
       
      
      </tbody>

      </table>
      </div>
    </div>
  </div>
  <!--druhy item akordeonu-->
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        3D Mark
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row"><strong>Zariadenie</strong></th>
              <td>'. $soc_clanok[0]->soc_mark_zariadenie .'</td> 
          </tr>
          <tr>
            <th scope="row"><strong>Benchmark</strong></th>
            <td>'. $soc_clanok[0]->soc_mark_benchmark .'</td> 
        </tr>

          <tr>
              <th scope="row"><strong>Skóre</strong></th>
              <td>'. $soc_clanok[0]->soc_mark_skore .'</td> 
          </tr>
             
      </tbody>

      </table>
      </div>
    </div>
  </div>
  <!--treti item akordeonu-->
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Geekbench 6
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row"><strong>Zariadenie</strong></th>
              <td>'. $soc_clanok[0]->soc_geekbench_zariadenie .'</td> 
          </tr>
          <tr>
            <th scope="row"><strong>Single-Core skóre</strong></th>
            <td>'. $soc_clanok[0]->soc_geekbench_scs .'</td> 
        </tr>

          <tr>
              <th scope="row"><strong>Multi-Core skóre</strong></th>
              <td>'. $soc_clanok[0]->soc_geekbench_mcs .'</td> 
          </tr>
             
      </tbody>

      </table>
      </div>
    </div>
  </div>
</div></p>

</div>
</div>
</div>
<div class="container text-center mt-3 mb-3">
    <a href="SoC.php" class="btn custom-button-color mt-5">Späť</a>
</div>';
echo $html;
?>