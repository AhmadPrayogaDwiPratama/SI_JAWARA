<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_user;
use PDF;

class tb_usercontroller extends Controller
{
    public function exportpdf(){
        $user = tb_user::all();
        $PDF = PDF::loadView('user/reportuser', array('user' => $user))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-user.pdf');
    }
    public function index()
    {
        $user = tb_user::all();
        return view('user.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.tambahuser');
    }

    public function insert(Request $request)
    {
        tb_user::create($request->all());
        return redirect()->route('userIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_user)
    {
        $user = tb_user::find($id_user);
        //dd($data_gudang_rokok);
        return view('user.user-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_user)
    {
        $user = tb_user::find($id_user);
        $user->update($request->all());
        return redirect()->route('userIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_user)
    {
        $user = tb_user::find($id_user);
        $user->delete();
        return redirect()->route('userIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    // public function exportPDF()
    // {
    //     $tb_user = DataGudangRokok::all();
    //     view()->share('DataGudangRokokIndex', $data_gudang_rokok);
    //     $pdf = PDF::loadview('DataGudangRokok.printpdf', compact('data_gudang_rokok'));
    //     return $pdf->stream('DataGudangRokok.pdf');

}