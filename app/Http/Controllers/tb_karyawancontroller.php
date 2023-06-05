<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_karyawan;
use App\Models\tb_user;
use PDF;
class tb_karyawancontroller extends Controller
{
    public function exportpdf(){
        $karyawan = tb_karyawan::all();
        $PDF = PDF::loadView('karyawan/reportkaryawan', array('karyawan' => $karyawan))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-karyawan.pdf');
    }
    public function index()
    {
        $karyawan = tb_karyawan::all();
        return view('karyawan.karyawan', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=tb_user::all();
        return view('karyawan.tambahkaryawan',compact('user'));
    }

    public function insert(Request $request)
    {
        tb_karyawan::create($request->all());
        return redirect()->route('karyawanIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_karyawan)
    {
        $user=tb_user::all();
        $karyawan = tb_karyawan::find($id_karyawan);
        //dd($data_gudang_rokok);
        return view('karyawan.karyawan-edit', compact('karyawan','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_karyawan)
    {
        $karyawan = tb_karyawan::find($id_karyawan);
        $karyawan->update($request->all());
        return redirect()->route('karyawanIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_karyawan)
    {
        $karyawan = tb_karyawan::find($id_karyawan);
        $karyawan->delete();
        return redirect()->route('karyawanIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}