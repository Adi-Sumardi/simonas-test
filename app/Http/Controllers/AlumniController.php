<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Asrama;
use App\AsramaOrganisasi;
use App\AsramaPekerjaan;
use App\AsramaPendidikan;
use App\AsramaPrestasi;
use App\Kegiatan;
use App\User;
use App\Province;
use App\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportAlumni;
use App\Exports\ExportAlumni;
use Validator;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::all();        
        return view('super.pages.alumni.index', compact('alumnis'));
    }

    public function create()
    {
        $asrama = Asrama::orderBy('tahun_jabatan', 'desc')->get();
        $province = Province::all();
        $regency = Regency::all();
        return view('super.pages.alumni.create', compact('asrama','province','regency'));
    }

    public function store(Request $request)
    {
        //validator
        // $rules = array(
        //     'title_id' => 'required|max:255',
        //     'title_en' => 'required|max:255',
        //     'info_id' => 'max:255',
        //     'info_en' => 'max:255',
        //     'episode' => 'numeric',
        //     'year' => 'numeric|digits:4',
        //     'directed' => 'max:255',
        //     'artist_type' => 'in:artist,voice',
        //     'voice' => 'max:255'
        // );
        // $validator = Validator::make($request->all(),$rules);
        // if($validator->fails()){
        //     Session::put('validator', $validator->errors()->all());
        //     return redirect()->to('/super-alumni-asrama-create');
        // }

        $data = $request->all();
        // echo "<pre/>";
        // print_r($data);die;
        $pendidikan = $data['alumni_academic'];
        $organisasi = $data['alumni_organization'];
        $job = $data['alumni_job_history'];
        $achievement = $data['alumni_achievement'];

        unset($data['alumni_academic']);
        unset($data['alumni_organization']);
        unset($data['alumni_job_history']);
        unset($data['alumni_achievement']);
        unset($data['DataTables_Table_0_length']);
        unset($data['DataTables_Table_1_length']);
        unset($data['DataTables_Table_2_length']);
        unset($data['DataTables_Table_3_length']);
        
        $model = new Alumni;
        $model->fill($data);
        $model->save();


        echo "<pre/>";
        print_r($data);die;
        Alumni::create($request->all());
        return redirect('/alumni');
    }

    public function detail($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('super.pages.alumni.detail', compact('alumni'));
    }

    public function export()
    {
        return Excel::download(new ExportAlumni, 'alumni.xlsx');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataAlumni', $namaFile);

        Excel::import(new ImportAlumni, public_path('/DataAlumni/'.$namaFile));
        return redirect('/super-alumni-asrama');
    }

    public function indexAlumni()
    {
        $users = User::where('role', 'alumni')->orderBy('name', 'asc')->get();
        return view('alumni.index', compact('users'));
    }
    
    public function viewAlumni()
    {
        $alumnis = Alumni::all();
        $users = User::where('role', 'alumni')->orderBy('name', 'asc')->get();
        return view('alumni.alumni_index', compact('alumnis', 'users'));
    }

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.edit', compact('alumni'));
    }

    public function alumniDetail($id)
    {
        $user = User::findOrFail($id);
        return view('alumni.alumni_detail', compact('user'));
    }
    
    public function update(Request $request, $id)
    {
        Alumni::findOrFail($id)->update($request->all());
        return redirect('/alumni');
    }

    public function delete($id)
    {
        Alumni::destroy($id);
        return back();
    }

    public function viewKegiatan()
    {
        $kegiatans = Kegiatan::orderBy('waktu', 'desc')->get();
        
        return view('alumni.kegiatan_index', compact('kegiatans'));
    }

    public function kegiatanAsgj()
    {
        $kegiatans = Kegiatan::where('penyelenggara', 'Asrama Sunan Gunung Jati')->orderBy('waktu', 'desc')->get();
        return view('alumni.kegiatan_asgj', compact('kegiatans'));
    }

    public function kegiatanAsg()
    {
        $kegiatans = Kegiatan::where('penyelenggara', 'Asrama Sunan Giri')->orderBy('waktu', 'desc')->get();
        return view('alumni.kegiatan_asg', compact('kegiatans'));
    }

    public function kegiatanAws()
    {
        $kegiatans = Kegiatan::where('penyelenggara', 'Asrama Wali Songo')->orderBy('waktu', 'desc')->get();
        return view('alumni.kegiatan_aws', compact('kegiatans'));
    }

    public function kegiatanDqf()
    {
        $kegiatans = Kegiatan::where('penyelenggara', 'Asrama Putri')->orderBy('waktu', 'desc')->get();
        return view('alumni.kegiatan_dqf', compact('kegiatans'));
    }

    public function kegiatanAsrama()
    {
        $kegiatans = Kegiatan::where('penyelenggara', 'Direktorat Keasramaan')->orderBy('waktu', 'desc')->get();
        return view('alumni.kegiatan_asrama', compact('kegiatans'));
    }

    public function kegiatanYapi()
    {
        $kegiatans = Kegiatan::where('penyelenggara', 'YAPI')->orderBy('waktu', 'desc')->get();
        return view('alumni.kegiatan_yapi', compact('kegiatans'));
    }

    public function detailKegiatan($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('alumni.kegiatan_detail', compact('kegiatan'));
    }

    public function viewAlumniProfile()
    {
        Auth::user()->id;
        $akademiks = User::find(auth()->id())->akademiks->count();
        $leaderships = User::find(auth()->id())->leaderships->count();
        $karakters = User::find(auth()->id())->karakters->count();
        $kreatifs = User::find(auth()->id())->kreatifs->count();
        
        return view('alumni.profile_index', compact(
            'akademiks',
            'leaderships',
            'karakters',
            'kreatifs'));
        return view('alumni.profile_index');
    }

    public function editAlumniProfile($id)
    {
        $user = User::findOrFail($id);
        return view('alumni.profile_edit', compact('user'));
    }

    public function updateAlumniProfile(Request $request, $id)
    {
        User::findOrFail($id)->update($request->all());
        return redirect('/alumni/profile/data');
    }

    public function viewAsrama()
    {
        $asramas = Asrama::orderBy('tahun_jabatan', 'desc')->get();
        return view('alumni.asrama_index', compact('asramas'));
    }

    public function asgj()
    {
        $asramas = Asrama::where('nama_asrama', 'Asrama Sunan Gunung Jati')->orderBy('tahun_jabatan', 'desc')->get();
        return view('alumni.asrama_asgj', compact('asramas'));
    }

    public function asg()
    {
        $asramas = Asrama::where('nama_asrama', 'Asrama Sunan Giri')->orderBy('tahun_jabatan', 'desc')->get();
        return view('alumni.asrama_asg', compact('asramas'));
    }

    public function aws()
    {
        $asramas = Asrama::where('nama_asrama', 'Asrama Wali Songo')->orderBy('tahun_jabatan', 'desc')->get();
        return view('alumni.asrama_aws', compact('asramas'));
    }

    public function dqf()
    {
        $asramas = Asrama::where('nama_asrama', 'Asrama Putri')->orderBy('tahun_jabatan', 'desc')->get();
        return view('alumni.asrama_dqf', compact('asramas'));
    }

    public function viewWarga()
    {
        $users = User::where('role','mahasiswa')->orderBy('name','asc')->get();
        return view('alumni.warga_index', compact('users'));
    }

    public function wargaAsgj()
    {
        $users = User::where('asrama', 'Asrama Sunan Gunung Jati')->where('role', 'mahasiswa')->get();
        return view('alumni.warga_asgj', compact('users'));
    }

    public function wargaAsg()
    {
        $users = User::where('asrama', 'Asrama Sunan Giri')->where('role', 'mahasiswa')->get();
        return view('alumni.warga_asg', compact('users'));
    }

    public function wargaAws()
    {
        $users = User::where('asrama', 'Asrama Wali Songo')->where('role', 'mahasiswa')->get();
        return view('alumni.warga_aws', compact('users'));
    }

    public function wargaDqf()
    {
        $users = User::where('asrama', 'Asrama Putri')->where('role', 'mahasiswa')->get();
        return view('alumni.warga_dqf', compact('users'));
    }

    public function detailWarga($id)
    {
        $user = User::findOrFail($id);
        return view('alumni.warga_detail', compact('user'));
    }

    public function profile()
    {
        return view('alumni.foto_edit', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request)
    {
    	// Handle the user upload of avatar
    	// if ($request->hasFile('avatar')) {
        //     $avatar = $request->file('avatar');
        //     $filename = time() .'.'. $avatar->getClientOriginalExtension();
        //     Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/'. $filename));

        //     $user = Auth::user();
        //     $user->avatar = $filename;
        //     $user->save();
        // }

            return redirect()->back();

    }
}
