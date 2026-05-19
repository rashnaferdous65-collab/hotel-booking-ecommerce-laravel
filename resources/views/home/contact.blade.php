<!-- Contact Section -->
<style>

.contact-section{
    padding: 70px 0;
    background: #f8f9fa;
}

.contact-card{
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}

.contact-title{
    text-align: center;
    margin-bottom: 40px;
}

.contact-title h2{
    font-size: 42px;
    font-weight: bold;
    color: #111;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.input-field,
.message-box{
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 12px;
    padding: 14px 18px;
    margin-bottom: 20px;
    outline: none;
    transition: 0.3s ease;
    font-size: 15px;
}

.input-field:focus,
.message-box:focus{
    border-color: #000;
    box-shadow: 0 0 10px rgba(0,0,0,0.15);
}

.message-box{
    min-height: 140px;
    resize: none;
}

.submit-btn{
    background: linear-gradient(135deg,#000,#444);
    color: #fff;
    border: none;
    padding: 12px 40px;
    border-radius: 50px;
    font-weight: 600;
    letter-spacing: 1px;
    transition: 0.3s ease;
}

.submit-btn:hover{
    background: #fff;
    color: #000;
    border: 1px solid #000;
    transform: translateY(-2px);
}

.map-box iframe{
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

</style>

<div class="contact-section">
   <div class="container">

      <div class="contact-title">
         <h2>Get In Touch</h2>
      </div>

      <div class="row">

         <!-- Contact Form -->
         <div class="col-md-6">
            <div class="contact-card">

               <form action="{{ url('contact') }}" method="POST">
                  @csrf

                  <input 
                     type="text" 
                     name="name" 
                     class="input-field" 
                     placeholder="Enter Your Name"
                     required
                  >

                  <input 
                     type="email" 
                     name="email" 
                     class="input-field" 
                     placeholder="Enter Your Email"
                     required
                  >

                  <input 
                     type="tel" 
                     name="phone" 
                     class="input-field" 
                     placeholder="Enter Phone Number"
                     required
                  >

                  <textarea 
                     name="message" 
                     class="message-box" 
                     placeholder="Write Your Message..."
                     required
                  ></textarea>

                  <button type="submit" class="submit-btn">
                     Send Message
                  </button>

               </form>

            </div>
         </div>

         <!-- Map -->
         <div class="col-md-6">
            <div class="map-box">
               <iframe 
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                  width="100%" 
                  height="500"
                  frameborder="0"
                  style="border:0;"
                  allowfullscreen="">
               </iframe>
            </div>
         </div>

      </div>
   </div>
</div>
<!-- End Contact Section -->