<!-- Banner Section -->
<section class="hero_banner">

   <div id="hotelSlider" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
         <li data-target="#hotelSlider" data-slide-to="0" class="active"></li>
         <li data-target="#hotelSlider" data-slide-to="1"></li>
         <li data-target="#hotelSlider" data-slide-to="2"></li>
      </ul>

      <!-- Slider Images -->
      <div class="carousel-inner">

         <div class="carousel-item active">
            <img src="images/banner1.jpg" class="d-block w-100" alt="banner image">
         </div>

         <div class="carousel-item">
            <img src="images/banner2.jpg" class="d-block w-100" alt="banner image">
         </div>

         <div class="carousel-item">
            <img src="images/banner3.jpg" class="d-block w-100" alt="banner image">
         </div>

      </div>

      <!-- Controls -->
      <a class="carousel-control-prev" href="#hotelSlider" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
      </a>

      <a class="carousel-control-next" href="#hotelSlider" role="button" data-slide="next">
         <span class="carousel-control-next-icon"></span>
      </a>

   </div>

   <!-- Booking Area -->
   <div class="booking_section">
      <div class="container">
         <div class="row justify-content-start">

            <div class="col-lg-5 col-md-7">

               <div class="booking_form">

                  <h2>Reserve Your Room</h2>

                  <form action="" method="">

                     <div class="form-group">
                        <label>Check In</label>

                        <div class="date_box">
                           <img src="images/date.png" alt="">
                           <input type="date" class="form-control" name="check_in">
                        </div>
                     </div>

                     <div class="form-group">
                        <label>Check Out</label>

                        <div class="date_box">
                           <img src="images/date.png" alt="">
                           <input type="date" class="form-control" name="check_out">
                        </div>
                     </div>

                     <div class="form-group">
                        <button type="submit" class="btn btn-dark btn-block">
                           Check Availability
                        </button>
                     </div>

                  </form>

               </div>

            </div>

         </div>
      </div>
   </div>

</section>
<!-- End Banner Section -->