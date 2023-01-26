<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$data = DB::table('weddings')->get();
       //  $data = DB::select('SELECT * FROM weddings t1, canten t2 where t1.id=t2.id_wedding ORDER BY t2.jenis_kelamin ASC');
        //$data = 'App\Models\Wedding' :: all();
 

        // load semua data table wedding * menggunakan Eloquent
               $data = Wedding::all();
             
    //    echo $data;
        return view('admin.index', ['data' => $data]);
    }

    public function get_wedding(){
        $data_utama = DB::select('SELECT id from wedding t1 where t1.id=t2.id_wedding AND t2.jenis_kelamin=="L"');
        return $data_utama;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($wedding,  $name)
    {
        echo $wedding.''.$name;
       
        return $wedding ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
