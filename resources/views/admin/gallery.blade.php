<!DOCTYPE html>
<html>
@include('admin.css')

<style>


.gallery-card{
    background: #2c2f33;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    max-width: 600px;
    margin: auto;
}

.gallery-card h1{
    text-align: center;
    color: #fff;
    margin-bottom: 30px;
    font-weight: 600;
}

.form-group{
    margin-bottom: 20px;
}

.form-group label{
    display: block;
    margin-bottom: 8px;
    color: #ccc;
    font-size: 15px;
}

.form-group input[type="file"]{
    width: 100%;
    padding: 10px;
    background: #23272a;
    border: 1px dashed #555;
    border-radius: 8px;
    color: #aaa;
}

.btn-upload{
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #ff416c, #ff4b2b);
    border: none;
    border-radius: 8px;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: 0.3s ease;
}

.btn-upload:hover{
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(255,75,43,0.4);


}

.gallery-section{
    margin-top: 60px;
}

.gallery-title{
    color: #fff;
    font-size: 26px;
    margin-bottom: 25px;
    font-weight: 600;
    text-align: center;
}

.gallery-grid{
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
}

.gallery-item{
    background: #2c2f33;
    padding: 10px;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 8px 20px rgba(0,0,0,0.35);
    transition: 0.3s ease;
}

.gallery-item:hover{
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.6);
}

.gallery-item img{
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 10px;
}


.gallery-overlay{
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.55);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: 0.3s;
}

.gallery-item:hover .gallery-overlay{
    opacity: 1;
}



.btn-delete{
    background: linear-gradient(135deg, #ff3b3b, #c70000);
    border: none;
    padding: 10px 18px;
    border-radius: 25px;
    color: #fff;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    transition: 0.3s ease;
}

.btn-delete:hover{
    background: linear-gradient(135deg, #ff0000, #990000);
    transform: scale(1.05);
    box-shadow: 0 6px 15px rgba(255,0,0,0.5);
}

</style>

<body>
@include('admin.header')

<div class="d-flex align-items-stretch">
@include('admin.slidebar')

<div class="page-content">
<div class="page-header">
<div class="container-fluid">

    <div class="gallery-card">
        <h1>📸 Add Image</h1>

        <form action="{{url('upload_gallery')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="image" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-upload">
                    ➕ Add Image
                </button>
            </div>
        </form>
    </div>
          <div class="gallery-section">
    <h1 class="gallery-title">🖼 View Gallery</h1>

    <div class="gallery-grid">
        @foreach($data as $item)
        <div class="gallery-item">
            <img src="gallery_img/{{$item->image}}" alt="Gallery Image">

            <div class="gallery-overlay">
                <form action="{{ url('delete_gallery', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">
                        🗑 Delete
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>


</div>
</div>
</div>

</div>

@include('admin.footer')
</body>
</html>
