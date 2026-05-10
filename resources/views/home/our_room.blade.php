<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body>

@include('home.head_inner')

<!-- Our Rooms Section -->
<section class="our-rooms-section">
    <div class="container">

        <!-- Section Heading -->
        <div class="section-header text-center">
            <h2>Our Luxury Rooms</h2>
            <p>Choose your perfect stay and enjoy premium comfort.</p>
        </div>

        <!-- Room Cards -->
        <div class="row">

            @foreach($room as $item)

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="room-card">

                    <!-- Room Image -->
                    <div class="room-image">
                        <img src="roomimage/{{$item->room_img}}" alt="Room Image">
                    </div>

                    <!-- Room Content -->
                    <div class="room-content">

                        <h4>{{$item->room_title}}</h4>

                        <p>
                            {!! Str::limit($item->description, 100) !!}
                        </p>

                        <div class="room-btn">
                            <a href="{{url('room_details',$item->id)}}" class="details-btn">
                                Explore Room
                            </a>
                        </div>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

<style>

/* ===== SECTION STYLE ===== */

.our-rooms-section{
    padding: 80px 0;
    background: linear-gradient(to right, #f8f9fa, #eef2f3);
}

/* ===== HEADING ===== */

.section-header{
    margin-bottom: 50px;
}

.section-header h2{
    font-size: 42px;
    font-weight: 700;
    color: #222;
    margin-bottom: 10px;
}

.section-header p{
    color: #777;
    font-size: 16px;
}

/* ===== ROOM CARD ===== */

.room-card{
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    transition: 0.4s ease;
    box-shadow: 0 5px 18px rgba(0,0,0,0.08);
    height: 100%;
}

.room-card:hover{
    transform: translateY(-12px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.18);
}

/* ===== IMAGE ===== */

.room-image{
    overflow: hidden;
}

.room-image img{
    width: 100%;
    height: 240px;
    object-fit: cover;
    transition: 0.5s ease;
}

.room-card:hover .room-image img{
    transform: scale(1.08);
}

/* ===== CONTENT ===== */

.room-content{
    padding: 25px;
    text-align: center;
}

.room-content h4{
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #111;
}

.room-content p{
    font-size: 14px;
    color: #666;
    line-height: 1.7;
    min-height: 70px;
}

/* ===== BUTTON ===== */

.room-btn{
    margin-top: 25px;
}

.details-btn{
    display: inline-block;
    padding: 12px 28px;
    background: #ff4d6d;
    color: #fff;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s ease;
}

.details-btn:hover{
    background: #222;
    color: #fff;
    letter-spacing: 1px;
    text-decoration: none;
}

</style>

@include('home.footer')

</body>
</html>