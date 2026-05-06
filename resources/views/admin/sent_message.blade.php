<!DOCTYPE html>
<html> 
    <style>
.room-form-card{
    background:#2c2f33;
    padding:30px;
    border-radius:10px;
    max-width:700px;
    margin:auto;
    box-shadow:0 10px 30px rgba(0,0,0,0.4);
}
.room-form-card h1{
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
</style>
  @include('admin.css')
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
     @include('admin.slidebar')
    <div class="page-content">
<div class="page-header">
<div class="container-fluid">
   


  <div class="room-form-card">

  <h1>Mail Send To {{$data->name}}</h1>

  <form action="{{url('sent', $data->id)}}" method="POST">

<div class="col-md-6 mb-3">
<label>Greeting</label>
<input type="text" name="greeting" class="form-control" placeholder="Enter Greeting">
</div>

<div class="col-md-12 mb-3">
<label>Mail Body</label>
<textarea  name="mail_body" rows="4" class="form-control" placeholder="Mail Body"></textarea>
</div>

<div class="col-md-6 mb-3">
<label>Action Text</label>
<input type="text" name="action_text"  class="form-control" placeholder="Enter Action Text">
</div>

<div class="col-md-6 mb-3">
<label>Action Url</label>
<input type="text" name="action_url"  class="form-control" placeholder="Enter Action Url">
</div>

<div class="col-md-6 mb-3">
<label>End Line</label>
<input type="text" name="end_line"  class="form-control" placeholder="Enter End Line">
</div>







<div class="col-md-12 text-center">
<button type="submit" class="submit-btn">
Send Mail
</button>
</div>

</div>
</form>
  
       </div>



</div>
</div>
</div>
        @include('admin.footer')