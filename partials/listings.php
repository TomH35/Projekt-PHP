
<div class="item">
    <div class="row">
        <?php
        $listing = $Listing->get_listing();
        for ($i=0;$i<count($listing);$i++){
            echo '<div class="col-lg-12">';
            echo '<div class="listing-item">';
            echo '<div class="left-image">';
            echo '<a href="#"><img src="data:image/jpeg;base64,'.base64_encode($listing[$i]->obrazok_a).'" alt=""></a>';
            echo '<div class="hover-content">';
            echo '<div class="main-white-button">';
            echo '<a href="contact.php"><i class="fa fa-eye"></i> Contact Now</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="right-content align-self-center">';
            echo '<a href="#"><h4>'.$listing[$i]->nazov_a.'</h4></a>';
            echo '<h6>by: ' .$listing[$i]->autor_a.'</h6>';
            echo '<span class="price"><div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div>' .$listing[$i]->cena_a.'/ month included tax</span>';
            echo '<span class="details">Details: <em>'.$listing[$i]->detail_a.'sq ft</em></span>';
            echo '<span class="info"><img src="assets/images/listing-icon-02.png" alt="">' .$listing[$i]->pocet_izieb_a. ' Bedrooms<br><img src="assets/images/listing-icon-03.png" alt="">' .$listing[$i]->pocet_kupelni_a. ' Bathrooms</span>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

       
  