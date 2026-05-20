<style>
    .booking-wrapper{
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f5f5f5;
        padding: 40px 15px;
    }

    .booking-box{
        width: 450px;
        background: #fff;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }

    .booking-title{
        text-align: center;
        color: #cc0000;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 25px;
    }

    .input-group{
        margin-bottom: 18px;
    }

    .input-group label{
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        color: #333;
    }

    .input-group input{
        width: 100%;
        height: 45px;
        border: 1px solid #ccc;
        border-radius: 6px;
        padding: 0 12px;
        transition: 0.3s ease;
    }

    .input-group input:focus{
        border-color: #cc0000;
        box-shadow: 0 0 8px rgba(204,0,0,0.2);
        outline: none;
    }

    .booking-btn{
        width: 100%;
        height: 48px;
        background: #cc0000;
        border: none;
        color: white;
        font-size: 17px;
        font-weight: bold;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
    }

    .booking-btn:hover{
        background: #a80000;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <base href="/public">
</head>

<body>

@include('home.head_inner')

<section class="booking-wrapper">

    <div class="booking-box">

        <h2 class="booking-title">Book Your Room</h2>

        <form action="{{ url('add_booking',$room->id) }}" method="POST">

            @csrf

            <input type="hidden" name="room_id" value="{{ $room->id }}">

            <div class="input-group">
                <label>Full Name</label>
                <input 
                    type="text" 
                    name="name"
                    value="{{ Auth::user()->name }}"
                    placeholder="Enter your full name"
                    required
                >
            </div>

            <div class="input-group">
                <label>Email Address</label>
                <input 
                    type="email" 
                    name="email"
                    value="{{ Auth::user()->email }}"
                    placeholder="Enter email address"
                    required
                >
            </div>

            <div class="input-group">
                <label>Phone Number</label>
                <input 
                    type="text" 
                    name="phone"
                    value="{{ Auth::user()->phone }}"
                    placeholder="Enter phone number"
                    required
                >
            </div>

            <div class="input-group">
                <label>Check In</label>
                <input 
                    type="date" 
                    id="check_in"
                    name="start_date"
                    required
                >
            </div>

            <div class="input-group">
                <label>Check Out</label>
                <input 
                    type="date" 
                    id="check_out"
                    name="end_date"
                    required
                >
            </div>

            <div class="input-group">
                <label>Address</label>
                <input 
                    type="text" 
                    name="address"
                    value="{{ Auth::user()->address }}"
                    placeholder="Enter your address"
                >
            </div>

            <button type="submit" class="booking-btn">
                Confirm Booking
            </button>

        </form>

    </div>

</section>

@include('home.footer')

<script>

    let currentDate = new Date().toISOString().split('T')[0];

    let checkIn = document.getElementById('check_in');
    let checkOut = document.getElementById('check_out');

    checkIn.min = currentDate;
    checkOut.min = currentDate;

    checkIn.addEventListener('input', function(){

        checkOut.min = this.value;

    });

</script>

</body>
</html>

    