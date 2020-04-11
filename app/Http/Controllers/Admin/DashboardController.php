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

        $restaurant = Restaurant::all();
        return view('admin.restaurant')->with('restaurant',$restaurant);
    }

    public function resdelete($id){

       
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();
       
        return redirect('/restaurant')->with('status','Your Data is Deleted');
    }

   
    public function resedit(Request $request, $id){

        $restaurant = Restaurant::findOrFail($id);
        return view('admin.res-edit')->with('restaurant',$restaurant);
    }

    public function resadd(){

        $users = User::all();
        return view('admin.res-add')->with('users',$users);
    }

    public function resnewadd(Request $request){

        $restaurant = new Restaurant;
        $restaurant->name = $request->input('name');
        $restaurant->category = $request->input('category');
        $restaurant->location = $request->input('location');
        $restaurant->user_id = $request->input('user_id');
        
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('upload/img1/',$filename);
            $restaurant->img = $filename;
        }else{
            return $request;
            $restaurant ->img = '';
        }

        $restaurant->save();

        return redirect('/restaurant')->with('status','Your Data is Added');
    }

    public function resupdate(Request $request, $id){

        $restaurant = Restaurant::find($id);
        $restaurant->name = $request->input('username');
        $restaurant->category = $request->input('category');
        $restaurant->location = $request->input('location');


        $restaurant->update();

        return redirect('/restaurant')->with('status','Your Data is Updated');
    }



    public function menu(){

        $menu = Menu::all();
        return view('admin.menu')->with('menu',$menu);
    }

    public function menudelete($id){

       
        $menu = Menu::findOrFail($id);
        $menu->delete();
       
        return redirect('/menu')->with('status','Your Data is Deleted');
    }

   
    public function menuedit(Request $request, $id){

        $menu = Menu::findOrFail($id);
        return view('admin.menu-edit')->with('menu',$menu);
    }

    public function menuadd(){

        $restaurant = Restaurant::all();
        return view('admin.menu-add')->with('restaurant',$restaurant);
    }

    public function menunewadd(Request $request){

        $menu = new Menu;
        $menu->name = $request->input('username');
        $menu->category = $request->input('category');
        $menu->res_id = $request->input('res_id');
        $menu->type = $request->input('type');
        $menu->price = $request->input('price');
        $menu->save();

        return redirect('/menu')->with('status','Your Data is Added');
    }

    public function menuupdate(Request $request, $id){

        $menu = Menu::find($id);
        $menu->name = $request->input('username');
        $menu->category = $request->input('category');
        $menu->type = $request->input('type');
        $menu->price = $request->input('price');
        $menu->update();

        return redirect('/menu')->with('status','Your Data is Updated');
    }
}
