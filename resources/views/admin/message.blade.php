<!DOCTYPE html>
<html>
@include('admin.css')

<style>
.cat {
    text-align: center;
    font-weight: bold;
    color: white;
    padding-bottom: 40px;
}

.table {
    margin: 50px auto;
    width: 100%;
    max-width: 1100px;
    text-align: center;
    border: 2px solid white;
    table-layout: fixed;
}

th {
    background-color: rgba(171, 21, 101, 0.78);
    color: #fff;
    padding: 12px;
}

td {
    border: 2px solid white;
    padding: 10px;
    color: #fff;
    word-wrap: break-word;
}

.action-btn {
    padding: 6px 14px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}

.btn-send {
    background-color: rgba(171, 21, 101, 0.78);
}

.btn-delete {
    background-color: red;
    border: none;
    cursor: pointer;
}
</style>

<body>

@include('admin.header')

<div class="d-flex align-items-stretch">
@include('admin.slidebar')

<div class="page-content">
<div class="page-header">
<div class="container-fluid">

<h1 class="cat">View Messages</h1>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
    @forelse($data as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ \Illuminate\Support\Str::limit($item->message, 50) }}</td>

            <td>
                <div style="display:flex; justify-content:center; gap:10px;">

                    <!-- Send Message -->
                    <a href="{{ url('sent_message', $item->id) }}" class="action-btn btn-send">
                        Send
                    </a>

                    <!-- Delete -->
                    <form action="{{ route('delete_message', $item->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure to delete this message?')">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="action-btn btn-delete">
                            Delete
                        </button>
                    </form>

                </div>
            </td>
        </tr>

    @empty
        <tr>
            <td colspan="5">No messages found</td>
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