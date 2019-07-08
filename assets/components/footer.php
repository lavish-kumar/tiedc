<?php 

print '
<footer class="text-md-left text-center bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="my-3 col-lg-4 col-md-4">
          <img class="img-fluid d-block mx-auto rounded" src="assets/img/logo-white.png" width="50%">
          <p class="my-3 text-center">Jaypee University Of Information Technology
            <br>Waknaghat, Solan, Himachal Pradesh-173234</p>
        </div>
        <div class="my-3 col-lg-4 col-md-4 text-center">
          <h3>Contact us</h3>
          <form>
            <fieldset class="form-group my-3">
              <input type="email" class="form-control" id="Input Email" placeholder="Email"> </fieldset>
            <fieldset class="form-group my-3">
              <input type="message" class="form-control" id="Input Message" placeholder="Message"> </fieldset>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
          </form>
        </div>
        <div class="my-3 col-lg-4 text-center">
          <h3>Follow</h3>
          <a href="https://www.facebook.com/tiedcjuit" target="blank">
            <i class="fa fa-facebook-square text-muted fa-3x m-2"></i>
          </a>
          <a href="https://www.instagram.com/tiedcjuit" target="blank">
            <i class="fa fa-3x fa-instagram text-muted m-2"></i>
          </a>
          <a href="https://twitter.com/tiedcjuit" target="blank">
            <i class="fa fa-3x fa-twitter m-2 text-muted"></i>
          </a>
          <a href="https://www.linkedin.com/company/tiedcjuit/" target="blank">
            <i class="fa fa-3x fa-linkedin-square text-muted m-2"></i>
          </a>
          <a href="https://www.youtube.com" target="blank">
            <i class="fa fa-3x text-muted fa-youtube-play m-2"></i>
          </a>

					<p class="my-3 text-center"><i class="fa fa-fw fa-envelope fa-2x"></i>info@tiedc.in</p>

        </div>
      </div>
    </div>
  </footer>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/js/parallax.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
 <script>
    $(document).ready(function(){
            $(\'[data-toggle="popover"]\').popover();   
            $(\'[data-toggle="tooltip"]\').tooltip();
            $(\'#datepicker-example\').datepicker({
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true
            });
          });
  </script>
  <script src="./assets/js/particles.js"></script>
<script src="./assets/js/ResizeSensor.js"></script>
<script src="./assets/js/ElementQueries.js"></script>
<script>
        
new ResizeSensor(jQuery(\'#content\'), function(){ 
    console.log("body resize");
    initCanvas();
});
</script>
 ';
?>