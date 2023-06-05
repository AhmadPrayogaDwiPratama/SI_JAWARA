<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pembeli;
use App\Models\tb_pesanancafe;
use App\Models\tb_minuman;
use App\Models\tb_cafe;
use PDF;
class tb_pesanancafecontroller extends Controller
{
    public function exportpdf(){
        $pesanancafe = tb_pesanancafe::all();
        $PDF = PDF::loadView('pesanancafe/reportpesanancafe', array('pesanancafe' => $pesanancafe))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pesanancafe.pdf');
    }
    public function index()
    {
        $pesanancafe = tb_pesanancafe::all();
        return view('pesanancafe.pesanancafe', compact('pesanancafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembeli=tb_pembeli::all();
        $minuman=tb_minuman::all();
        $cafe=tb_cafe::all();
        return view('pesanancafe.tambahpesanancafe',compact('pembeli','minuman','cafe'));
    }

    public function insert(Request $request)
    {
        tb_pesanancafe::create($request->all());
        return redirect()->route('pesanancafeIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_pesanancafe)
    {
        $pembeli=tb_pembeli::all();
        $minuman=tb_minuman::all();
        $cafe=tb_cafe::all();
        $pesanancafe = tb_pesanancafe::find($id_pesanancafe);
        //dd($data_gudang_rokok);
        return view('pesanancafe.pesanancafe-edit', compact('pesanancafe','pembeli','minuman','cafe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pesanancafe)
    {
        $pesanancafe = tb_pesanancafe::find($id_pesanancafe);
        $pesanancafe->update($request->all());
        return redirect()->route('pesanancafeIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_pesanancafe)
    {
        $pesanancafe = tb_pesanancafe::find($id_pesanancafe);
        $pesanancafe->delete();
        return redirect()->route('pesanancafeIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}