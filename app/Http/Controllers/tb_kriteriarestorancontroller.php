<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_kriteriarestoran;
use PDF;
class tb_kriteriarestorancontroller extends Controller
{
    public function exportpdf(){
        $kriteriarestoran = tb_kriteriarestoran::all();
        $PDF = PDF::loadView('kriteriarestoran/reportkriteriarestoran', array('kriteriarestoran' => $kriteriarestoran))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-kriteriarestoran.pdf');
    }
    public function index()
    {
        $kriteriarestoran = tb_kriteriarestoran::all();
        return view('kriteriarestoran.kriteriarestoran', compact('kriteriarestoran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteriarestoran.tambahkriteriarestoran');
    }

    public function insert(Request $request)
    {
        tb_kriteriarestoran::create($request->all());
        return redirect()->route('kriteriarestoranIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_KriteriaRestoran)
    {
        $kriteriarestoran = tb_kriteriarestoran::find($id_KriteriaRestoran);
        //dd($data_gudang_rokok);
        return view('kriteriarestoran.kriteriarestoran-edit', compact('kriteriarestoran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_KriteriaRestoran)
    {
        $kriteriarestoran = tb_kriteriarestoran::find($id_KriteriaRestoran);
        $kriteriarestoran->update($request->all());
        return redirect()->route('kriteriarestoranIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_KriteriaRestoran)
    {
        $kriteriarestoran = tb_kriteriarestoran::find($id_KriteriaRestoran);
        $kriteriarestoran->delete();
        return redirect()->route('kriteriarestoranIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}