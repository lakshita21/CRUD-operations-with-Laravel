<?php

namespace App\Http\Controllers;

use App\Models\userdetail;
use Illuminate\Http\Request;

class UserdetailController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('createUser');
    }


    public function store(Request $request)
    {
        $res = new userdetail;
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->save();
        $request->session()->flash('message', "User added successfully");
        return redirect('userData');
    }


    public function show(userdetail $userdetail, Request $r)
    {
        if ($r->session()->has('name')) {
            return view('UserData')->with('userArray', userdetail::all());
        } else {
            $r->session()->flash('errorMessage', "Access Denied");
            return redirect('login');
        }
    }


    public function edit(userdetail $userdetail, $id)
    {
        return view("editUser")->with('user', userdetail::find($id));
    }


    public function update(Request $request, userdetail $userdetail)
    {
        $res = userdetail::find($request->id);
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->save();
        $request->session()->flash('message', "User data updated successfully");
        return redirect('userData');
    }


    public function destroy(userdetail $userdetail, $id)
    {
        userdetail::destroy(array('id', $id));
        return redirect('userData');
    }
}
