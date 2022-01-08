<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        $auth=auth()->user();
        $item=DB::table('users')->get();
        return view('index',['users'=>$item],['auth'=>$auth]);
    }
    public function login(){//

        return view('login');

    }
    public function logout(){//
        //重新導向回首頁
        return redirect('/');

    }

    public function register(){//
        return view('register');
    }

    public function search(){
        return view('search');
    }

    public function cart(){
        return view('cart');
    }

    public function store(){
        return view('store');
    }

    public function sellercenter(){
        return view('sellercenter');
    }

    public function productDetail(){
        return view('productDetail');
    }

    public function dindan(){
        return view('dindan');
    }

    public function category(Request $id){//類別搜尋功能
        $post = Post::find($id);
        $data = ['post' => $post];
        //$search= DB::table('')
        return view('category',$data);
    }

    public function accountadjust(Request $page){
        $auth=auth()->user();
        //$data = ['page' => $page];
//        $pages=Post::find($id);
        return view('accountadjust',['auth'=>$auth],['page' => $page]);
    }

    public function administrator(){
        return view('administrator');
    }
}
