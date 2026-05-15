<div class="gallery">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Gallery</h2>
            </div>
         </div>
      </div>

      <div class="row">
         @foreach($gallery as $item)
            <div class="col-md-3 col-sm-6" style="margin-bottom: 30px;">
               <div class="gallery_img">
                  <figure>
                     <img src="gallery_img/{{$item->image}}" alt="#" style="width: 100%; height: 200px; object-fit: cover;"/>
                  </figure>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</div>