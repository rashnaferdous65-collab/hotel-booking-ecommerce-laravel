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

<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
<th>Action</th>
</tr>
@foreach($data as $item)
<tr>

<td>{{$item->name}}</td>
<td>${{$item->email}}</td>
<td>{{$item->phone}}</td>
<td>{{ Str::limit($item->message, 50) }}</td>
<td  style="text-align: center;">
            <div style="display: flex; justify-content: center; gap: 10px; align-items: center;">
           <a href="{{url('sent_message', $item->id)}}" 
                        style="padding:5px 15px; background-color:rgba(171, 21, 101, 0.78);
                             color:white; border:none; text-decoration:none; border-radius:3px; font-size:14px;">
                                 Send Message
                                   </a>  
           <form action="{{route('delete_message', $item->id)}}" method="POST" 
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