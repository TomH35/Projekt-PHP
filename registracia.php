<?php
include('partials/header.php');
?>
    <main class="mt-5 mb-5">
        <section class="container">

          <!--formular-->

          <div class = "d-flex justify-content-center">

          <div class="card w-50">
        <div class="card-body">
        <h2 class="text-center card-title"> <strong>Zaregistrovať sa</strong></h2>
        <p class="card-text"><form class="needs-validation" action="inc/reg/register.php" method="post" novalidate>
                <div>
                  <label for="inputname" class="form-label">Použivateľske meno</label>
                  <input type="text" name="user_name" class="form-control" id="inputname" placeholder="Zadajte používateľske meno" required>
                  <div class="valid-feedback">
                  </div>
                  <div class="invalid-feedback">
                   Musíte zadať používateľske meno
                  </div>
                </div>
                <div class="mt-3">
                    <label for="inputemail" class="form-label">E-mail</label>
                    <input type="email" name="user_email" class="form-control" id="inputemail" placeholder= "E-mail" required>
                    <div class="valid-feedback">
                    </div>
                    <div class="invalid-feedback">
                      Musíte zadať E-mail
                     </div>
                  </div>
                
                <div class="mt-3">
                  <label for="inputpass" class="form-label">Heslo</label>
                  <input type="password" name="user_password" class="form-control" id="inputpass" placeholder= "Heslo" maxlength="16" required>
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
               <button class="btn custom-button-color" type="submit" value="Zaregistrovať" name="add_user">Zaregistrovať sa</button>
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