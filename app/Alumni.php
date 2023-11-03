<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'gelar_depan',
        'gelar_belakang',
        'provinsi_asal',
        'tanggal_lahir',
        'alamat_domisili',
        'alamat_jalan',
        'kota',
        'provinsi',
        'kode_pos',
        'no_whatsapp',
        'jumlah_anak',
        'asal_asrama',
        'tahun_masuk_asrama',
        'tahun_keluar_asrama',
        'pengalaman_organisasi',
        'pendidikan_terakhir',
        'jurusan_s1',
        'kampus_s1',
        'jurusan_s2',
        'kampus_s2',
        'jurusan_s3',
        'kampus_s3',
        'pekerjaan_sekarang',
        'bidang_pekerjaan',
        'bidang_keahlian',
        'pengalaman_pekerjaan',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
