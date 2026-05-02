<!DOCTYPE html>
<html lang="en">
@include('admin.css')

<style>
    .card-box{
        background:#2c2f33;
        padding:30px;
        border-radius:12px;
        max-width:600px;
        margin:40px auto;
        box-shadow:0 10px 25px rgba(0,0,0,0.4);
    }

    .title{
        text-align:center;
        color:#fff;
        margin-bottom:25px;
        font-weight:600;
    }

    .input-box{
        margin-bottom:20px;
    }

    .input-box label{
        color:#ccc;
        font-size:14px;
        margin-bottom:6px;
        display:block;
    }

    .input-box input{
        width:100%;
        padding:10px;
        background:#23272a;
        border:1px dashed #555;
        border-radius:8px;
        color:#aaa;
    }

    .btn-main{
        width:100%;
        padding:12px;
        border:none;
        border-radius:8px;
        background:linear-gradient(135deg,#36d1dc,#5b86e5);
        color:#fff;
        font-weight:500;
        cursor:pointer;
        transition:.3s;
    }

    .btn-main:hover{
        transform:translateY(-2px);
        box-shadow:0 6px 15px rgba(91,134,229,0.4);
    }

    .gallery-wrapper{
        margin-top:50px;
    }

    .grid{
        display:grid;
        grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
        gap:20px;
    }

    .card-img{
        background:#2c2f33;
        padding:10px;
        border-radius:12px;
        position:relative;
        overflow:hidden;
        transition:.3s;
    }

    .card-img img{
        width:100%;
        height:180px;
        object-fit:cover;
        border-radius:10px;
    }

    .card-img:hover{
        transform:translateY(-5px);
    }

    .overlay{
        position:absolute;
        inset:0;
        display:flex;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.5);
        opacity:0;
        transition:.3s;
    }

    .card-img:hover .overlay{
        opacity:1;
    }

    .btn-danger{
        padding:10px 18px;
        border:none;
        border-radius:25px;
        background:linear-gradient(135deg,#ff3b3b,#c70000);
        color:#fff;
        cursor:pointer;
    }
</style>

<body>

@include('admin.header')

<div class="d-flex align-items-stretch">
@include('admin.slidebar')

<div class="page-content">
<div class="container-fluid">

    <!-- Upload Section -->
    <div class="card-box">
        <h2 class="title">📸 Upload Image</h2>

        <form action="{{ url('upload_gallery') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="input-box">
                <label>Select Image</label>
                <input type="file" name="image" required>
            </div>

            <button type="submit" class="btn-main">
                Upload
            </button>
        </form>
    </div>

    <!-- Gallery Section -->
    <div class="gallery-wrapper">
        <h2 class="title">🖼 Gallery List</h2>

        <div class="grid">
            @forelse($data as $item)
                <div class="card-img">
                    <img src="{{ asset('gallery_img/'.$item->image) }}" alt="image">

                    <div class="overlay">
                        <form action="{{ url('delete_gallery',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p style="color:white;text-align:center;">No images found</p>
            @endforelse
        </div>
    </div>

</div>
</div>
</div>

@include('admin.footer')

</body>
</html>
