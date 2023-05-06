<?php
include('partials/header.php');
?>
    <main class="custom-main-margin-top mb-3">
        <section class="container">

          <h2 class="text-center"> <strong>Odber noviniek</strong></h2>
          <!--formular-->

            <form class="needs-validation" novalidate>
                <div>
                  <label for="inputname" class="form-label">Meno</label>
                  <input type="text" class="form-control" id="inputname" placeholder="Zadaj meno" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať meno
                  </div>
                </div>
                <div class="mt-3">
                  <label for="inputpriezv" class="form-label">Priezvisko</label>
                  <input type="text" class="form-control" id="inputpriezv" placeholder="Priezvisko" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                    Musíte zadať priezvisko
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
                    <label for="inputtext">Správa</label>
                    <textarea id ="inputtext" class="form-control" placeholder="nepovinné pole"></textarea>
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
               <button class="btn custom-button-color" formaction="thank_you_page.html" type="submit">Príhlasiť sa</button>
                </div>
              </form>
        </section>



    </main>
    <!--footer-->

    <?php
include('partials/footer.php');
?>