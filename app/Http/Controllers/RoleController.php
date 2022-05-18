<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RoleInsertFormRequest;


class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));
    }

    public function create(){
        return view('admin.roles.create');
    }

    public function store(RoleInsertFormRequest $request)
    {
        Role::create(['name'=>$request->get('name')]);
        return redirect()->route('roles.create')->with('success','Successfully Inserted Role');
    }


}
