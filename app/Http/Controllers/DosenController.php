<?php

namespace App\Http\Controllers;
use App\Models\Dosen;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Dosen::all();
        return view('dosen.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
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
                'dosen_nama' => 'required',
                'alamat' => 'required',
                'tgl_lahir' => 'required',
            ],
            [
                'dosen_nama.required' => 'Nama Dosen Wajib diisi',
                'alamat.required' => 'Alamat Dosen wajib diisi',
                'tgl_lahir.required' => 'Tanggal Lahir Dosen wajib diisi',                
            ]
        );

       dosen::create([
            'dosen_nama' => $request->dosen_nama,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        return redirect('dosen');
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
        $row = dosen::findOrFail($id);
        return view('dosen.edit', compact('row'));
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
                'dosen_nama' => 'required',
                'alamat' => 'required',
                'tgl_lahir' => 'required',
            ],
            [
                'dosen_nama.required' => 'Nama Dosen Wajib diisi',
                'alamat.required' => 'Alamat Dosen wajib diisi',
                'tgl_lahir.required' => 'Tanggal Lahir Dosen wajib diisi',                
            ]
        );

        $row = dosen::findOrFail($id);
        $row->update([
            'dosen_nama' => $request->dosen_nama,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,

        ]);

        return redirect('dosen');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = dosen::findOrFail($id);
        $row->delete();

        return redirect('dosen');
    }
}
