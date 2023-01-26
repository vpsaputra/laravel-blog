<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeddingController extends Controller
{
    public function index()
    {
        $wedding = DB::select('select * from wedding_detail where id_wedding = :id', ['idi' => 1]);
        return view('cover',['wedding' => $wedding]);
    }

    public function cover(){
        return view('cover');
    }
}
