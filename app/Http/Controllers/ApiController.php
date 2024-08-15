<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LowonganKerja;
use App\Models\pencari_kerja;
use App\Models\perusahaan;

class ApiController extends Controller
{
    // data lowongan
    public function getData()
    {
        try {
            // Mendapatkan data dari tabel 'lowongan_kerjas'
            $data = LowonganKerja::all();

            // Mengembalikan data dalam format JSON
            return response()->json(['data' => $data]);
        } catch (\Exception $e) {
            // Menangkap dan menangani kesalahan jika terjadi
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    //data perusahaan

    public function getDataPerusahaan()
    {
        try {
            // Mendapatkan data dari tabel 'lowongan_kerjas'
            $data = perusahaan::all();

            // Mengembalikan data dalam format JSON
            return response()->json(['data_perusahaan' => $data]);
        } catch (\Exception $e) {
            // Menangkap dan menangani kesalahan jika terjadi
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

        //data pelamar

        public function getDataPelamar()
        {
            try {
                // Mendapatkan data dari tabel 'lowongan_kerjas'
                $data = pencari_kerja::all();
    
                // Mengembalikan data dalam format JSON
                return response()->json(['data_pelamar' => $data]);
            } catch (\Exception $e) {
                // Menangkap dan menangani kesalahan jika terjadi
                return response()->json(['error' => $e->getMessage()], 500);
            }
        }
}


