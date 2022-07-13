<?php

namespace App\Http\Controllers;
use App\Models\Matkul;

use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Matkul::all();
        return view('matkul.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'matkul_id_dosen' => 'required',
                'matkul_nama' => 'required',
                'jumlah_sks' => 'required',
                'semester' => 'required',
            ],
            [
                'matkul_id_dosen.required' => 'Id Dosen Matkul Wajib diisi',
                'matkul_nama.required' => 'Nama Matkul wajib diisi',
                'jumlah_sks.required' => 'Jumlah SKS Matkul wajib diisi',
                'semester.required' => 'Semester wajib diisi',                
            ]
        );

       matkul::create([
            'matkul_id_dosen' => $request->matkul_id_dosen,
            'matkul_nama' => $request->matkul_nama,
            'jumlah_sks' => $request->jumlah_sks,
            'semester' => $request->semester,
        ]);

        return redirect('matkul');
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
        $row = matkul::findOrFail($id);
        return view('matkul.edit', compact('row'));
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
        $request->validate(
            [
                'matkul_id_dosen' => 'required',
                'matkul_nama' => 'required',
                'jumlah_sks' => 'required',
                'semester' => 'required',
            ],
            [
                'matkul_id_dosen.required' => 'Id Dosen Matkul Wajib diisi',
                'matkul_nama.required' => 'Nama Matkul wajib diisi',
                'jumlah_sks.required' => 'Jumlah SKS Matkul wajib diisi',
                'semester.required' => 'Semester wajib diisi',                
            ]
        );

        $row = matkul::findOrFail($id);
        $row->update([
            'matkul_id_dosen' => $request->matkul_id_dosen,
            'matkul_nama' => $request->matkul_nama,
            'jumlah_sks' => $request->jumlah_sks,
            'semester' => $request->semester,
        ]);

        return redirect('matkul');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = matkul::findOrFail($id);
        $row->delete();

        return redirect('matkul');
    }
}
