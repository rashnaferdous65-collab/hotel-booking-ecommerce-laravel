<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')
   </head>
   <body>
      @include('home.head_inner')
      @include('home.banner')
      @include('home.about')
      

      <!---Room Start-->
  <div class="rooms">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Our Room</h2>
               <p>Experience the luxury of our stay.</p>
            </div>
         </div>
      </div>
      <div class="row">
         @foreach($room as $rooms)
         <div class="col-md-4 col-sm-6">
            <div id="serv_hover" class="room">
               <div class="room_img">
                  <figure>
                     <img src="roomimage/{{$rooms->room_img}}" alt="#" style="height: 200px; width: 100%; object-fit: cover;"/>
                  </figure>
               </div>
               <div class="bed_room">
                  <h3>{{$rooms->room_title}}</h3>
                  <p>{!! Str::limit($rooms->description, 100) !!}</p>
                  <a class="btn btn-primary" href="{{url('room_details', $rooms->id)}}">View Details</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>

<style>
  /* Room Section Design */
.rooms {
    padding: 60px 0;
    background-color: #f8f9fa;
}

.room {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

/* Card Hover Effect */
.room:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.room_img figure {
    margin: 0;
    overflow: hidden;
}

.room_img img {
    transition: transform 0.5s ease;
}

.room:hover .room_img img {
    transform: scale(1.1); /* ইমেজে জুম ইফেক্ট */
}

.bed_room {
    padding: 20px;
    text-align: center;
}

.bed_room h3 {
    font-size: 22px;
    font-weight: 700;
    color: #333;
    margin-bottom: 10px;
}

.bed_room p {
    color: #666;
    font-size: 14px;
    margin-bottom: 20px;
    height: 45px; 
}


.bed_room .btn-primary {
    background-color: #ff385c; 
    border: none;
    padding: 10px 25px;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
    margin-top:40px;
}

.bed_room .btn-primary:hover {
    background-color: #333; 
    color: #fff;
    box-shadow: 0 5px 15px rgba(255, 56, 92, 0.4);
    letter-spacing: 1px; 
}
</style>
<!--Room End-->
     
      @include('home.gallery')
      @include('home.blog')
      @include('home.contact')
      @include('home.footer')
   </body>
</html>
    