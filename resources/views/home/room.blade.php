    <!-- our_room -->
    

<style>
   .room_img_size {
      width: 100%;       
      height: 250px;     
      object-fit: cover; 
      display: block;
   }
   
   
   .bed_room {
      height: 180px;     
      overflow: hidden;
   }
</style>
<div class="our_room">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Our Room</h2>
               <p>Lorem Ipsum available, but the majority have suffered</p>
            </div>
         </div>
      </div>

      <div class="row">
         @foreach($room as $item)
         <div class="col-md-4 col-sm-6">
            <div id="serv_hover" class="room">
               <div class="room_img">
                  <figure><img src="roomimage/{{$item->room_img}}" alt="#" class="room_img_size"></figure>
               </div>
               <div class="bed_room">
                  <h3>{{$item->room_title}}</h3>
                  <p>{{ Str::limit($item->description, 100) }}</p>
               </div>
              <a href="{{url('room_details', $item->id)}}" class="custom-btn">View Room Details</a>
            </div>
         </div>
         @endforeach
      </div> 
      </div>
</div>
    <!-- End_room -->

    <style>
  .custom-btn {
    padding: 10px 15px;
    background-color: rgba(21, 142, 138, 0.79);
    color: white;
    border: none;
    text-decoration: none;
    border-radius: 3px;
    font-size: 17px;
    display: inline-block;
    transition: background-color 0.3s ease; 
    margin-bottom:30px;
  }


  .custom-btn:hover {
    background-color: rgba(171, 21, 101, 1); 
    cursor: pointer;
     color: white;
  }