<!DOCTYPE html>
   <style>
.cat{
     text-align: center;
    font-weight: bold;
    color: white;
    padding-bottom: 50px;
}
    .table {
    text-align: center;
    margin: auto;
    width: 1200px;       
    border: 2px solid white;
    table-layout: fixed; 
    margin-top: 50px;
}

th {
    background-color: rgba(171, 21, 101, 0.78);
     padding: 10px;
     color: white;
     font-weight: bold;
}      
td {
    
     color: white;
     border: 3px solid white;
     padding: 10px;
     font-weight: bold;
}



.room_image{

    width:120px;
    height: auto; 
}
  </style>
<html> 
  @include('admin.css')
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
     @include('admin.slidebar')
   
    <div class="page-content">
<div class="page-header">
<div class="container-fluid">


<div>
    <h1 class="cat">View Room Details</h1>
    <table  class="table">
<tr>

<th>Room Title</th>
<th>Description</th>
<th>Price</th>
<th>Room Type</th>
<th>Wifi Status</th>
<th>Room Image</th>
<th>Action</th>
</tr>
@foreach($data as $item)
<tr>

<td>{{$item->room_title}}</td>
<td>{{ Str::limit($item->description, 50) }}</td>
<td>${{$item->price}}</td>
<td>{{$item->room_type}}</td>
<td>{{$item->wifi}}</td>

<td><img src="roomimage/{{$item->room_img}}" alt="" class="room_image"></td>
<td  style="text-align: center;">
            <div style="display: flex; justify-content: center; gap: 10px; align-items: center;">
            <a href="{{url('edit_room', $item->id)}}" 
                        style="padding:5px 15px; background-color:rgba(171, 21, 101, 0.78);
                             color:white; border:none; text-decoration:none; border-radius:3px; font-size:14px;">
                                 Edit
                                     </a>  
           <form action="{{route('delete_room', $item->id)}}" method="POST" 
             onsubmit="return confirm('Are you sure you want to delete this category?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="padding:5px 10px; background-color:red; color:white; border:none; cursor:pointer;">
                        Delete
                    </button>
                </form></td> </div>
</tr>
@endforeach
    </table>
</div>

</div>
</div>
</div>
       </div>

        @include('admin.footer')