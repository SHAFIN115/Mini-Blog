<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use RealRashid\SweetAlert\Facades\Alert;



class DashboardController extends Controller
{
    public function show_post(){
       
        Alert::alert('Title', 'Message', 'Type');

        $post=Post::all();
        return view('dashboard',['post'=>$post]);
    }
}
