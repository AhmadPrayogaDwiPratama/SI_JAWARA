<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pembeli;
use App\Models\tb_pesananrestoran;
use App\Models\tb_makanan;
use App\Models\tb_restoran;
use PDF;
class tb_pesananrestorancontroller extends Controller
{
    public function exportpdf(){
        $pesananrestoran = tb_pesananrestoran::all();
        $PDF = PDF::loadView('pesanan/reportpesananrestoran', array('pesananrestoran' => $pesananrestoran))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pesananrestoran.pdf');
    }
    public function index()
    {
        $pesananrestoran = tb_pesananrestoran::all();
        return view('pesanan.pesananrestoran', compact('pesananrestoran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembeli=tb_pembeli::all();
        $makanan=tb_makanan::all();
        $restoran=tb_restoran::all();
        return view('pesanan.tambahpesananrestoran',compact('pembeli','makanan','restoran'));
    }

    public function insert(Request $request)
    {
        tb_pesananrestoran::create($request->all());
        return redirect()->route('pesananrestoranIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_pesananrestoran)
    {
        $pembeli=tb_pembeli::all();
        $makanan=tb_makanan::all();
        $restoran=tb_restoran::all();
        $pesananrestoran = tb_pesananrestoran::find($id_pesananrestoran);
        //dd($data_gudang_rokok);
        return view('pesanan.pesananrestoran-edit', compact('pesananrestoran','pembeli','makanan','restoran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pesananrestoran)
    {
        $pesananrestoran = tb_pesananrestoran::find($id_pesananrestoran);
        $pesananrestoran->update($request->all());
        return redirect()->route('pesananrestoranIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_pesananrestoran)
    {
        $pesananrestoran = tb_pesananrestoran::find($id_pesananrestoran);
        $pesananrestoran->delete();
        return redirect()->route('pesananrestoranIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}