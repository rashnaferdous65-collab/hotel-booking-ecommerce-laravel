<!DOCTYPE html>
<html lang="en">

@include('admin.css')

<style>
.mail-card {
    background: #2c2f33;
    padding: 35px;
    border-radius: 12px;
    max-width: 750px;
    margin: 40px auto;
    box-shadow: 0 12px 35px rgba(0,0,0,0.4);
}

.mail-card h2 {
    color: #fff;
    text-align: center;
    margin-bottom: 30px;
    font-weight: 600;
}

.form-label {
    color: #ccc;
    margin-bottom: 5px;
}

.form-control {
    background: #1f2226;
    border: 1px solid #444;
    color: #fff;
}

.form-control:focus {
    border-color: #ff4c60;
    box-shadow: none;
    background: #1f2226;
}

.btn-send {
    background: #ff4c60;
    border: none;
    padding: 10px 30px;
    color: #fff;
    border-radius: 6px;
    transition: 0.3s;
}

.btn-send:hover {
    background: #e84356;
}
</style>

<body>

@include('admin.header')

<div class="d-flex align-items-stretch">
@include('admin.slidebar')

<div class="page-content">
<div class="page-header">
<div class="container-fluid">

    <div class="mail-card">

        <h2>Send Mail to {{$data->name}}</h2>

        <form action="{{ url('sent', $data->id) }}" method="POST">
            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Greeting</label>
                    <input type="text" name="greeting" class="form-control" placeholder="Enter greeting">
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Mail Body</label>
                    <textarea name="mail_body" rows="4" class="form-control" placeholder="Write your message..."></textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Action Text</label>
                    <input type="text" name="action_text" class="form-control" placeholder="Button text">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Action URL</label>
                    <input type="text" name="action_url" class="form-control" placeholder="https://example.com">
                </div>

                <div class="col-md-6 mb-4">
                    <label class="form-label">End Line</label>
                    <input type="text" name="end_line" class="form-control" placeholder="Closing line">
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn-send">
                        🚀 Send Mail
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