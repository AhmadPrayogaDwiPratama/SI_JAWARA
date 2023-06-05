<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_cafe;
use PDF;
class tb_cafecontroller extends Controller
{
        public function exportpdf(){
            $cafe = tb_cafe::all();
            $PDF = PDF::loadView('cafe/reportcafe', array('cafe' => $cafe))->setOptions(['defaultFont' => 'sans-serif']);
            return $PDF->stream('data-cafe.pdf');
        }
    public function index()
    {
        $cafe = tb_cafe::all();
        return view('cafe.cafe', compact('cafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cafe.tambahcafe');
    }

    public function insert(Request $request)
    {
        tb_cafe::create($request->all());
        return redirect()->route('cafeIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_cafe)
    {
        $cafe = tb_cafe::find($id_cafe);
        //dd($data_gudang_rokok);
        return view('cafe.cafe-edit', compact('cafe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_cafe)
    {
        $cafe = tb_cafe::find($id_cafe);
        $cafe->update($request->all());
        return redirect()->route('cafeIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_cafe)
    {
        $cafe = tb_cafe::find($id_cafe);
        $cafe->delete();
        return redirect()->route('cafeIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}