<?php

namespace App\Http\Controllers;
use App\Models\Registuser;
use DataTables;
use Illuminate\Http\Request;

class RegistUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Registuser::latest()->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="anggota/add" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-warning btn-sm editData text-white"><i class="fas fa-edit"></i></a>';

                           $btn = $btn.' <a href="anggota/add" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteData"><i class="fas fa-user-times"></i></a>';
                           $btn = $btn.' <a href="anggota/add" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Show" class="btn btn-primary btn-sm showData"><i class="fas fa-address-card"></i></a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('sekretariat.anggota');
    }


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
