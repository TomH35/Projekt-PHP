<?php
include('partials/header.php');
?>
    <main class="mt-5 mb-5">
        <section class="container">

          <!--formular-->

          <div class = "d-flex justify-content-center">

          <div class="card w-50">
        <div class="card-body">
        <h2 class="text-center card-title"> <strong>Prihlásiť sa</strong></h2>
        <p class="card-text"><form class="needs-validation" novalidate>
                <div>
                  <label for="inputname" class="form-label">Použivateľske meno</label>
                  <input type="text" class="form-control" id="inputname" placeholder="Zadajte používateľske meno" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať používateľske meno
                  </div>
                </div>
                
                <div class="mt-3">
                  <label for="inputpass" class="form-label">Heslo</label>
                  <input type="password" class="form-control" id="inputpass" placeholder= "Heslo" required>
                  <div class="valid-feedback">
                </div>
                  <div class="invalid-feedback">
                    Musíte zadať heslo
                  </div>
                </div>
                
                <div class="mt-3">
               <button class="btn custom-button-color" formaction="thank_you_page.html" type="submit">Prihlásiť sa</button>
               <a href="registracia.php" class = "btn custom-button-color">Zaregistrovať sa</a>
                </div>
              </form></p>
        </div>
        </div>
        </div>
        <div class="container text-center mt-3 mb-3">
        <a href="index.php" class = "btn custom-button-color">Späť</a>
        </div>

        </section>



    </main>
    <!--footer-->

    <?php
include('partials/footer.php');
?>