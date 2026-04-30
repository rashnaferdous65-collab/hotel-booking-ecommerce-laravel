<!DOCTYPE html>
<html>

@include('admin.css')

<style>
    .room-form-card {
        background: #2c2f33;
        padding: 30px;
        border-radius: 10px;
        max-width: 700px;
        margin: auto;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }

    .room-form-card h3 {
        color: #fff;
        margin-bottom: 25px;
        text-align: center;
        font-weight: 600;
    }

    .form-label {
        color: #ccc;
        font-weight: 500;
    }

    .form-control,
    .form-select {
        background: #1f2226;
        border: 1px solid #444;
        color: #fff;
    }

    .form-control:focus,
    .form-select:focus {
        background: #1f2226;
        border-color: #ff4c60;
        box-shadow: none;
    }

    .submit-btn {
        background: #ff4c60;
        border: none;
        padding: 10px 25px;
        color: #fff;
        border-radius: 5px;
        transition: 0.3s;
    }

    .submit-btn:hover {
        background: #e84356;
    }

    .room_image {
        width: 120px;
        height: auto;
        border-radius: 6px;
    }
</style>

<body>

@include('admin.header')

<div class="d-flex align-items-stretch">

    @include('admin.slidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="room-form-card">

                    <h3>Update Hotel Room</h3>

                    <form action="{{ url('update_room', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            {{-- Room Title --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Room Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ $data->room_title }}">
                            </div>

                            {{-- Price --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" class="form-control"
                                    value="{{ $data->price }}">
                            </div>

                            {{-- Description --}}
                            <div class="col-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="4" class="form-control">{{ $data->description }}</textarea>
                            </div>

                            {{-- Room Type --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Room Type</label>
                                <select name="type" class="form-select">
                                    <option value="regular" {{ $data->room_type == 'regular' ? 'selected' : '' }}>Regular</option>
                                    <option value="premium" {{ $data->room_type == 'premium' ? 'selected' : '' }}>Premium</option>
                                    <option value="deluxe" {{ $data->room_type == 'deluxe' ? 'selected' : '' }}>Deluxe</option>
                                </select>
                            </div>

                            {{-- Wifi --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Wifi</label>
                                <select name="wifi" class="form-select">
                                    <option value="yes" {{ $data->wifi == 'yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="no" {{ $data->wifi == 'no' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            {{-- Current Image --}}
                            <div class="col-12 mb-4 text-center">
                                <label class="form-label d-block">Current Image</label>
                                <img src="{{ asset('roomimage/' . $data->room_img) }}" class="room_image">
                            </div>

                            {{-- New Image --}}
                            <div class="col-12 mb-4">
                                <label class="form-label">Change Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            {{-- Submit --}}
                            <div class="col-12 text-center">
                                <button type="submit" class="submit-btn">
                                    Update Room
                                </button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

</div>

@include('admin.footer')

</body>
</html>
