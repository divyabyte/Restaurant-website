<?php

namespace App\Http\Controllers\Users;
use App\User;
use App\Restaurant;
use App\Menu;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function res(){

        $restaurant = Restaurant::all();
        return view('users.res-lpu')->with('restaurant',$restaurant);
    }

    public function res1(){

        $restaurant = Restaurant::all();
        return view('users.res-law')->with('restaurant',$restaurant);
    }

    public function resView($id){

        $restaurant = Restaurant::with('menus')->where('id',$id)->get();  

        return view('users.res-view')->with('restaurant',$restaurant);
    }

    public function profile(){

        $users = User::all();
        return view('users.user-profile')->with('users',$users);
    }

    public function profileEdit(){

        $users = User::all();
        return view('users.user-profile-edit')->with('users',$users);
    }

    public function profileUpdate(Request $request, $id){

        $users = User::find($id);
        $users->name = $request->input('username');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->update();

        return redirect('/user-profile')->with('status','Your Data is Updated');
    }
}
