<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Restaurant;
use App\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function registered(){

        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function registeredit(Request $request, $id){

        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }

    public function registerupdate(Request $request, $id){

        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status','Your Data is Updated');
    }

    public function registerdelete($id){

        $users = User::findOrFail($id);
        $users->delete();
        
        return redirect('/role-register')->with('status','Your Data is Deleted');
    }

    public function restaurant(){

        $users = Restaurant::all();
        return view('admin.restaurant')->with('users',$users);
    }

    public function resdelete($id){

       
        $users = Restaurant::findOrFail($id);
        $users->delete();
       
        return redirect('/restaurant')->with('status','Your Data is Deleted');
    }

   
    public function resedit(Request $request, $id){

        $users = Restaurant::findOrFail($id);
        return view('admin.res-edit')->with('users',$users);
    }

    public function resadd(){

        $users = User::all();
        return view('admin.res-add')->with('users',$users);
    }

    public function resnewadd(Request $request){

        $users = new Restaurant;
        $users->name = $request->input('name');
        $users->category = $request->input('category');
        $users->location = $request->input('location');
        $users->user_id = $request->input('user_id');

        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('assets/img1/',$filename);
            $users->img = $filename;
        }else{
            return $request;
            $users ->img = '';
        }

        $users->save();

        return redirect('/restaurant')->with('status','Your Data is Added');
    }

    public function resupdate(Request $request, $id){

        $users = Restaurant::find($id);
        $users->name = $request->input('username');
        $users->category = $request->input('category');
        $users->location = $request->input('location');
        $users->img = $request->input('img');
        $users->update();

        return redirect('/restaurant')->with('status','Your Data is Updated');
    }



    public function menu(){

        $users = Menu::all();
        return view('admin.menu')->with('users',$users);
    }

    public function menudelete($id){

       
        $users = Menu::findOrFail($id);
        $users->delete();
       
        return redirect('/menu')->with('status','Your Data is Deleted');
    }

   
    public function menuedit(Request $request, $id){

        $users = Menu::findOrFail($id);
        return view('admin.menu-edit')->with('users',$users);
    }

    public function menuadd(){

        $users = Restaurant::all();
        return view('admin.menu-add')->with('users',$users);
    }

    public function menunewadd(Request $request){

        $users = new Menu;
        $users->name = $request->input('username');
        $users->category = $request->input('category');
        $users->res_id = $request->input('res_id');
        $users->type = $request->input('type');
        $users->price = $request->input('price');
        $users->save();

        return redirect('/menu')->with('status','Your Data is Added');
    }

    public function menuupdate(Request $request, $id){

        $users = Menu::find($id);
        $users->name = $request->input('username');
        $users->category = $request->input('category');
        $users->type = $request->input('type');
        $users->price = $request->input('price');
        $users->update();

        return redirect('/menu')->with('status','Your Data is Updated');
    }

   

    // public function res1(){

    //     $users = Restaurant::all();
    //     return view('admin.res-lpu')->with('users',$users);
    // }
}
