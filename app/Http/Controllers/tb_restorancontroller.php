<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_restoran;
use PDF;

class tb_restorancontroller extends Controller
{
    public function exportpdf(){
        $restoran = tb_restoran::all();
        $PDF = PDF::loadView('Restoran/reportrestoran', array('restoran' => $restoran))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-restoran.pdf');
}

    public function index()
    {
        $restoran = tb_restoran::all();
        return view('restoran.restoran', compact('restoran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restoran.tambahrestoran');
    }

    public function insert(Request $request)
    {
        tb_restoran::create($request->all());
        return redirect()->route('restoranIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_restoran)
    {
        $restoran = tb_restoran::find($id_restoran);
        //dd($data_gudang_rokok);
        return view('restoran.restoran-edit', compact('restoran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_restoran)
    {
        $restoran = tb_restoran::find($id_restoran);
        $restoran->update($request->all());
        return redirect()->route('restoranIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_restoran)
    {
        $restoran = tb_restoran::find($id_restoran);
        $restoran->delete();
        return redirect()->route('restoranIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}