<?php

namespace App\Http\Controllers;
use App\Models\Registuser;

use Illuminate\Http\Request;

class AddAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sekretariat.add_anggota');
    }

    /**
     * Show the form for creating a new resource.
     */
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Registuser::updateOrCreate([
            'id' => $request->id
        ],
        [
            'nama' => $request->nama,
            'email' => $request->email,
            'wa' => $request->wa,
            'alamat' => $request->alamat,
        ]);

        return response()->json(['success'=>'Data baru Berhasil Ditambahkan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Registuser = Registuser::find($id);
        return response()->json($Registuser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Registuser = Registuser::find($id);
        return response()->json($Registuser);
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
        Registuser::find($id)->delete();

        return response()->json(['success'=>'Data Berhasil DiHapus.']);
    }
}
