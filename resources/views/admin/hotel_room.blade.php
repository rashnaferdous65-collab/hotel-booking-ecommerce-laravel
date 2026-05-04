<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style>
        .room-card {
            background: #2c2f33;
            padding: 25px;
            border-radius: 12px;
            max-width: 750px;
            margin: auto;
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
        }

        .room-card h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        label {
            color: #bbb;
            font-weight: 500;
        }

        .form-control,
        .form-select {
            background: #1e2125;
            border: 1px solid #444;
            color: #fff;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #ff4c60;
            box-shadow: none;
        }

        .btn-submit {
            background: #ff4c60;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
        }

        .btn-submit:hover {
            background: #e84155;
        }
    </style>
</head>

<body>
    @include('admin.header')

    <div class="d-flex">
        @include('admin.slidebar')

        <div class="page-content w-100">
            <div class="container-fluid mt-4">

                <div class="room-card">
                    <h2>Add Room</h2>

                    <form action="{{ url('add_room') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">

                            <!-- Title -->
                            <div class="col-md-6">
                                <label>Room Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Room title">
                            </div>

                            <!-- Price -->
                            <div class="col-md-6">
                                <label>Room Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Price">
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label>Description</label>
                                <textarea name="description" rows="3" class="form-control" placeholder="Description"></textarea>
                            </div>

                            <!-- Type -->
                            <div class="col-md-6">
                                <label>Room Type</label>
                                <select name="type" class="form-select">
                                    <option value="regular">Regular</option>
                                    <option value="premium">Premium</option>
                                    <option value="deluxe">Deluxe</option>
                                </select>
                            </div>

                            <!-- Wifi -->
                            <div class="col-md-6">
                                <label>Wifi</label>
                                <select name="wifi" class="form-select">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <!-- Image -->
                            <div class="col-12">
                                <label>Room Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <!-- Submit -->
                            <div class="col-12 text-center mt-3">
                                <button type="submit" class="btn-submit">
                                    + Add Room
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
