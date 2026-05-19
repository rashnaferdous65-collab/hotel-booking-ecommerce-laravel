  <!--  contact -->
    <style>

      .send-btn{
    background-color: #000;
    color: #fff;
    border: none;
    padding: 12px 35px;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1px;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 6px 18px rgba(0,0,0,0.4);
}

/* Hover effect */
.send-btn:hover{
    background-color: #fff;
    color: #000;
    border: 2px solid #000;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.5);
}

/* Click effect */
.send-btn:active{
    transform: scale(0.96);
}

    </style>
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" action="{{url('contact')}}" method="POST">
                     @csrf
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="text" name="name" required> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="text" name="email" required> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="tel" name="phone" required>                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="message" required>Message</textarea>
                        </div>
                     <div class="col-md-12">
    <button type="submit" class="send-btn">SEND</button>
</div>

                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->