<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body>

    @include('home.head_inner')
    @include('home.banner')
    @include('home.about')

    <!-- ================= ROOM SECTION START ================= -->
    <section class="rooms-section">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Our Rooms</h2>
                        <p>Enjoy comfort, luxury and a memorable experience.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach($room as $rooms)

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="room-card">

                        <!-- Room Image -->
                        <div class="room-image">
                            <img src="roomimage/{{$rooms->room_img}}" alt="Room Image">
                        </div>

                        <!-- Room Content -->
                        <div class="room-content">

                            <h3>{{$rooms->room_title}}</h3>

                            <p>
                                {!! Str::limit($rooms->description, 100) !!}
                            </p>

                            <a href="{{url('room_details', $rooms->id)}}" class="room-btn">
                                Explore More
                            </a>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>
    </section>
    <!-- ================= ROOM SECTION END ================= -->


    <style>

        .rooms-section{
            background: #f4f7fb;
            padding: 80px 0;
        }

        .section-title h2{
            font-size: 42px;
            font-weight: 700;
            color: #222;
            margin-bottom: 10px;
        }

        .section-title p{
            color: #777;
            margin-bottom: 50px;
            font-size: 16px;
        }

        /* Room Card */
        .room-card{
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            transition: 0.4s ease;
            box-shadow: 0 5px 18px rgba(0,0,0,0.08);
            height: 100%;
        }

        .room-card:hover{
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        /* Image */
        .room-image{
            overflow: hidden;
            height: 230px;
        }

        .room-image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s ease;
        }

        .room-card:hover .room-image img{
            transform: scale(1.08);
        }

        /* Content */
        .room-content{
            padding: 25px;
            text-align: center;
        }

        .room-content h3{
            font-size: 24px;
            color: #111;
            margin-bottom: 12px;
            font-weight: bold;
        }

        .room-content p{
            font-size: 14px;
            color: #666;
            line-height: 1.7;
            min-height: 70px;
        }

        /* Button */
        .room-btn{
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background: linear-gradient(45deg, #ff4b5c, #ff7b54);
            color: #fff;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .room-btn:hover{
            background: #222;
            color: #fff;
            letter-spacing: 1px;
            text-decoration: none;
        }

    </style>

    @include('home.gallery')
    @include('home.blog')
    @include('home.contact')
    @include('home.footer')

</body>
</html>
    