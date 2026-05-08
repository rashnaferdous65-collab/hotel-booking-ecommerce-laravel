<!DOCTYPE html>
<html>

@include('admin.css')

<style>

.page-wrapper{
    padding: 30px;
}

.heading{
    text-align: center;
    color: #fff;
    font-weight: bold;
    margin-bottom: 40px;
    font-size: 32px;
}

.room-table{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    border-collapse: collapse;
    overflow: hidden;
    border-radius: 10px;
}

.room-table th{
    background: #b11565;
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 16px;
}

.room-table td{
    background: #2d3035;
    color: white;
    padding: 15px;
    text-align: center;
    border-bottom: 2px solid #444;
}

.room-table tr:hover{
    background: rgba(255,255,255,0.05);
    transition: 0.3s;
}

.room-img{
    width: 120px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
}

.action-box{
    display: flex;
    justify-content: center;
    gap: 10px;
}

.edit-btn{
    background: #b11565;
    color: white;
    padding: 6px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
}

.delete-btn{
    background: red;
    color: white;
    border: none;
    padding: 6px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

</style>

<body>

@include('admin.header')

<div class="d-flex align-items-stretch">

@include('admin.slidebar')

<div class="page-content">
<div class="page-header">
<div class="container-fluid">

<div class="page-wrapper">

<h1 class="heading">Room Details</h1>

<table class="room-table">

    <tr>
        <th>Room Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Room Type</th>
        <th>Wifi</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

@foreach($data as $room)

    <tr>

        <td>{{$room->room_title}}</td>

        <td>
            {{ Str::limit($room->description, 50) }}
        </td>

        <td>
            ${{$room->price}}
        </td>

        <td>
            {{$room->room_type}}
        </td>

        <td>
            {{$room->wifi}}
        </td>

        <td>
            <img class="room-img" 
                 src="roomimage/{{$room->room_img}}" 
                 alt="Room Image">
        </td>

        <td>

            <div class="action-box">

                <a class="edit-btn"
                   href="{{url('edit_room', $room->id)}}">
                    Edit
                </a>

                <form action="{{route('delete_room', $room->id)}}"
                      method="POST"
                      onsubmit="return confirm('Are you sure to delete this room?')">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="delete-btn">
                        Delete
                    </button>

                </form>

            </div>

        </td>

    </tr>

@endforeach

</table>

</div>

</div>
</div>
</div>

</div>

@include('admin.footer')

</body>
</html>