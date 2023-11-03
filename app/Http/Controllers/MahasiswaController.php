<?php

namespace App\Http\Controllers;

use App\Akademik;
use App\Asrama;
use App\Ipk;
use App\Karakter;
use App\Kegiatan;
use App\Komponen;
use App\Kreatif;
use App\Leadership;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{

    public function biodata()
    {
        return view('mahasiswa.pages.profile.biodata');
    }

    public function index()
    {
        $akademiks = User::find(auth()->id())->akademiks->count();
        $leaderships = User::find(auth()->id())->leaderships->count();
        $karakters = User::find(auth()->id())->karakters->count();
        $kreatifs = User::find(auth()->id())->kreatifs->count();

        $data_akademiks = User::find(auth()->id())->akademiks;
        $data_leaderships = User::find(auth()->id())->leaderships;
        $data_karakters = User::find(auth()->id())->karakters;
        $data_kreatifs = User::find(auth()->id())->kreatifs;
        
        $kom1_akademiks = User::find(auth()->id())->akademiks->where('komponen', 'Mendapatkan nilai (prestasi) akademik');
        $kom2_akademiks = User::find(auth()->id())->akademiks->where('komponen', 'Mengikuti kegiatan mentoring');
        $kom3_akademiks = User::find(auth()->id())->akademiks->where('komponen', 'Mengikuti forum akademik');
        $kom4_akademiks = User::find(auth()->id())->akademiks->where('komponen', 'Membaca buku atau artikel dll');
        $kom5_akademiks = User::find(auth()->id())->akademiks->where('komponen', 'Memanfaatkan TIK untuk pengembangan diri');
        $kom6_akademiks = User::find(auth()->id())->akademiks->where('komponen', 'Menulis makalah, artikel dll');
        $kom7_akademiks = User::find(auth()->id())->akademiks->where('komponen', 'Menyampaikan gagasan, presentasi, moderator');
        $kom8_akademiks = User::find(auth()->id())->akademiks->where('komponen', 'Memberikan kontribusi (mengajar, melatih,membimbing)');

        $kom1_akademiks_count = User::find(auth()->id())->akademiks->where('komponen', 'Mendapatkan nilai (prestasi) akademik')->count();
        $kom2_akademiks_count = User::find(auth()->id())->akademiks->where('komponen', 'Mengikuti kegiatan mentoring')->count();
        $kom3_akademiks_count = User::find(auth()->id())->akademiks->where('komponen', 'Mengikuti forum akademik')->count();
        $kom4_akademiks_count = User::find(auth()->id())->akademiks->where('komponen', 'Membaca buku atau artikel dll')->count();
        $kom5_akademiks_count = User::find(auth()->id())->akademiks->where('komponen', 'Memanfaatkan TIK untuk pengembangan diri')->count();
        $kom6_akademiks_count = User::find(auth()->id())->akademiks->where('komponen', 'Menulis makalah, artikel dll')->count();
        $kom7_akademiks_count = User::find(auth()->id())->akademiks->where('komponen', 'Menyampaikan gagasan, presentasi, moderator')->count();
        $kom8_akademiks_count = User::find(auth()->id())->akademiks->where('komponen', 'Memberikan kontribusi (mengajar, melatih,membimbing)')->count();

        $kom1_leaderships = User::find(auth()->id())->leaderships->where('komponen', 'Mengikuti pelatihan kepemimpinan');
        $kom2_leaderships = User::find(auth()->id())->leaderships->where('komponen', 'Mengikuti kegiatan mentoring');
        $kom3_leaderships = User::find(auth()->id())->leaderships->where('komponen', 'Melaksanakan tugas kepanitiaan (mandat)');
        $kom4_leaderships = User::find(auth()->id())->leaderships->where('komponen', 'Melakukan tugas sebagai pengurus organisasi');
        $kom5_leaderships = User::find(auth()->id())->leaderships->where('komponen', 'Menjadi peserta atau memimpin rapat');
        $kom6_leaderships = User::find(auth()->id())->leaderships->where('komponen', 'Mengikuti diskusi atau debat penyelesaian masalah');
        $kom7_leaderships = User::find(auth()->id())->leaderships->where('komponen', 'Menulis surat, proposal kegiatan, laporan dll');
        $kom8_leaderships = User::find(auth()->id())->leaderships->where('komponen', 'Memberikan kontribusi baik harta, tenaga, waktu');
        $kom9_leaderships = User::find(auth()->id())->leaderships->where('komponen', 'Menyampaikan gagasan baik lisan atau tulisan');

        $kom1_leaderships_count = User::find(auth()->id())->leaderships->where('komponen', 'Mengikuti pelatihan kepemimpinan')->count();
        $kom2_leaderships_count = User::find(auth()->id())->leaderships->where('komponen', 'Mengikuti kegiatan mentoring')->count();
        $kom3_leaderships_count = User::find(auth()->id())->leaderships->where('komponen', 'Melaksanakan tugas kepanitiaan (mandat)')->count();
        $kom4_leaderships_count = User::find(auth()->id())->leaderships->where('komponen', 'Melakukan tugas sebagai pengurus organisasi')->count();
        $kom5_leaderships_count = User::find(auth()->id())->leaderships->where('komponen', 'Menjadi peserta atau memimpin rapat')->count();
        $kom6_leaderships_count = User::find(auth()->id())->leaderships->where('komponen', 'Mengikuti diskusi atau debat penyelesaian masalah')->count();
        $kom7_leaderships_count = User::find(auth()->id())->leaderships->where('komponen', 'Menulis surat, proposal kegiatan, laporan dll')->count();
        $kom8_leaderships_count = User::find(auth()->id())->leaderships->where('komponen', 'Memberikan kontribusi baik harta, tenaga, waktu')->count();
        $kom9_leaderships_count = User::find(auth()->id())->leaderships->where('komponen', 'Menyampaikan gagasan baik lisan atau tulisan')->count();

        $kom1_karakters = User::find(auth()->id())->karakters->where('komponen', 'Membaca Al Quran, hafalan, hadits pilihan');
        $kom2_karakters = User::find(auth()->id())->karakters->where('komponen', 'Mengikuti kegiatan mentoring');
        $kom3_karakters = User::find(auth()->id())->karakters->where('komponen', 'Mengikuti kajian, membaca buku atau ceramah agama');
        $kom4_karakters = User::find(auth()->id())->karakters->where('komponen', 'Menjadi imam shalat jamaah atau memimpin doa');
        $kom5_karakters = User::find(auth()->id())->karakters->where('komponen', 'Mengamalkan ibadah harian; shalat, puasa, zakat, dll');
        $kom6_karakters = User::find(auth()->id())->karakters->where('komponen', 'Menyampaikan dakwah, kultum, baik lisan, tulisan');
        $kom7_karakters = User::find(auth()->id())->karakters->where('komponen', 'Memelihara kebersihan (kamar, lingkungan, dll)');
        $kom8_karakters = User::find(auth()->id())->karakters->where('komponen', 'Mengajar pengajian, TPA, TPQ, dll');
        $kom9_karakters = User::find(auth()->id())->karakters->where('komponen', 'Memelihara silaturahmi dan menolong sesama');

        $kom1_karakters_count = User::find(auth()->id())->karakters->where('komponen', 'Membaca Al Quran, hafalan, hadits pilihan')->count();
        $kom2_karakters_count = User::find(auth()->id())->karakters->where('komponen', 'Mengikuti kegiatan mentoring')->count();
        $kom3_karakters_count = User::find(auth()->id())->karakters->where('komponen', 'Mengikuti kajian, membaca buku atau ceramah agama')->count();
        $kom4_karakters_count = User::find(auth()->id())->karakters->where('komponen', 'Menjadi imam shalat jamaah atau memimpin doa')->count();
        $kom5_karakters_count = User::find(auth()->id())->karakters->where('komponen', 'Mengamalkan ibadah harian; shalat, puasa, zakat, dll')->count();
        $kom6_karakters_count = User::find(auth()->id())->karakters->where('komponen', 'Menyampaikan dakwah, kultum, baik lisan, tulisan')->count();
        $kom7_karakters_count = User::find(auth()->id())->karakters->where('komponen', 'Memelihara kebersihan (kamar, lingkungan, dll)')->count();
        $kom8_karakters_count = User::find(auth()->id())->karakters->where('komponen', 'Mengajar pengajian, TPA, TPQ, dll')->count();
        $kom9_karakters_count = User::find(auth()->id())->karakters->where('komponen', 'Memelihara silaturahmi dan menolong sesama')->count();

        $kom1_kreatifs = User::find(auth()->id())->kreatifs->where('komponen', 'Mengikuti pelatihan kreativitas dan kewirausahaan');
        $kom2_kreatifs = User::find(auth()->id())->kreatifs->where('komponen', 'Mengikuti kegiatan mentoring');
        $kom3_kreatifs = User::find(auth()->id())->kreatifs->where('komponen', 'Membaca buku, majalah, internet dll terkait kewirausahaan');
        $kom4_kreatifs = User::find(auth()->id())->kreatifs->where('komponen', 'Mengikuti forum ceramah atau diskusi kewirausahaan');
        $kom5_kreatifs = User::find(auth()->id())->kreatifs->where('komponen', 'Melakukan tugas dalam kegiatan usaha asrama');
        $kom6_kreatifs = User::find(auth()->id())->kreatifs->where('komponen', 'Menulis proposal usaha');
        $kom7_kreatifs = User::find(auth()->id())->kreatifs->where('komponen', 'Menghasilkan karya kreatif (video, grafis, dll)');
        $kom8_kreatifs = User::find(auth()->id())->kreatifs->where('komponen', 'Memiliki keberanian untuk memulai usaha');

        $kom1_kreatifs_count = User::find(auth()->id())->kreatifs->where('komponen', 'Mengikuti pelatihan kreativitas dan kewirausahaan')->count();
        $kom2_kreatifs_count = User::find(auth()->id())->kreatifs->where('komponen', 'Mengikuti kegiatan mentoring')->count();
        $kom3_kreatifs_count = User::find(auth()->id())->kreatifs->where('komponen', 'Membaca buku, majalah, internet dll terkait kewirausahaan')->count();
        $kom4_kreatifs_count = User::find(auth()->id())->kreatifs->where('komponen', 'Mengikuti forum ceramah atau diskusi kewirausahaan')->count();
        $kom5_kreatifs_count = User::find(auth()->id())->kreatifs->where('komponen', 'Melakukan tugas dalam kegiatan usaha asrama')->count();
        $kom6_kreatifs_count = User::find(auth()->id())->kreatifs->where('komponen', 'Menulis proposal usaha')->count();
        $kom7_kreatifs_count = User::find(auth()->id())->kreatifs->where('komponen', 'Menghasilkan karya kreatif (video, grafis, dll)')->count();
        $kom8_kreatifs_count = User::find(auth()->id())->kreatifs->where('komponen', 'Memiliki keberanian untuk memulai usaha')->count();

        $komponen_akademiks = Komponen::where('aspek', 'Akademik')->get();
        $komponen_leaderships = Komponen::where('aspek', 'Leadership')->get();
        $komponen_karakters = Komponen::where('aspek', 'Karakter Islami')->get();
        $komponen_kreatifs = Komponen::where('aspek', 'Kreativitas & Kewirausahaan')->get();

        $ipks = User::find(auth()->id())->ipks;
        $data_ipks = User::find(auth()->id())->ipks
                    ->filter(function ($ipk) {
                        return is_numeric($ipk->ip);
                    })
                    ->avg('ip');

        return view('mahasiswa.index', compact(
            'ipks',
            'data_ipks',
            'akademiks',
            'leaderships',
            'karakters',
            'kreatifs',
            'komponen_akademiks',
            'komponen_leaderships',
            'komponen_karakters',
            'komponen_kreatifs',
            'data_akademiks',
            'kom1_akademiks',
            'kom2_akademiks',
            'kom3_akademiks',
            'kom4_akademiks',
            'kom5_akademiks',
            'kom6_akademiks',
            'kom7_akademiks',
            'kom8_akademiks',
            'kom1_akademiks_count',
            'kom2_akademiks_count',
            'kom3_akademiks_count',
            'kom4_akademiks_count',
            'kom5_akademiks_count',
            'kom6_akademiks_count',
            'kom7_akademiks_count',
            'kom8_akademiks_count',
            'data_leaderships',
            'kom1_leaderships',
            'kom2_leaderships',
            'kom3_leaderships',
            'kom4_leaderships',
            'kom5_leaderships',
            'kom6_leaderships',
            'kom7_leaderships',
            'kom8_leaderships',
            'kom9_leaderships',
            'kom1_leaderships_count',
            'kom2_leaderships_count',
            'kom3_leaderships_count',
            'kom4_leaderships_count',
            'kom5_leaderships_count',
            'kom6_leaderships_count',
            'kom7_leaderships_count',
            'kom8_leaderships_count',
            'kom9_leaderships_count',
            'data_karakters',
            'kom1_karakters',
            'kom2_karakters',
            'kom3_karakters',
            'kom4_karakters',
            'kom5_karakters',
            'kom6_karakters',
            'kom7_karakters',
            'kom8_karakters',
            'kom9_karakters',
            'kom1_karakters_count',
            'kom2_karakters_count',
            'kom3_karakters_count',
            'kom4_karakters_count',
            'kom5_karakters_count',
            'kom6_karakters_count',
            'kom7_karakters_count',
            'kom8_karakters_count',
            'kom9_karakters_count',
            'data_kreatifs',
            'kom1_kreatifs',
            'kom2_kreatifs',
            'kom3_kreatifs',
            'kom4_kreatifs',
            'kom5_kreatifs',
            'kom6_kreatifs',
            'kom7_kreatifs',
            'kom8_kreatifs',
            'kom1_kreatifs_count',
            'kom2_kreatifs_count',
            'kom3_kreatifs_count',
            'kom4_kreatifs_count',
            'kom5_kreatifs_count',
            'kom6_kreatifs_count',
            'kom7_kreatifs_count',
            'kom8_kreatifs_count',
        ));
    }

    public function akademikStore(Request $request)
    {
        $request->validate([
            'komponen' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'file' => 'required',

        ]);

        Akademik::create([

            $file = $request->file('file'),
            $nama_file = time()."_".$file->getClientOriginalName(),
            $tujuan_upload = 'data_file_akademik',
            $file->move($tujuan_upload,$nama_file),

            'file' => $nama_file,
            'user_id' => auth()->id(),
            'komponen_id' => $request->komponen_id,
            'komponen' => $request->komponen,
            'nama_warga' => $request->nama_warga,
            'asrama' => $request->asrama,
            'kegiatan' => $request->kegiatan,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'keterangan' => $request->keterangan,
        ]);

        return back()->with('success-akademik', 'Data Berhasil Dibuat!');
    }

    public function leadershipStore(Request $request)
    {
        $request->validate([
            'komponen' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'file' => 'required',

        ]);

        Leadership::create([

            $file = $request->file('file'),
            $nama_file = time()."_".$file->getClientOriginalName(),
            $tujuan_upload = 'data_file_akademik',
            $file->move($tujuan_upload,$nama_file),

            'file' => $nama_file,
            'user_id' => auth()->id(),
            'komponen_id' => $request->komponen_id,
            'komponen' => $request->komponen,
            'nama_warga' => $request->nama_warga,
            'asrama' => $request->asrama,
            'kegiatan' => $request->kegiatan,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'keterangan' => $request->keterangan,
        ]);

        return back()->with('success-leadership', 'Data Berhasil Dibuat!');
    }
    
    public function karakterStore(Request $request)
    {
        $request->validate([
            'komponen' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'file' => 'required',

        ]);

        Karakter::create([

            $file = $request->file('file'),
            $nama_file = time()."_".$file->getClientOriginalName(),
            $tujuan_upload = 'data_file_akademik',
            $file->move($tujuan_upload,$nama_file),

            'file' => $nama_file,
            'user_id' => auth()->id(),
            'komponen_id' => $request->komponen_id,
            'komponen' => $request->komponen,
            'nama_warga' => $request->nama_warga,
            'asrama' => $request->asrama,
            'kegiatan' => $request->kegiatan,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'keterangan' => $request->keterangan,
        ]);

        return back()->with('success-karakter', 'Data Berhasil Dibuat!');
    }
    
    public function kreatifStore(Request $request)
    {
        $request->validate([
            'komponen' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'file' => 'required',

        ]);

        Kreatif::create([

            $file = $request->file('file'),
            $nama_file = time()."_".$file->getClientOriginalName(),
            $tujuan_upload = 'data_file_akademik',
            $file->move($tujuan_upload,$nama_file),

            'file' => $nama_file,
            'user_id' => auth()->id(),
            'komponen_id' => $request->komponen_id,
            'komponen' => $request->komponen,
            'nama_warga' => $request->nama_warga,
            'asrama' => $request->asrama,
            'kegiatan' => $request->kegiatan,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'keterangan' => $request->keterangan,
        ]);

        return back()->with('success-kreatif', 'Data Berhasil Dibuat!');
    }

    public function updateFoto(Request $request, $id)
    {
        $user_foto = User::findOrFail($id);

        if($request->avatar != ''){
            if($file = $request->file('avatar')){
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'data_photo';
                $file->move($tujuan_upload, $nama_file);
            }
            $user_foto->update([
                'avatar' => $nama_file,
            ]);
       }

       return redirect('/mahasiswa')->with('info-foto', 'Foto berhasil diperbarui!');
    }

    public function updateStatus(Request $request, $id)
    {
        
        User::findOrFail($id)->update($request->all());
        return back()->with('info-status', 'Data status warga berhasil diperbarui!');

    }

    public function updateInfo(Request $request, $id)
    {
        $request->validate([
            'no_induk' => 'required',
            'tgl_masuk' => 'required',
            'universitas' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'angkatan' => 'required',
            'nik' => 'required', 
            'alamat' => 'required', 
            'provinsi' => 'required', 
            'kota' => 'required', 
            'kecamatan' => 'required', 
            'kode_pos' => 'required', 
            'no_telp' => 'required', 
            'asal_sekolah' => 'required', 
            'tgl_lahir' => 'required', 
            'organisasi' => 'required', 
            'nama_ayah' => 'required', 
            'nama_ibu' => 'required', 
        ]);
        
        User::findOrFail($id)->update($request->all());
        return redirect('/mahasiswa')->with('info-personal', 'Data personal berhasil diperbarui!');

    }

    public function storeIPK(Request $request)
    {
        $request->validate([
            'semester' => 'required',
            'tahun' => 'required',
            'ip' => 'required',
            'file' => 'required|mimes:pdf',
        ]);

        Ipk::create([

            $file = $request->file('file'),
            $nama_file = time()."_".$file->getClientOriginalName(),
            $tujuan_upload = 'data_file_khs',
            $file->move($tujuan_upload,$nama_file),

            'file' => $nama_file,
            'user_id' => auth()->id(),
            'semester' => $request->semester,
            'tahun' => $request->tahun,
            'ip' => $request->ip,
        ]);

        return back()->with('success-ip', 'Data Berhasil Dibuat!');
    }

    public function detailIPK($id)
    {
        $ipk = Ipk::findOrFail($id);
        return view('mahasiswa.pages.ipk.detail', compact('ipk'));
    }

    public function editIPK($id)
    {
        $ipk = Ipk::findOrFail($id);
        return view('mahasiswa.pages.ipk.edit', compact('ipk'));
    }

    public function editKhs($id)
    {
        $ipk = Ipk::findOrFail($id);
        return view('mahasiswa.pages.ipk.edit-khs', compact('ipk'));
    }

    public function updateIPK(Request $request, $id)
    {
        $ipk = Ipk::findOrFail($id);
  
            //for update in table
            $ipk->update([
                'semester' => $request->semester,
                'tahun' => $request->tahun,
                'ip' => $request->ip,
            ]);

        return redirect('/mahasiswa')->with('info-ip', 'Data berhasil di update');
    }

    public function updateKhs(Request $request, $id)
    {
        $ipk = Ipk::findOrFail($id);

        if($request->file != ''){
  
            //code for remove old file
            if($file = $request->file('file')){
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'data_file_khs';
                $file->move($tujuan_upload, $nama_file);
            }
  
            //for update in table
            $ipk->update([
                'file' => $nama_file,
            ]);
        }

        return redirect('/mahasiswa')->with('info-khs', 'Data berhasil di update');
    }

    public function indexKegiatan()
    {
        $kegiatans = Kegiatan::orderBy('waktu', 'desc')->paginate(10);
        return view('mahasiswa.pages.kegiatan.index', compact('kegiatans'));
    }

    public function createKegiatan()
    {
        return view('mahasiswa.pages.kegiatan.create');
    }

    public function storeKegiatan(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tujuan' => 'required',
            'penyelenggara' => 'required',
            'jenis_kegiatan' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'keterangan' => 'required',
            'file' => 'required',
        ]);

        Kegiatan::create([
            $file = $request->file('file'),
            $nama_file = time()."_".$file->getClientOriginalName(),
            $tujuan_upload = 'data_file_kegiatan',
            $file->move($tujuan_upload,$nama_file),

            'nama_kegiatan' => $request->nama_kegiatan,
            'tujuan' => $request->tujuan,
            'penyelenggara' => $request->penyelenggara,
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'keterangan' => $request->keterangan,
            'file' => $nama_file,
        ]);

        return redirect('/mahasiswa-kegiatan-asrama');
    }

    public function editKegiatan($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('mahasiswa.pages.kegiatan.edit', compact('kegiatan'));
    }

    public function detailKegiatan($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('mahasiswa.pages.kegiatan.detail', compact('kegiatan'));
    }
    
    public function updateKegiatan(Request $request, $id)
    {
        Kegiatan::findOrFail($id)->update($request->all());
        return redirect('/mahasiswa-kegiatan-asrama');
    }

    public function delete($id)
    {
        Kegiatan::destroy($id);
        return back();
    }

    public function asgj()
    {
        $users = User::where('asrama', 'Asrama Sunan Gunung Jati')->where('role', 'mahasiswa')->get();
        foreach ($users as $user) {
            $averageIP = $user->ipks
                ->filter(function ($ipk) {
                    return is_numeric($ipk->ip);
                })
                ->avg('ip');
    
            // Menambahkan properti baru ke objek $user
            $user->average_ip = $averageIP;
        }
        return view('mahasiswa.pages.warga.asgj', compact('users'));
    }

    public function asg()
    {
        $users = User::where('asrama', 'Asrama Sunan Giri')->where('role', 'mahasiswa')->get();
        foreach ($users as $user) {
            $averageIP = $user->ipks
                ->filter(function ($ipk) {
                    return is_numeric($ipk->ip);
                })
                ->avg('ip');
    
            // Menambahkan properti baru ke objek $user
            $user->average_ip = $averageIP;
        }
        return view('mahasiswa.pages.warga.asg', compact('users'));
    }

    public function aws()
    {
        $users = User::where('asrama', 'Asrama Wali Songo')->where('role', 'mahasiswa')->get();
        foreach ($users as $user) {
            $averageIP = $user->ipks
                ->filter(function ($ipk) {
                    return is_numeric($ipk->ip);
                })
                ->avg('ip');
    
            // Menambahkan properti baru ke objek $user
            $user->average_ip = $averageIP;
        }
        return view('mahasiswa.pages.warga.aws', compact('users'));
    }

    public function aspuri()
    {
        $users = User::where('asrama', 'Asrama Putri')->where('role', 'mahasiswa')->get();
        foreach ($users as $user) {
            $averageIP = $user->ipks
                ->filter(function ($ipk) {
                    return is_numeric($ipk->ip);
                })
                ->avg('ip');
    
            // Menambahkan properti baru ke objek $user
            $user->average_ip = $averageIP;
        }
        return view('mahasiswa.pages.warga.dqf', compact('users'));
    }

    public function detailWarga($id)
    {
        $user = User::findOrFail($id);
        $akademiks = User::findOrFail($id)->akademiks->count();
        $leaderships = User::findOrFail($id)->leaderships->count();
        $karakters = User::findOrFail($id)->karakters->count();
        $kreatifs = User::findOrFail($id)->kreatifs->count();

        $data_akademiks = User::findOrFail($id)->akademiks;
        $data_leaderships = User::findOrFail($id)->leaderships;
        $data_karakters = User::findOrFail($id)->karakters;
        $data_kreatifs = User::findOrFail($id)->kreatifs;
        
        $kom1_akademiks = User::findOrFail($id)->akademiks->where('komponen', 'Mendapatkan nilai (prestasi) akademik');
        $kom2_akademiks = User::findOrFail($id)->akademiks->where('komponen', 'Mengikuti kegiatan mentoring');
        $kom3_akademiks = User::findOrFail($id)->akademiks->where('komponen', 'Mengikuti forum akademik');
        $kom4_akademiks = User::findOrFail($id)->akademiks->where('komponen', 'Membaca buku atau artikel dll');
        $kom5_akademiks = User::findOrFail($id)->akademiks->where('komponen', 'Memanfaatkan TIK untuk pengembangan diri');
        $kom6_akademiks = User::findOrFail($id)->akademiks->where('komponen', 'Menulis makalah, artikel dll');
        $kom7_akademiks = User::findOrFail($id)->akademiks->where('komponen', 'Menyampaikan gagasan, presentasi, moderator');
        $kom8_akademiks = User::findOrFail($id)->akademiks->where('komponen', 'Memberikan kontribusi (mengajar, melatih,membimbing)');

        $kom1_akademiks_count = User::findOrFail($id)->akademiks->where('komponen', 'Mendapatkan nilai (prestasi) akademik')->count();
        $kom2_akademiks_count = User::findOrFail($id)->akademiks->where('komponen', 'Mengikuti kegiatan mentoring')->count();
        $kom3_akademiks_count = User::findOrFail($id)->akademiks->where('komponen', 'Mengikuti forum akademik')->count();
        $kom4_akademiks_count = User::findOrFail($id)->akademiks->where('komponen', 'Membaca buku atau artikel dll')->count();
        $kom5_akademiks_count = User::findOrFail($id)->akademiks->where('komponen', 'Memanfaatkan TIK untuk pengembangan diri')->count();
        $kom6_akademiks_count = User::findOrFail($id)->akademiks->where('komponen', 'Menulis makalah, artikel dll')->count();
        $kom7_akademiks_count = User::findOrFail($id)->akademiks->where('komponen', 'Menyampaikan gagasan, presentasi, moderator')->count();
        $kom8_akademiks_count = User::findOrFail($id)->akademiks->where('komponen', 'Memberikan kontribusi (mengajar, melatih,membimbing)')->count();

        $kom1_leaderships = User::findOrFail($id)->leaderships->where('komponen', 'Mengikuti pelatihan kepemimpinan');
        $kom2_leaderships = User::findOrFail($id)->leaderships->where('komponen', 'Mengikuti kegiatan mentoring');
        $kom3_leaderships = User::findOrFail($id)->leaderships->where('komponen', 'Melaksanakan tugas kepanitiaan (mandat)');
        $kom4_leaderships = User::findOrFail($id)->leaderships->where('komponen', 'Melakukan tugas sebagai pengurus organisasi');
        $kom5_leaderships = User::findOrFail($id)->leaderships->where('komponen', 'Menjadi peserta atau memimpin rapat');
        $kom6_leaderships = User::findOrFail($id)->leaderships->where('komponen', 'Mengikuti diskusi atau debat penyelesaian masalah');
        $kom7_leaderships = User::findOrFail($id)->leaderships->where('komponen', 'Menulis surat, proposal kegiatan, laporan dll');
        $kom8_leaderships = User::findOrFail($id)->leaderships->where('komponen', 'Memberikan kontribusi baik harta, tenaga, waktu');
        $kom9_leaderships = User::findOrFail($id)->leaderships->where('komponen', 'Menyampaikan gagasan baik lisan atau tulisan');

        $kom1_leaderships_count = User::findOrFail($id)->leaderships->where('komponen', 'Mengikuti pelatihan kepemimpinan')->count();
        $kom2_leaderships_count = User::findOrFail($id)->leaderships->where('komponen', 'Mengikuti kegiatan mentoring')->count();
        $kom3_leaderships_count = User::findOrFail($id)->leaderships->where('komponen', 'Melaksanakan tugas kepanitiaan (mandat)')->count();
        $kom4_leaderships_count = User::findOrFail($id)->leaderships->where('komponen', 'Melakukan tugas sebagai pengurus organisasi')->count();
        $kom5_leaderships_count = User::findOrFail($id)->leaderships->where('komponen', 'Menjadi peserta atau memimpin rapat')->count();
        $kom6_leaderships_count = User::findOrFail($id)->leaderships->where('komponen', 'Mengikuti diskusi atau debat penyelesaian masalah')->count();
        $kom7_leaderships_count = User::findOrFail($id)->leaderships->where('komponen', 'Menulis surat, proposal kegiatan, laporan dll')->count();
        $kom8_leaderships_count = User::findOrFail($id)->leaderships->where('komponen', 'Memberikan kontribusi baik harta, tenaga, waktu')->count();
        $kom9_leaderships_count = User::findOrFail($id)->leaderships->where('komponen', 'Menyampaikan gagasan baik lisan atau tulisan')->count();

        $kom1_karakters = User::findOrFail($id)->karakters->where('komponen', 'Membaca Al Quran, hafalan, hadits pilihan');
        $kom2_karakters = User::findOrFail($id)->karakters->where('komponen', 'Mengikuti kegiatan mentoring');
        $kom3_karakters = User::findOrFail($id)->karakters->where('komponen', 'Mengikuti kajian, membaca buku atau ceramah agama');
        $kom4_karakters = User::findOrFail($id)->karakters->where('komponen', 'Menjadi imam shalat jamaah atau memimpin doa');
        $kom5_karakters = User::findOrFail($id)->karakters->where('komponen', 'Mengamalkan ibadah harian; shalat, puasa, zakat, dll');
        $kom6_karakters = User::findOrFail($id)->karakters->where('komponen', 'Menyampaikan dakwah, kultum, baik lisan, tulisan');
        $kom7_karakters = User::findOrFail($id)->karakters->where('komponen', 'Memelihara kebersihan (kamar, lingkungan, dll)');
        $kom8_karakters = User::findOrFail($id)->karakters->where('komponen', 'Mengajar pengajian, TPA, TPQ, dll');
        $kom9_karakters = User::findOrFail($id)->karakters->where('komponen', 'Memelihara silaturahmi dan menolong sesama');

        $kom1_karakters_count = User::findOrFail($id)->karakters->where('komponen', 'Membaca Al Quran, hafalan, hadits pilihan')->count();
        $kom2_karakters_count = User::findOrFail($id)->karakters->where('komponen', 'Mengikuti kegiatan mentoring')->count();
        $kom3_karakters_count = User::findOrFail($id)->karakters->where('komponen', 'Mengikuti kajian, membaca buku atau ceramah agama')->count();
        $kom4_karakters_count = User::findOrFail($id)->karakters->where('komponen', 'Menjadi imam shalat jamaah atau memimpin doa')->count();
        $kom5_karakters_count = User::findOrFail($id)->karakters->where('komponen', 'Mengamalkan ibadah harian; shalat, puasa, zakat, dll')->count();
        $kom6_karakters_count = User::findOrFail($id)->karakters->where('komponen', 'Menyampaikan dakwah, kultum, baik lisan, tulisan')->count();
        $kom7_karakters_count = User::findOrFail($id)->karakters->where('komponen', 'Memelihara kebersihan (kamar, lingkungan, dll)')->count();
        $kom8_karakters_count = User::findOrFail($id)->karakters->where('komponen', 'Mengajar pengajian, TPA, TPQ, dll')->count();
        $kom9_karakters_count = User::findOrFail($id)->karakters->where('komponen', 'Memelihara silaturahmi dan menolong sesama')->count();

        $kom1_kreatifs = User::findOrFail($id)->kreatifs->where('komponen', 'Mengikuti pelatihan kreativitas dan kewirausahaan');
        $kom2_kreatifs = User::findOrFail($id)->kreatifs->where('komponen', 'Mengikuti kegiatan mentoring');
        $kom3_kreatifs = User::findOrFail($id)->kreatifs->where('komponen', 'Membaca buku, majalah, internet dll terkait kewirausahaan');
        $kom4_kreatifs = User::findOrFail($id)->kreatifs->where('komponen', 'Mengikuti forum ceramah atau diskusi kewirausahaan');
        $kom5_kreatifs = User::findOrFail($id)->kreatifs->where('komponen', 'Melakukan tugas dalam kegiatan usaha asrama');
        $kom6_kreatifs = User::findOrFail($id)->kreatifs->where('komponen', 'Menulis proposal usaha');
        $kom7_kreatifs = User::findOrFail($id)->kreatifs->where('komponen', 'Menghasilkan karya kreatif (video, grafis, dll)');
        $kom8_kreatifs = User::findOrFail($id)->kreatifs->where('komponen', 'Memiliki keberanian untuk memulai usaha');

        $kom1_kreatifs_count = User::findOrFail($id)->kreatifs->where('komponen', 'Mengikuti pelatihan kreativitas dan kewirausahaan')->count();
        $kom2_kreatifs_count = User::findOrFail($id)->kreatifs->where('komponen', 'Mengikuti kegiatan mentoring')->count();
        $kom3_kreatifs_count = User::findOrFail($id)->kreatifs->where('komponen', 'Membaca buku, majalah, internet dll terkait kewirausahaan')->count();
        $kom4_kreatifs_count = User::findOrFail($id)->kreatifs->where('komponen', 'Mengikuti forum ceramah atau diskusi kewirausahaan')->count();
        $kom5_kreatifs_count = User::findOrFail($id)->kreatifs->where('komponen', 'Melakukan tugas dalam kegiatan usaha asrama')->count();
        $kom6_kreatifs_count = User::findOrFail($id)->kreatifs->where('komponen', 'Menulis proposal usaha')->count();
        $kom7_kreatifs_count = User::findOrFail($id)->kreatifs->where('komponen', 'Menghasilkan karya kreatif (video, grafis, dll)')->count();
        $kom8_kreatifs_count = User::findOrFail($id)->kreatifs->where('komponen', 'Memiliki keberanian untuk memulai usaha')->count();

        $ipks = User::findOrFail($id)->ipks;
        $data_ipks = User::findOrFail($id)->ipks->avg('ip');
        
        return view('mahasiswa.pages.warga.detail', compact(
            'user',
            'ipks',
            'data_ipks',
            'akademiks',
            'leaderships',
            'karakters',
            'kreatifs',
            'data_akademiks',
            'kom1_akademiks',
            'kom2_akademiks',
            'kom3_akademiks',
            'kom4_akademiks',
            'kom5_akademiks',
            'kom6_akademiks',
            'kom7_akademiks',
            'kom8_akademiks',
            'kom1_akademiks_count',
            'kom2_akademiks_count',
            'kom3_akademiks_count',
            'kom4_akademiks_count',
            'kom5_akademiks_count',
            'kom6_akademiks_count',
            'kom7_akademiks_count',
            'kom8_akademiks_count',
            'data_leaderships',
            'kom1_leaderships',
            'kom2_leaderships',
            'kom3_leaderships',
            'kom4_leaderships',
            'kom5_leaderships',
            'kom6_leaderships',
            'kom7_leaderships',
            'kom8_leaderships',
            'kom9_leaderships',
            'kom1_leaderships_count',
            'kom2_leaderships_count',
            'kom3_leaderships_count',
            'kom4_leaderships_count',
            'kom5_leaderships_count',
            'kom6_leaderships_count',
            'kom7_leaderships_count',
            'kom8_leaderships_count',
            'kom9_leaderships_count',
            'data_karakters',
            'kom1_karakters',
            'kom2_karakters',
            'kom3_karakters',
            'kom4_karakters',
            'kom5_karakters',
            'kom6_karakters',
            'kom7_karakters',
            'kom8_karakters',
            'kom9_karakters',
            'kom1_karakters_count',
            'kom2_karakters_count',
            'kom3_karakters_count',
            'kom4_karakters_count',
            'kom5_karakters_count',
            'kom6_karakters_count',
            'kom7_karakters_count',
            'kom8_karakters_count',
            'kom9_karakters_count',
            'data_kreatifs',
            'kom1_kreatifs',
            'kom2_kreatifs',
            'kom3_kreatifs',
            'kom4_kreatifs',
            'kom5_kreatifs',
            'kom6_kreatifs',
            'kom7_kreatifs',
            'kom8_kreatifs',
            'kom1_kreatifs_count',
            'kom2_kreatifs_count',
            'kom3_kreatifs_count',
            'kom4_kreatifs_count',
            'kom5_kreatifs_count',
            'kom6_kreatifs_count',
            'kom7_kreatifs_count',
            'kom8_kreatifs_count',
        ));
    }
}
