<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pembeli;
use App\Models\tb_user;
use PDF;
class tb_pembelicontroller extends Controller
{
    public function exportpdf(){
        $pembeli = tb_pembeli::all();
        $PDF = PDF::loadView('pembeli/reportpembeli', array('pembeli' => $pembeli))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pembeli.pdf');
    }
    public function index()
    {
        $pembeli = tb_pembeli::all();
        return view('pembeli.pembeli', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=tb_user::all();
        return view('pembeli.tambahpembeli',compact('user'));
    }

    public function insert(Request $request)
    {
        tb_pembeli::create($request->all());
        return redirect()->route('pembeliIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_pembeli)
    {
        $user=tb_user::all();
        $pembeli = tb_pembeli::find($id_pembeli);
        //dd($data_gudang_rokok);
        return view('pembeli.pembeli-edit', compact('pembeli','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pembeli)
    {
        $pembeli = tb_pembeli::find($id_pembeli);
        $pembeli->update($request->all());
        return redirect()->route('pembeliIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_pembeli)
    {
        $pembeli = tb_pembeli::find($id_pembeli);
        $pembeli->delete();
        return redirect()->route('pembeliIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}