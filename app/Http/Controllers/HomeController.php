<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coin;
use App\Models\Product;
use App\Models\OrderUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
        return view('home');
    }
    public function username() {
        $username = request('username');
        $user  = User::where('login',$username)->first();
        $products = Product::get();
        $count=0;
        if(count((array)$user)!=0)  {
            $balance =($user->coins)->unique('action'); 
            foreach($balance as $bal) {
                $count+=$bal->price;
            }
            $img = ['phone-call.svg','special-course.svg','special-course.svg','course.svg'];
            $lists = $user->products;
            $g=[];
            foreach($lists as $list) {
                array_push($g,$list->id);
                $count=$count-$list->price;
            }
            return view('content',compact('count','products','img','g'));
        }
        else return "Ошибка нет такой в базе данных!";
    }

    public function order($name,$prod) {
        $username = request('name');
        $product = Product::find(request('prod'));
        $user  = User::where('login',$username)->first();
        $collect = $user->products()->attach($product);
        return redirect('/user');
    }

}
