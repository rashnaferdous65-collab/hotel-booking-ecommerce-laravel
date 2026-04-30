<!DOCTYPE html>
<html>
@include('admin.css')

<style>
.room-form-card{
    background:#2c2f33;
    padding:30px;
    border-radius:10px;
    max-width:700px;
    margin:auto;
    box-shadow:0 10px 30px rgba(0,0,0,0.4);
}
.room-form-card h3{
    color:#fff;
    margin-bottom:25px;
    text-align:center;
    font-weight:600;
}
.form-group label{
    color:#ccc;
    font-weight:500;
    margin-bottom:6px;
}
.form-control,
.form-select{
    background:#1f2226;
    border:1px solid #444;
    color:#fff;
}
.form-control:focus,
.form-select:focus{
    background:#1f2226;
    border-color:#ff4c60;
    box-shadow:none;
    color:#fff;
}
.submit-btn{
    background:#ff4c60;
    border:none;
    padding:10px 25px;
    color:#fff;
    border-radius:5px;
    transition:0.3s;
}
.submit-btn:hover{
    background:#e84356;
}


.room_image{

    width:120px;
    height: auto; 
}
</style>

<body>
@include('admin.header')

<div class="d-flex align-items-stretch">
@include('admin.slidebar')

<div class="page-content">
<div class="page-header">
<div class="container-fluid">

<div class="room-form-card">
<h3>Update Hotel Room Details</h3>

<form action="{{url('update_room', $data->id)}}" method="POST" enctype="multipart/form-data">
@csrf
  @method('PUT')
<div class="row">

<div class="col-md-6 mb-3">
<label>Room Title</label>
<input type="text" name="title" class="form-control" placeholder="Enter room title" value="{{$data->room_title}}">
</div>

<div class="col-md-6 mb-3">
<label>Room Price</label>
<input type="text" name="price" class="form-control" placeholder="Enter price" value="{{$data->price}}">
</div>

<div class="col-md-12 mb-3">
<label>Description</label>
<textarea name="description" rows="4" class="form-control" placeholder="Room description">{{$data->description}}</textarea>
</div>

<div class="col-md-6 mb-3">
<label>Room Type</label>
<select name="type" class="form-select" value="{{$data->room_type}}">
<option value="regular">Regular</option>
<option value="premium">Premium</option>
<option value="deluxe">Deluxe</option>
</select>
</div>

<div class="col-md-6 mb-3">
<label>Wifi Status</label>
<select name="wifi" class="form-select" value="{{$data->wifi}}">
<option value="yes">Yes</option>
<option value="no">No</option>
</select>
</div>
 
<div class="col-md-12 mb-4">
<label>Current Room Image</label>
<img src="{{ asset('roomimage/' . $data->room_img) }}" alt="" class="room_image">
</div>

<div class="col-md-12 mb-4">
<label>Room Image</label>
<input type="file" name="image" class="form-control">
</div>

<div class="col-md-12 text-center">
<button type="submit" class="submit-btn">
<i class="fas fa-plus-circle"></i> Update Room Details
</button>
</div>

</div>
</form>
</div>

</div>
</div>
</div>
</div>

@include('admin.footer')
</body>
</html>
