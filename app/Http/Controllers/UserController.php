<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        auth()->user();
        return view('profile.index');
    }

    public function create()
    {
        return view('akses.create');
    }

    public function store(Request $request)
    {
        User::create([
            'captcha' => $request->captcha,
            'avatar' => $request->avatar,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'asrama' => $request->asrama,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar' => $request->tgl_keluar,
            'alamat_sekarang' => $request->alamat_sekarang,
            'pekerjaan' => $request->pekerjaan,
            'universitas' => $request->universitas,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'angkatan' => $request->angkatan,
            'tgl_seminar' => $request->tgl_seminar,
            'tgl_skripsi' => $request->tgl_skripsi,
            'tgl_wisuda' => $request->tgl_wisuda,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'asal_sekolah' => $request->asal_sekolah,
            'tgl_lahir' => $request->tgl_lahir,
            'prestasi' => $request->prestasi,
            'organisasi' => $request->organisasi,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
        ]);
        
        return redirect('/akses');
    }
    
    public function akun()
    {
        $users = User::all();
        
        return view('super.pages.akun.index', compact('users'));

        
    }

    public function akunEdit($id)
    {
        $users = User::findOrFail($id);
        return view('super.pages.akun.edit', compact('users'));
    }
    
    public function akunUpdate(Request $request, $id)
    {
        User::findOrFail($id)->update($request->all());

        return redirect('/super-akun');
    }

    public function akunDelete($id)
    {
        User::destroy($id);
        return back();
    }

    // public function cetak_pdfAkses()
    // {
    //     $users = User::all();

    //     $pdf = PDF::loadView('akses.akses_pdf', compact('users'));
    //     return $pdf->download('laporan-data-akses.pdf');
    // }

    // public function cetak_excelAkses() 
    // {
    //     return Excel::download(new UsersExport, 'users.xlsx');
    // }

    // public function importUser() 
    // {
    //     Excel::import(new UsersImport, 'users.xlsx');
        
    //     return redirect('/akses')->with('success', 'All good!');
    // }

    public function detail($id)
    {
        $users = User::findOrFail($id);
        return view('warga.detail', compact('users'));
    }
}
