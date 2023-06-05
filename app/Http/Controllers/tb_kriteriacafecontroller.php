<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_kriteriacafe;
use PDF;
class tb_kriteriacafecontroller extends Controller
{
    public function exportpdf(){
        $kriteriacafe = tb_kriteriacafe::all();
        $PDF = PDF::loadView('kriteriacafe/reportkriteriacafe', array('kriteriacafe' => $kriteriacafe))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-kriteriacafe.pdf');
    }
    public function index()
    {
        $kriteriacafe = tb_kriteriacafe::all();
        return view('kriteriacafe.kriteriacafe', compact('kriteriacafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteriacafe.tambahkriteriacafe');
    }

    public function insert(Request $request)
    {
        tb_kriteriacafe::create($request->all());
        return redirect()->route('kriteriacafeIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_KriteriaCafe)
    {
        $kriteriacafe = tb_kriteriacafe::find($id_KriteriaCafe);
        //dd($data_gudang_rokok);
        return view('kriteriacafe.kriteriacafe-edit', compact('kriteriacafe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_KriteriaCafe)
    {
        $kriteriacafe = tb_kriteriacafe::find($id_KriteriaCafe);
        $kriteriacafe->update($request->all());
        return redirect()->route('kriteriacafeIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_KriteriaCafe)
    {
        $kriteriacafe = tb_kriteriacafe::find($id_KriteriaCafe);
        $kriteriacafe->delete();
        return redirect()->route('kriteriacafeIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}