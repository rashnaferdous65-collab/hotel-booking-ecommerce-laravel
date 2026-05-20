<style>
.booking-section{
    display: flex;
    justify-content: center;
    margin: 60px 0;
}

.booking-card{
    background: #ffffff;
    width: 420px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.booking-card h1{
    text-align: center;
    margin-bottom: 25px;
    color: #e60000;
    font-weight: bold;
}

.booking-card label{
    font-weight: 600;
    margin-bottom: 5px;
    display: block;
}

.booking-card input{
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
    transition: 0.3s;
}

.booking-card input:focus{
    border-color: #e60000;
    box-shadow: 0 0 5px rgba(230,0,0,0.3);
}

.booking-card button{
    width: 100%;
    padding: 12px;
    background: #e60000;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.booking-card button:hover{
    background: #c40000;
}
</style>

<!DOCTYPE html>
<html lang="en">

@include('home.css')
<base href="/public">
@include('home.head_inner')

<div class="booking-section">
    <div class="booking-card">

        <h1>Hotel Room Booking</h1>

     
        <form action="{{url('add_booking', $room->id)}}" method="POST">
            @csrf
            <input type="hidden" name="room_id" value="{{ $room->id }}">

            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name" value="{{Auth::user()->name}}" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" value="{{Auth::user()->email}}" required>

            <label>Phone</label>
            <input type="tel" name="phone" placeholder="Enter phone number"value="{{Auth::user()->phone}}" required>

            <label>Start Date</label>
            <input type="date" name="start_date"  required>

            <label>End Date</label>
            <input type="date" name="end_date" required>

            <label>Address</label>
            <input type="text" name="address" placeholder="Enter address" value="{{Auth::user()->address}}">

            <button type="submit">Book Room</button>
        </form>

    </div>
</div>

@include('home.footer')
</html>
<script>
   
    let today = new Date().toISOString().split('T')[0];

  
    document.querySelector('input[name="start_date"]').setAttribute('min', today);
    document.querySelector('input[name="end_date"]').setAttribute('min', today);
 
    document.querySelector('input[name="start_date"]').addEventListener('change', function () {
        document.querySelector('input[name="end_date"]').setAttribute('min', this.value);
    });
</script>

    