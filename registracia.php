<?php
include('partials/header.php');
?>
    <main class="mt-5 mb-5">
        <section class="container">

          <!--formular-->

          <div class = "d-flex justify-content-center">

          <div class="card w-50">
        <div class="card-body">
        <h2 class="text-center card-title"> <strong>registrácia</strong></h2>
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
                    <label for="inputemail" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="inputemail" placeholder= "E-mail" required>
                    <div class="valid-feedback">
                    </div>
                    <div class="invalid-feedback">
                      Musíte zadať E-mail
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
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Súhlas so spracovaním osobných údajov.
                    </label>
                    <div class="valid-feedback">
                    </div>
                    <div class="invalid-feedback">
                      Musíte súhlasiť so spracovaním osobných údajov.
                    </div>
                  </div>
                </div>
                <div class="mt-3">
               <button class="btn custom-button-color" formaction="thank_you_page.html" type="submit">Zaregistrovať sa</button>
                </div>
              </form></p>
        </div>
        </div>
        </div>
        <div class="container text-center mt-3 mb-3">
        <a href="login.php" class = "btn custom-button-color">Späť</a>
        </div>
        </section>



    </main>
    <!--footer-->

    <?php
include('partials/footer.php');
?>