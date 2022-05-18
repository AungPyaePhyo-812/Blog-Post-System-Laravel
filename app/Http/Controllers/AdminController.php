<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Carbon\Carbon;
use App\Models\Role; 


class AdminController extends Controller
{
    //To count total message in admin dashboard
    public function countmessage(){
        $daily = Message::where('created_at','>=', Carbon::today())->count();
       $weekly = Message::where('created_at','>=', Carbon::today()->subDays(7))->count();
       $monthly = Message::where('created_at','>=', Carbon::today()->subDays(30))->count();
       $yearly = Message::where('created_at','>=', Carbon::today()->subDays(365))->count();

       $count= [$daily,$weekly,$monthly,$yearly];
       return view('admin.dashboard',compact('count'));

       
    }

    
}
