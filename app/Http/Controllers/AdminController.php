<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Contact;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function hotel_room(){

        return view('admin.hotel_room');
    }

    public function add_room(Request $request){


$data= new Room();

$data->room_title= $request->title;
$data->description= $request->description;
$data->price= $request->price;
$data->wifi= $request->wifi;
$data->room_type= $request->type;
   

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time().'_'.$image->getClientOriginalName(); 
        $image->move(public_path('roomimage'), $imagename); 
        
       
        $data->room_img = $imagename; 
    }
$data->save();
flash()->success('Room Details Added successfully!');
return redirect()->back();


    }


    public function view_room(){
     
        $data=Room::all();

        return view('admin.view_room', compact('data'));
    }

    public function delete_room($id){
      $data= Room::findOrFail($id);
        $data->delete();
flash()->success('Room Details Deleted successfully!');
return redirect()->back();
    }


   public function edit_room($id){

    $data= Room::findOrFail($id);
    return view('admin.edit_room', compact('data'));
   }

   public function update_room(Request $request, $id){

    $data= Room::findOrFail($id);
    $data->room_title= $request->room_title;
    $data->description= $request->description;
    $data->price= $request->price;
    $data->room_type= $request->type;
    $data->wifi= $request->wifi;
     if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time().'_'.$image->getClientOriginalName(); 
        $image->move(public_path('roomimage'), $imagename); 
        
       
        $data->room_img = $imagename; 
    }

    $data->save();
    flash()->success('Room Details Updated successfully!');
return redirect()->back();
   }

   public function booking_room(){
   $data=Booking::all();
    return view('admin.booking_room', compact('data'));
   }


   public function delete_booking($id){

      $data= Booking::findOrFail($id);
        $data->delete();
flash()->success('Booking Deleted successfully!');
return redirect()->back();

   }

public function approve_booking($id){
    $data = Booking::find($id);

    if($data->status == 'approved'){
        return redirect()->back();
    } else {
        $data->status = 'approved';
        $data->save();

        flash()->success('Booking Approved successfully!');
        return redirect()->back();
    }
}

public function reject_booking($id){
    $data = Booking::find($id);

    if($data->status == 'rejected'){
        return redirect()->back();
    } else {
        $data->status = 'rejected';
        $data->save();

       flash()->success('Booking Rejected successfully!');
        return redirect()->back();
    }
}

public function gallery(){
   $data= Gallery::all();
    return view('admin.gallery', compact('data'));
}


public function upload_gallery(Request $request){


    $data=new Gallery;
    $image=$request->image;

      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time().'_'.$image->getClientOriginalName(); 
        $image->move(public_path('gallery_img'), $imagename); 
        
       
        $data->image = $imagename; 
    }

    $data->save();

       flash()->success('Image Added successfully!');
        return redirect()->back();
}

  public function delete_gallery($id){
      $data= Gallery::findOrFail($id);
        $data->delete();
flash()->success('Image Deleted successfully!');
return redirect()->back();
    }

public function message(){
   $data= Contact::all();
    return view('admin.message', compact('data'));
}

public function delete_message($id){

    $data= Contact::findOrFail($id);
    $data->delete();
    flash()->success('Customer Message Deleted successfully!');
return redirect()->back();
}

public function sent_message($id){

    $data=Contact::findOrFail($id);
    return view('admin.sent_message', compact('data'));
}

public function mail(Request $request, $id){

    $data=Contact::find($id);

    $details=[

        'greeting'=> $request->greeting,
        'body'=> $request->body,
        'action_text'=> $request->action_text,
        'action_url'=> $request->action_url,
        'endline'=> $request->endline,
    ];

    Notification::send($data,new SendEmailNotification($details));

     flash()->success('Notification Sent successfully!');
return redirect()->back();
}
}
