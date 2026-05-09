<!-- Our Rooms Section -->

<style>
    .room-section {
        padding: 60px 0;
    }

    .room-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: 0.3s ease;
        margin-bottom: 30px;
    }

    .room-card:hover {
        transform: translateY(-8px);
    }

    .room-image img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .room-content {
        padding: 20px;
        min-height: 180px;
    }

    .room-content h3 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #222;
    }

    .room-content p {
        font-size: 15px;
        color: #666;
        line-height: 1.7;
    }

    .details-btn {
        display: inline-block;
        margin: 0 20px 20px;
        padding: 10px 18px;
        background: #158e8a;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.3s;
        font-size: 16px;
    }

    .details-btn:hover {
        background: #ab1565;
        color: #fff;
    }
</style>

<div class="room-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>Our Rooms</h2>
                <p>Lorem Ipsum available, but the majority have suffered</p>
            </div>
        </div>

        <div class="row">

            @foreach($room as $item)

            <div class="col-lg-4 col-md-6">

                <div class="room-card">

                    <div class="room-image">
                        <img src="{{ asset('roomimage/' . $item->room_img) }}" alt="Room Image">
                    </div>

                    <div class="room-content">
                        <h3>{{ $item->room_title }}</h3>

                        <p>
                            {{ \Illuminate\Support\Str::limit($item->description, 100) }}
                        </p>
                    </div>

                    <a href="{{ url('room_details', $item->id) }}" class="details-btn">
                        View Room Details
                    </a>

                </div>

            </div>

            @endforeach

        </div>

    </div>
</div>

<!-- End Rooms Section -->