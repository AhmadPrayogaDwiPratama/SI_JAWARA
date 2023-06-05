<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_makanan;
use PDF;
class tb_makanancontroller extends Controller
{
    public function exportpdf(){
        $makanan = tb_makanan::all();
        $PDF = PDF::loadView('makanan/reportmakanan', array('makanan' => $makanan))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-makanan.pdf');
    }
    public function index()
    {
        $makanan = tb_makanan::all();
        return view('makanan.makanan', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('makanan.tambahmakanan');
    }

    public function insert(Request $request)
    {
        tb_makanan::create($request->all());
        return redirect()->route('makananIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_makanan)
    {
        $makanan = tb_makanan::find($id_makanan);
        //dd($data_gudang_rokok);
        return view('makanan.makanan-edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_makanan)
    {
        $makanan = tb_makanan::find($id_makanan);
        $makanan->update($request->all());
        return redirect()->route('makananIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_restoran)
    {
        $makanan = tb_makanan::find($id_restoran);
        $makanan->delete();
        return redirect()->route('restoranIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}