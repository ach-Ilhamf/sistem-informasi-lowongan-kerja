<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function daftar_kandidat()
    {
        return view('daftar_kandidat');
    }
    
    public function daftar_loker()
    {
        return view('daftar_loker');
    }

    public function daftar_perusahaan()
    {
        return view('daftar_perusahaan');
    }

    public function konfirmasi_loker()
    {
        return view('konfirmasi_loker');
    }

    public function faq()
    {
        return view('faq');
    }

    public function data_kandidat()
    {
        //mengambil data dari tabel
        $admin = DB::table('pencari_kerjas')->get();

        //mengirim data ke view 
        return view('daftar_kandidat',['admin' => $admin]);
    }

    public function data_loker()
    {
        //mengambil data dari tabel
        $admin = DB::table('lowongan_kerjas')->get();

        //mengirim data ke view 
        return view('daftar_loker',['admin' => $admin]);
    }

    public function data_perusahaan()
    {
        //mengambil data dari tabel
        $admin = DB::table('perusahaans')->get();

        //mengirim data ke view 
        return view('daftar_perusahaan',['admin' => $admin]);
    }

    public function hapus_loker($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('lowongan_kerjas')->where('id_loker',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/index/data_loker');
    }

    public function hapus_kandidat($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pencari_kerjas')->where('id_pk',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/index/data_kandidat');
    }

    public function hapus_perusahaan($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('perusahaans')->where('id_prs',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/index/data_perusahaan');
    }
}
