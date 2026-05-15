<section class="gallery_section">
   <div class="container">

      <div class="row">
         <div class="col-lg-12">
            <div class="section_title text-center">
               <h2>Our Gallery</h2>
               <p>Explore some beautiful moments from our hotel</p>
            </div>
         </div>
      </div>

      <div class="row">

         @foreach($gallery as $photo)

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

               <div class="gallery_card">

                  <div class="gallery_image">
                     <img 
                        src="{{ asset('gallery_img/'.$photo->image) }}" 
                        alt="Gallery Image"
                        style="width:100%; height:220px; object-fit:cover; border-radius:10px;"
                     >
                  </div>

               </div>

            </div>

         @endforeach

      </div>

   </div>
</section>