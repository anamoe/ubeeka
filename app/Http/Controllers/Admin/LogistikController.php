<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.logistik.index');
    }


    //Data Logistik
    public function index_data_paket_logistik()
    {
        return view('admin.logistik.data_paket.index');
    }

    public function tambah_paket_logistik()
    {
        return view('admin.logistik.data_paket.tambah_paket_logistik');
    }

    public function edit_paket_logistik()
    {
        return view('admin.logistik.data_paket.edit_paket_logistik');
    }


    // Pengiriman Logistik
    public function index_pengiriman_paket_logistik()
    {
        return view('admin.logistik.pengiriman_paket.index');
    }

    public function tambah_pengiriman_paket_logistik()
    {
        return view('admin.logistik.pengiriman_paket.tambah_pengiriman_logistik');
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
    public function show($id)
    {
        //
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