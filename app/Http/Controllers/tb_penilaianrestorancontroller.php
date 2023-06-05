<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pembeli;
use App\Models\tb_penilaianrestoran;
use App\Models\tb_kriteriarestoran;
use App\Models\tb_restoran;
use PDF;
class tb_penilaianrestorancontroller extends Controller
{
    public function exportpdf(){
        $penilaianrestoran = tb_penilaianrestoran::all();
        $PDF = PDF::loadView('penilaianrestoran/reportpenilaianrestoran', array('penilaianrestoran' => $penilaianrestoran))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-penilaianrestoran.pdf');
    }
    public function index()
    {
        $penilaianrestoran = tb_penilaianrestoran::all();
        return view('penilaianrestoran.penilaianrestoran', compact('penilaianrestoran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembeli=tb_pembeli::all();
        $restoran=tb_restoran::all();
        $kriteriarestoran=tb_kriteriarestoran::all();
        return view('penilaianrestoran.tambahpenilaianrestoran',compact('pembeli','restoran','kriteriarestoran'));
    }

    public function insert(Request $request)
    {
        tb_penilaianrestoran::create($request->all());
        return redirect()->route('penilaianrestoranIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_penilaianrestoran)
    {
        $pembeli=tb_pembeli::all();
        $restoran=tb_restoran::all();
        $kriteriarestoran=tb_kriteriarestoran::all();
        $penilaianrestoran = tb_penilaianrestoran::find($id_penilaianrestoran);
        //dd($data_gudang_rokok);
        return view('penilaianrestoran.penilaianrestoran-edit', compact('penilaianrestoran','restoran','kriteriarestoran','pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_penilaianrestoran)
    {
        $penilaianrestoran = tb_penilaianrestoran::find($id_penilaianrestoran);
        $penilaianrestoran->update($request->all());
        return redirect()->route('penilaianrestoranIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_penilaianrestoran)
    {
        $penilaianrestoran = tb_penilaianrestoran::find($id_penilaianrestoran);
        $penilaianrestoran->delete();
        return redirect()->route('penilaianrestoranIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}