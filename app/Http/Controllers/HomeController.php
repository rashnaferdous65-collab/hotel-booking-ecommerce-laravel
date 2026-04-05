<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index(){
         $room=Room::all();
           $gallery= Gallery::all();
        return view('admin.index', compact('room', 'gallery'));
    }

    public function home(){

        return view('home.index');
    }

    public function room_details($id){
       $data=Room::find($id);
        return view('home.room_details', compact('data'));
    }

    public function book_now($id){
        $room = Room::find($id);
        return view('home.book_now', compact('room'));
    }

  public function add_booking(Request $request, $id) 
{
    
    $request->validate([
        'start_date' => 'required|date',
        'end_date'   => 'required|date|after:start_date',
    ]);

  
    $isBooked = Booking::where('room_id', $id)
        ->where(function ($query) use ($request) {
            $query->where('start_date', '<', $request->end_date) 
                  ->where('end_date', '>', $request->start_date);
        })->exists();

    if ($isBooked) {
        flash()->error('This room is already booked for these dates!');
        return redirect()->back();
    }

   
    $data = new Booking;
    $data->room_id    = $id;
    $data->name       = $request->name;
    $data->email      = $request->email;
    $data->phone      = $request->phone;
    $data->start_date = $request->start_date; 
    $data->end_date   = $request->end_date;   
    $data->address    = $request->address;
    
   
    $data->status     = 'waiting';

    $res = $data->save();

    if($res) {
        flash()->success('Room Booked successfully!');
    } else {
        flash()->error('Something went wrong!');
    }
    
    return redirect()->back();
}   

public function contact(Request $request){

$data= new Contact;
$data->name= $request->name;
$data->email= $request->email;
$data->phone=$request->phone;
$data->message=$request->message;

$data->save();

  flash()->success('Message Sent successfully!');
 return redirect('/');


}
    public function our_room(){
      $room=Room::all();
        return view('home.our_room', compact('room'));
    } 
    
    public function our_gallery(){

        $gallery=Gallery::all();
        return view('home.our_gallery', compact('gallery'));
    }

    public function our_about(){

         return view('home.our_about');
    }

      public function contact_us(){

      
        return view('home.contact_us');
    }

      public function blog_us(){

      
        return view('home.blog_us');
    }
    
}
