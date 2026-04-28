<!DOCTYPE html>
<style>
    .cat {
        text-align: center;
        font-weight: bold;
        color: white;
        padding-bottom: 30px;
    }

    .table {
        text-align: center;
        margin: auto;
        width: 100%; 
        max-width: 1200px;
        border-collapse: collapse; 
        margin-top: 20px;
        table-layout: auto; 
    }

    th {
        background-color: rgba(171, 21, 101, 0.78);
        padding: 12px 8px;
        color: white;
        font-weight: bold;
        border: 1px solid #555;
    }

    td {
        color: white;
        border: 1px solid #555;
        padding: 10px 5px;
        font-size: 14px;
        word-wrap: break-word; 
        overflow-wrap: break-word;
    }

   
    .col-email { width: 180px; }
    .col-phone { width: 130px; }
    .col-name  { width: 150px; }

    .room_image {
        width: 80px;
        height: auto;
    }

    .btn-delete {
        padding: 5px 10px;
        background-color: red;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 4px;
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Room id</th>
                                    <th class="col-name">Name</th>
                                    <th class="col-email">Email</th>
                                    <th class="col-phone">Phone</th>
                                    <th>Arrival Date</th>
                                    <th> Leaving Date</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Room Title</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    <th>Status Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$item->room_id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->start_date}}</td>
                                    <td>{{$item->end_date}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>
                                        <span class="badge badge-info">{{$item->status}}</span>
                                    </td>
                                   <td>{{ $item->room->room_title ?? 'Room Not Found' }}</td>
                                   <td>{{ $item->room->price}}</td>
                                   <td><img src="roomimage/{{ $item->room->room_img}}"  class="room_image" alt=""></td>
                                    <td>
                                        <form action="{{route('delete_booking', $item->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete">Delete</button>
                                        </form>
                                    </td>
                                    <td>
                    <a href="{{url('approve_booking', $item->id)}}" class="btn btn-primary btn-sm">Approved</a>
                    <a href=" {{url('reject_booking', $item->id)}}" class="btn btn-warning btn-sm">Rejected</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</body>
</html>