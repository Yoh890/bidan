<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{

    public function index()
    {
        // $admin =DB::table('users')
        // ->get();

        //dd($admin);
        return  view('pasien.pasien');
    }


    // public function tambah()
    // {
    //     return  view('admin.tambah');
    // }


    // public function simpan(request $request)
    // {
    //     //dd($ambil)
    //     $simpan = Admin::create([
    //         'username' => $request->username,
    //         'password' => $request->password,
    //         'admin_level' => $request->admin_level,
    //         'admin_nama' => $request->admin_nama,
    //         'admin_status' => $request->admin_status
    //     ]);
    //     echo $simpan->id_admin;
    //     return  redirect('admin');
    // }


    //  public function ubah($id)
    // {
    //     $admin = Admin::find($id);
    //     return  view('admin.edit',compact(['admin']));
    // }


    //  public function update($id,request $request)
    // {
    //     $admin = Admin::find($id);
    //     $admin->update($request->except('token','_method'));
    //     return  redirect('admin');

    // }


    // public function hapus($id)
    // {
    //      $hapus = Admin::find($id);
    //      $hapus->delete();
    //     return  redirect('admin');
    // }
}