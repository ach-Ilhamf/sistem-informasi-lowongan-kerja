<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerusahaanController extends Controller
{
    public function perusahaan()
    {
        return view('dashboardprs');
    }

    public function diterima()
    {
        return view('diterima');
    }

    public function masuk()
    {
        return view('masuk');
    }

    public function pasang()
    {
        return view('pasang');
    }

    public function update_pasang()
    {
        return view('update_pasang');
    }

    public function update_profil()
    {
        return view('update_profil');
    }

    public function pengaturan()
    {
        return view('pengaturan');
    }

    public function profil()
    {
        return view('profil');
    }

    public function cek()
    {
        return view('cek');
    }

    // method untuk insert data ke table 
    public function insert(Request $request)
    {
	// insert data ke table 
	DB::table('perusahaans')->insert([
		'nama_prs' => $request->nama,
		'alamat_prs' => $request->alamat,
		'kota_prs' => $request->kota,
        'telepon_prs' => $request->tlp,
        'email_prs' => $request->email,
    ]);
	// alihkan halaman ke halaman pelamar
	return redirect('/index/data');
    }

    // method untuk insert data ke table 
    public function input(Request $request)
    {
	// insert data ke table 
	DB::table('lowongan_kerjas')->insert([
		'nama_prs' => $request->nama,
		'posisi' => $request->posisi,
		'deskripsi' => $request->deskripsi,
        'tgl_loker' => $request->tgl_posting,
        'tgl_exp' => $request->tgl_kadaluarsa,
    ]);
	// alihkan halaman ke halaman pelamar
	return redirect('index');
    }

    public function index()
    {
        //mengambil data dari tabel
        $perusahaan = DB::table('lowongan_kerjas')->get();

        //mengirim data ke view 
        return view('cek',['perusahaan' => $perusahaan]);

    }

    public function data()
    {
        //mengambil data dari tabel
        $perusahaan = DB::table('perusahaans')->get();

        //mengirim data ke view 
        return view('dashboardprs',['perusahaan' => $perusahaan]);

    }

        // method untuk hapus data pegawai
    public function hapus2($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('lowongan_kerjas')->where('id_loker',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('index');
    }

    public function hapus3($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('perusahaans')->where('id_prs',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/index/data');
    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$perusahaan = DB::table('lowongan_kerjas')->where('id_loker',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('update_pasang',['perusahaan' => $perusahaan]);
    }

    public function editprofil($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$perusahaan = DB::table('perusahaans')->where('id_prs',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('update_profil',['perusahaan' => $perusahaan]);
    }

     // update data pegawai
    public function profil_update(Request $request)
     {
     // update data pegawai
     DB::table('perusahaans')->where('id_prs',$request->id)->update([
         'nama_prs' => $request->nama,
         'alamat_prs' => $request->alamat,
         'kota_prs' => $request->kota,
         'telepon_prs' => $request->tlp,
         'email_prs' => $request->email,
     ]);
     // alihkan halaman ke halaman pegawai
     return redirect('/index/data');
     }

     // update data pegawai
     public function update_loker(Request $request)
     {
     // update data pegawai
     DB::table('lowongan_kerjas')->where('id_loker',$request->id)->update([
         'nama_prs' => $request->nama,
         'posisi' => $request->posisi,
         'deskripsi' => $request->deskripsi,
         'tgl_loker' => $request->tgl_posting,
         'tgl_exp' => $request->tgl_kadaluarsa,
     ]);
     // alihkan halaman ke halaman pegawai
     return redirect('index');
     }

     public function kandidat()
     {
         //mengambil data dari tabel
         $perusahaan = DB::table('pencari_kerjas')->get();
 
         //mengirim data ke view 
         return view('masuk',['perusahaan' => $perusahaan]);
 
     }
    
    public function hapus4($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pencari_kerjas')->where('id_pk',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/index/kandidat');
    }
}
