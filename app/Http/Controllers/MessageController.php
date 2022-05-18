<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //Can send a message everyone
    public function message(Request $request){
        $validate = $request->validate([
                "name"=>"required",
                "email"=>"required",
                "subject"=>"required",
                "message"=>"required",
        ]);
        Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject, 
            'message'=>$request->message,
        ]);

        return redirect('/contact')->with("mss","Message Sent Successfully!");
    }

    //Only 6 message show in admin dashboard
    public function show(){
        $messages = Message::orderBy('id','desc')->take(6)->get();
        return view('admin.message.index',compact('messages'));
    }
    //When click read more , Show
    public function detail($id){
        $message = Message::find($id);
        return view('admin.message.detail',compact('message'));
    }
    //Can delete a message in admin dashboard
    public function destroy($id){
        $message = Message::find($id);
        $message->delete();
        return redirect()->route('message.show');
    }
}
