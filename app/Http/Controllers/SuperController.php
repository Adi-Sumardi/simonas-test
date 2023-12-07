<?php

namespace App\Http\Controllers;

use App\Akademik;
use App\Alumni;
use App\Asrama;
use App\Karakter;
use App\Kegiatan;
use App\Kreatif;
use App\Leadership;
use App\User;
use Illuminate\Http\Request;

class SuperController extends Controller
{
    public function index()
    {
        $data_alumni_asgj = Alumni::where('asal_asrama', 'Asrama Sunan Gunung Jati')->count();
        $jumlah_warga_asgj = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Sunan Gunung Jati']])->count();
        $jumlah_warga_pengurus_asgj = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Sunan Gunung Jati'], ['status_warga', 'Pengurus Asrama']])->count();
        $jumlah_warga_percobaan_asgj = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Sunan Gunung Jati'], ['status_warga', 'Warga Percobaan']])->count();
        $jumlah_warga_tetap_asgj = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Sunan Gunung Jati'], ['status_warga', 'Warga Tetap']])->count();

        $data_alumni_asg = Alumni::where('asal_asrama', 'Asrama Sunan Giri')->count();
        $jumlah_warga_asg = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Sunan Giri']])->count();
        $jumlah_warga_pengurus_asg = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Sunan Giri'],['status_warga', 'Pengurus Asrama']])->count();
        $jumlah_warga_percobaan_asg = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Sunan Giri'], ['status_warga', 'Warga Percobaan']])->count();
        $jumlah_warga_tetap_asg = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Sunan Giri'], ['status_warga', 'Warga Tetap']])->count();

        $data_alumni_aws = Alumni::where('asal_asrama', 'Asrama Wali Songo')->count();
        $jumlah_warga_aws = User::where([['role', 'alumni'], ['asrama', 'Asrama Wali Songo']])->count();
        $jumlah_warga_aws = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Wali Songo']])->count();
        $jumlah_warga_pengurus_aws = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Wali Songo'], ['status_warga', 'Pengurus Asrama']])->count();
        $jumlah_warga_percobaan_aws = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Wali Songo'], ['status_warga', 'Warga Percobaan']])->count();
        $jumlah_warga_tetap_aws = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Wali Songo'], ['status_warga', 'Warga Tetap']])->count();

        $data_alumni_aspuri = Alumni::where('asal_asrama', 'Asrama Putri')->count();
        $jumlah_warga_aspuri = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Putri']])->count();
        $jumlah_warga_pengurus_aspuri = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Putri'], ['status_warga', 'Pengurus Asrama']])->count();
        $jumlah_warga_percobaan_aspuri = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Putri'], ['status_warga', 'Warga Percobaan']])->count();
        $jumlah_warga_tetap_aspuri = User::where([['role', 'mahasiswa'], ['asrama', 'Asrama Putri'], ['status_warga', 'Warga Tetap']])->count();

        $data_kegiatan = Kegiatan::orderBy('created_at', 'asc')->paginate(5);
        return view('super.index', compact(
            'data_kegiatan',
            'data_alumni_asgj',
            'data_alumni_asg',
            'data_alumni_aws',
            'data_alumni_aspuri',
            'jumlah_warga_asgj',
            'jumlah_warga_pengurus_asgj',
            'jumlah_warga_percobaan_asgj',
            'jumlah_warga_tetap_asgj',
            'jumlah_warga_asg',
            'jumlah_warga_pengurus_asg',
            'jumlah_warga_percobaan_asg',
            'jumlah_warga_tetap_asg',
            'jumlah_warga_aws',
            'jumlah_warga_pengurus_aws',
            'jumlah_warga_percobaan_aws',
            'jumlah_warga_tetap_aws',
            'jumlah_warga_aspuri',
            'jumlah_warga_pengurus_aspuri',
            'jumlah_warga_percobaan_aspuri',
            'jumlah_warga_tetap_aspuri',
        ));
    }

    public function dashboard()
    {
        $user = User::all()->count();
        // $user = User::where('role', 'mahasiswa')->count();
        $asgj = User::where('asrama', 'Asrama Sunan Gunung Jati')->where('role', 'mahasiswa')->count();
        $asg = User::where('asrama', 'Asrama Sunan Giri')->where('role', 'mahasiswa')->count();
        $aws = User::where('asrama', 'Asrama Wali Songo')->where('role', 'mahasiswa')->count();
        $dqf = User::where('asrama', 'Asrama Putri')->where('role', 'mahasiswa')->count();
        $kegiatan = Kegiatan::all()->count();
        $alumni = User::where('role', 'alumni')->count();
        $asrama = Asrama::all()->count();
        $akademik = Akademik::all()->count();
        $leadership = Leadership::all()->count();
        $karakter = Karakter::all()->count();
        $kreatif = Kreatif::all()->count();
        $jan = Kegiatan::whereMonth('created_at', '01')->count();
        $feb = Kegiatan::whereMonth('created_at', '02')->count();
        $mar = Kegiatan::whereMonth('created_at', '03')->count();
        $apr = Kegiatan::whereMonth('created_at', '04')->count();
        $mei = Kegiatan::whereMonth('created_at', '05')->count();
        $jun = Kegiatan::whereMonth('created_at', '06')->count();
        $jul = Kegiatan::whereMonth('created_at', '07')->count();
        $agu = Kegiatan::whereMonth('created_at', '08')->count();
        $sep = Kegiatan::whereMonth('created_at', '09')->count();
        $okt = Kegiatan::whereMonth('created_at', '10')->count();
        $nov = Kegiatan::whereMonth('created_at', '11')->count();
        $des = Kegiatan::whereMonth('created_at', '12')->count();

        return view('layouts.dashboard', compact('user',
                                                'asgj',
                                                'asg',
                                                'aws',
                                                'dqf', 
                                                'kegiatan', 
                                                'alumni', 
                                                'asrama',
                                                'akademik',
                                                'leadership',
                                                'karakter',
                                                'kreatif',
                                                'jan',
                                                'feb',
                                                'mar',
                                                'apr',
                                                'mei',
                                                'jun',
                                                'jul',
                                                'agu',
                                                'sep',
                                                'okt',
                                                'nov',
                                                'des'));
    }

    public function peringkat(request $id)
    {
        $user = User::findOrFail($id);
        $akademiks = User::findOrFail($id)->akademiks->count();
        $leaderships = User::findOrFail($id)->leaderships->count();
        $karakters = User::findOrFail($id)->karakters->count();
        $kreatifs = User::findOrFail($id)->kreatifs->count();

        $jumlah = User::findOrFail($id)->akademiks->leaderships->karakters->kreatifs->count();
        
        return view('warga.detail', compact(
            'user',
            'akademiks',
            'leaderships',
            'karakters',
            'kreatifs'));
    }

    public function kegiatanCount()
    {
        $kegiatan = Kegiatan::selectRaw('monthname(created_at) month, count(*) data')
                -> groupBy('month')
                -> orderBy('desc')
                -> get();
    }
}
