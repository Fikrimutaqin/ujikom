<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $mahasiswas=Mahasiswa::latest()->paginate(5);
        return view('mhs.index', compact('mahasiswas'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mhs.create');
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
        $request->validate([
            'nama'=>'required',
            'Gender'=>'required',
            'usia'=>'required',
            'alamat'=>'required',
        ]);
        Mahasiswa::create($request->all());
        return redirect()->route('mhs.index')->with('success','data berhasil di tambahkan');
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
        $mahasiswas = Mahasiswa::find($id);
        return view('mhs.detail', compact('mahasiswas'));
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
        $mahasiswa = Mahasiswa::find($id);
        return view('mhs.edit', compact('mahasiswa'));
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
        $request->validate([
            'nama'=>'required',
            'Gender'=>'required',
            'usia'=>'required',
            'alamat'=>'required',
        ]);
        $mahasiswas = Mahasiswa::find($id);
        $mahasiswas->nama = $request->get('nama');
        $mahasiswas->Gender = $request->get('Gender');
        $mahasiswas->usia = $request->get('usia');
        $mahasiswas->alamat = $request->get('alamat');
        $mahasiswas->save();
        return redirect()->route('mhs.index')->with('success', 'data berhasil di edit');
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
        $mahasiswas = Mahasiswa::find($id);
        $mahasiswas->delete();
        return redirect()->route('mhs.index')->with('success', 'data berhasil di hapus');
    }
}
