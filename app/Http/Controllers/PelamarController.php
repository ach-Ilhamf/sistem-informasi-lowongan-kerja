<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelamarController extends Controller
{
    public function pelamar()
    {
        return view('dashboardpk');
    }

    public function dashboardpk()
    {
        return view('dashboardpk');
    }
    
    public function profilpk()
    {
        return view('profilpk');
    }

    public function cari_pekerjaan()
    {
        return view('cari_pekerjaan');
    }

    public function bantuan()
    {
        return view('bantuan');
    }

    public function pengaturanpk()
    {
        return view('pengaturanpk');
    }

    public function melamarpk()
    {
        return view('melamarpk');
    }

    public function lowongan_disimpan()
    {
        return view('lowongan_disimpan');
    }

    public function editprofil()
    {
        return view('editprofil');
    }

    public function index()
    {
        //mengambil data dari tabel
        $pelamar = DB::table('pencari_kerjas')->get();

        //mengirim data ke view 
        return view('dashboardpk',['pelamar' => $pelamar]);

    }

    public function loker()
    {
        //mengambil data dari tabel
        $pelamar = DB::table('lowongan_kerjas')->get();

        //mengirim data ke view 
        return view('cari_pekerjaan',['pelamar' => $pelamar]);

    }
    

    // method untuk insert data ke table 
    public function store(Request $request)
    {
	// insert data ke table 
	DB::table('pencari_kerjas')->insert([
		'nama_pk' => $request->nama,
		'alamat_pk' => $request->alamat,
		'kota_pk' => $request->kota,
		'agama' => $request->agama,
        'jenis_kelamin' => $request->jeniskelamin,
		'tgl_lahir' => $request->tanggal_lahir,
        'telepon_pk' => $request->telepon,
        'email_pk' => $request->email,
        'foto' => $request->foto,
		'pendidikan' => $request->pendidikan,
        'keahlian' => $request->keahlian,
    ]);
	// alihkan halaman ke halaman pelamar
	return redirect('/index/pelamar');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$pelamar = DB::table('pencari_kerjas')->where('id_pk',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editprofil',['pelamar' => $pelamar]);
    }

    // update data pegawai
    public function update(Request $request)
    {
	// update data pegawai
	DB::table('pencari_kerjas')->where('id_pk',$request->id)->update([
		'nama_pk' => $request->nama,
		'alamat_pk' => $request->alamat,
		'kota_pk' => $request->kota,
		'tgl_lahir' => $request->tanggal_lahir,
		'telepon_pk' => $request->telepon,
		'email_pk' => $request->email,
		'keahlian' => $request->keahlian,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/index/pelamar');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pencari_kerjas')->where('id_pk',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/index/pelamar');
}
}
