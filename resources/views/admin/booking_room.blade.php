<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style>
        .cat {
            text-align: center;
            font-weight: bold;
            color: white;
            padding-bottom: 30px;
        }

        .table {
            text-align: center;
            margin: 20px auto;
            width: 100%;
            max-width: 1200px;
            border-collapse: collapse;
        }

        th {
            background-color: rgba(171, 21, 101, 0.78);
            padding: 12px 8px;
            color: #fff;
            border: 1px solid #555;
        }

        td {
            color: #fff;
            border: 1px solid #555;
            padding: 10px 5px;
            font-size: 14px;
            word-break: break-word;
        }

        .room_image {
            width: 80px;
        }

        .btn-delete {
            padding: 5px 10px;
            background: red;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
        @include('admin.slidebar')

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    <h1 class="cat">View Room Details</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Room ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Arrival</th>
                                <th>Leaving</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Room Title</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Update</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($data as $item)
                                <tr>
                                    <td>{{ $item->room_id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->start_date }}</td>
                                    <td>{{ $item->end_date }}</td>
                                    <td>{{ $item->address }}</td>

                                    <td>
                                        <span class="badge badge-info">
                                            {{ $item->status }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ optional($item->room)->room_title ?? 'Room Not Found' }}
                                    </td>

                                    <td>
                                        {{ optional($item->room)->price }}
                                    </td>

                                    <td>
                                        <img src="{{ asset('roomimage/' . optional($item->room)->room_img) }}" class="room_image">
                                    </td>

                                    <td>
                                        <form action="{{ route('delete_booking', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete">Delete</button>
                                        </form>
                                    </td>

                                    <td>
                                        <a href="{{ url('approve_booking', $item->id) }}" class="btn btn-primary btn-sm">Approve</a>
                                        <a href="{{ url('reject_booking', $item->id) }}" class="btn btn-warning btn-sm">Reject</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13">No booking data found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>