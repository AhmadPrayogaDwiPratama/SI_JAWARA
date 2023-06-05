<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_minuman;
use PDF;
class tb_minumancontroller extends Controller
{
    public function exportpdf(){
        $minuman = tb_minuman::all();
        $PDF = PDF::loadView('minuman/reportminuman', array('minuman' => $minuman))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-minuman.pdf');
    }
    public function index()
    {
        $minuman = tb_minuman::all();
        return view('minuman.minuman', compact('minuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('minuman.tambahminuman');
    }

    public function insert(Request $request)
    {
        tb_minuman::create($request->all());
        return redirect()->route('minumanIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_minuman)
    {
        $minuman = tb_minuman::find($id_minuman);
        //dd($data_gudang_rokok);
        return view('minuman.minuman-edit', compact('minuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_minuman)
    {
        $minuman = tb_minuman::find($id_minuman);
        $minuman->update($request->all());
        return redirect()->route('minumanIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_minuman)
    {
        $minuman = tb_minuman::find($id_minuman);
        $minuman->delete();
        return redirect()->route('minumanIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}