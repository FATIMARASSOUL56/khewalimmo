</main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Adresse</h4>
            <p>Thies </p>
            <p>parcelle U1</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>telephone:</strong> <span>+221 77584658</span><br>
              <strong>Email:</strong> <span>khewalimmo@gmail.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Heure d' ouverture</h4>
            <p>
              <strong>7j/7</strong> <span>24h/24</span><br>
              
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Suivez nous</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">khewalimmo</strong> <span>touts droits reservés</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        conçue par <a href="https://bootstrapmade.com/">fatima rassoul</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php if(isset($_GET["page"]) && $_GET["page"] == "reservation"): ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function(){
            // avoir la date d'aujourd'hui 
            var today = new Date();
            var highlightedDates = [];

            // ajout des 60 prochains jours 
            for (let i = 0; i <=60; i++) {
                var date = new Date(today);
                date.setDate(date.getDate()+ i);
                highlightedDates.push(date.toISOString().split('T')[0]);
                
            }
            // initialisation de date picker 
            $(".checkin-date").datepicker({
                dateFormat: 'dd/mm/yy',
                minDate: 0,
                beforeShowDay: function(date){
                    var dateString = $.datepicker.formatDate('yy-mm-dd', date);
                    if(highlightedDates.indexOf(dateString) !== -1){
                        return [true, 'highlight', 'Available'];
                    }
                    return [true, '', ''];
                }
            });
        });
    </script>

<?php endif; ?>

</body>

</html>