<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\postingan;

class blogController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'post',
            'oppost' => Postingan::with('katagori')->get());
        
        return view('percobaan.blog', compact('data'));
    }

    public function show(Postingan $Post){
        return view('percobaan/nwpost', [
            "title" => "single post",
            "jipost" => $Post

            // postingan::find($slug) ini yang sebelum nya di "jipost"
        ]);
    } 
}
