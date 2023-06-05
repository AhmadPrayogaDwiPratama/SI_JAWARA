<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pembeli;
use App\Models\tb_penilaiancafe;
use App\Models\tb_kriteriacafe;
use App\Models\tb_cafe;
use PDF;
class tb_penilaiancafecontroller extends Controller
{
    public function exportpdf(){
        $penilaiancafe = tb_penilaiancafe::all();
        $PDF = PDF::loadView('penilaiancafe/reportpenilaiancafe', array('penilaiancafe' => $penilaiancafe))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-penilaiancafe.pdf');
    }
    public function index()
    {
        $penilaiancafe = tb_penilaiancafe::all();
        return view('penilaiancafe.penilaiancafe', compact('penilaiancafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembeli=tb_pembeli::all();
        $cafe=tb_cafe::all();
        $kriteriacafe=tb_kriteriacafe::all();
        return view('penilaiancafe.tambahpenilaiancafe',compact('pembeli','cafe','kriteriacafe'));
    }

    public function insert(Request $request)
    {
        tb_penilaiancafe::create($request->all());
        return redirect()->route('penilaiancafeIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_penilaiancafe)
    {
        $pembeli=tb_pembeli::all();
        $cafe=tb_cafe::all();
        $kriteriacafe=tb_kriteriacafe::all();
        $penilaiancafe = tb_penilaiancafe::find($id_penilaiancafe);
        //dd($data_gudang_rokok);
        return view('penilaiancafe.penilaiancafe-edit', compact('penilaiancafe','cafe','kriteriacafe','pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_penilaiancafe)
    {
        $penilaiancafe = tb_penilaiancafe::find($id_penilaiancafe);
        $penilaiancafe->update($request->all());
        return redirect()->route('penilaiancafeIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_penilaiancafe)
    {
        $penilaiancafe = tb_penilaiancafe::find($id_penilaiancafe);
        $penilaiancafe->delete();
        return redirect()->route('penilaiancafeIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}