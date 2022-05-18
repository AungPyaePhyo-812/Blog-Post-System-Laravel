<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;



class UserController extends Controller
{

    public function index(){
        return view('welcome');
      
    }

    
    //To validate Register Form 
    public function register(Request $request){
       $validated = $request->validate([
           "name"=>"required|min:4|max:20",
           "email"=>"required|min:17|max:25|unique:users",
           "password"=>"confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{8,}$/",
           "password_confirmation"=>"required"
       ],
       [
           "password.regex" =>"Password must be <br> 1. at least  one small letter<br> 2. at least one capital letter <br> 3. at least one special character <br> 
           4. at least eight character"
       ]);
       $password = Hash::make($request->password);
       if($validated){
           $user = User::create([
                "name" =>$request->name,
                "email"=>$request->email,
                "password"=>$password
           ]);

           if($user){
               return redirect()->route('users.login')->with('success','Register Success Please Login Sir!');
           }else{
               return redirect()->back();
           }
           return redirect()->route('users.login');
       }else{
           return back();
       }
    }
  //Aa@1234567

  //To validate login form
    public function login(Request $request){
        $validated = $request->validate([
            
            "email"=>"required|min:17|max:25",
            "password"=>"regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{8,}$/"
            
        ],
        [
            "password.regex" =>"Email and Password does not match"
        ]);

        if($validated){
            $crenditials = [
                "email" => $request->email,
                "password" =>$request->password
            ];

            if(Auth::attempt($crenditials)){
                return redirect()->route('welcome');
            }else{
                return redirect()->back();
            }
            
        }else {
            return redirect()->back();
        }

    }

        //To Do Logout
    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

        //To show users
    public function users(){
        $users = User::with('roles')->get();
        return view('users.home',compact('users'));
    }

    public function edituser($id){
        $user = User::whereId($id)->firstOrFail();
        $roles = Role::all();
        $selectedRoles = $user->roles()->pluck('name')->toArray();

        return view('users.edituser',compact('user','roles','selectedRoles'));
    }

    public function updateuser(Request $request,$id){

        $user = User::whereId($id)->firstOrFail();
        $user->syncRoles($request->get('role'));

        return redirect()->route('users.manageusers')->with('success','User Role Changed');

    }
    //To Manage Users
    public function manageusers(){
        $users = User::with('roles')->get();
        
       
        return view('users.manageusers',compact('users'));
    }

    public function change_password(){
        return view('users.change_password');
    }

    public function update_password(Request $request){
        $request->validate([
            "old_password"=>"required",
            "new_password"=>"required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{8,}$/",
            "password_confirmation"=>"required|same:new_password"
        ]);
        $current_user = auth()->user();
        if(Hash::check($request->old_password,$current_user->password)){
                $current_user->update([
                    'password'=>bcrypt($request->new_password)
                ]);
                return redirect()->back()->with('success','User Password  Successfully Changed!');
        }else{
                return redirect()->back()->with('error','Old Password does not match');
        }

        
    }


   
    //To remove a user
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.manageusers');
    }

    
    
}
