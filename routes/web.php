<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Room;
use App\Models\Gallery;

//Route::get('/', [HomeController::class,'home']);
Route::get('/', function () {
    $room = Room::all(); 
    $gallery= Gallery::all();
    return view('home.index', compact('room', 'gallery'));
});

Route::get('/dashboard', function () {
     $room = Room::all(); 
       $gallery= Gallery::all();
    return view('home.index' , compact('room', 'gallery'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard', [HomeController::class, 'index'])
->middleware(['auth', 'admin'])
->name('admin.dashboard');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


route::get('/hotel_room', [AdminController::class, 'hotel_room'])
->middleware(['auth', 'admin'])
->name('hotel_room');


route::post('/add_room', [AdminController::class, 'add_room'])
->middleware(['auth', 'admin'])
->name('add_room');

route::get('/view_room', [AdminController::class, 'view_room'])
->middleware(['auth', 'admin'])
->name('view_room');


route::delete('/delete_room/{id}', [AdminController::class, 'delete_room'])
->middleware(['auth', 'admin'])
->name('delete_room');


route::get('/edit_room/{id}', [AdminController::class, 'edit_room'])
->middleware(['auth', 'admin'])
->name('edit_room');

route::put('/update_room/{id}', [AdminController::class, 'update_room'])
->middleware(['auth', 'admin'])
->name('update_room');

route::get('/room_details/{id}', [HomeController::class, 'room_details'])
->name('room_details');


route::get('/book_now/{id}', [HomeController::class, 'book_now'])
->name('book_now');


route::post('/add_booking/{id}', [HomeController::class, 'add_booking'])
->name('add_booking');

route::get('/booking_room', [AdminController::class, 'booking_room'])
->middleware(['auth', 'admin'])
->name('booking_room');

route::delete('/delete_booking/{id}', [AdminController::class, 'delete_booking'])
->middleware(['auth', 'admin'])
->name('delete_booking');

route::get('/approve_booking/{id}', [AdminController::class, 'approve_booking'])
->middleware(['auth', 'admin'])
->name('approve_booking');

route::get('/reject_booking/{id}', [AdminController::class, 'reject_booking'])
->middleware(['auth', 'admin'])
->name('reject_booking');

route::get('/gallery', [AdminController::class, 'gallery'])
->middleware(['auth', 'admin'])
->name('gallery');


route::post('/upload_gallery', [AdminController::class, 'upload_gallery'])
->middleware(['auth', 'admin'])
->name('upload_gallery');

route::delete('/delete_gallery/{id}', [AdminController::class, 'delete_gallery'])
->middleware(['auth', 'admin'])
->name('delete_gallery');


route::post('/contact', [HomeController::class, 'contact'])
->name('contact');

route::get('/message', [AdminController::class, 'message'])
->middleware(['auth', 'admin'])
->name('message');

route::delete('/delete_message/{id}', [AdminController::class, 'delete_message'])
->middleware(['auth', 'admin'])
->name('delete_message');


route::get('/sent_message/{id}', [AdminController::class, 'sent_message'])
->middleware(['auth', 'admin'])
->name('sent_message');


route::post('/sent/{id}', [AdminController::class, 'sent'])
->middleware(['auth', 'admin'])
->name('sent');


route::get('/our_room', [HomeController::class, 'our_room'])
->name('our_room');

route::get('/our_gallery', [HomeController::class, 'our_gallery'])
->name('our_gallery');

route::get('/our_about', [HomeController::class, 'our_about'])
->name('our_about');

route::get('/contact_us', [HomeController::class, 'contact_us'])
->name('contact_us');

route::get('/blog_us', [HomeController::class, 'blog_us'])
->name('blog_us');