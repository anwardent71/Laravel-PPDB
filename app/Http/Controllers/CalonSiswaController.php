<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

class CalonSiswaController extends Controller
{
    public function index() {
        // return "Tabel Data Calon Siswa";
        $Calonsiswa = Calonsiswa::all();
        return view('daftar-calon-siswa',['calonsiswa'=>$calonsiswa]);
    }

    public function tampil() {
        $calonmurid = Calonsiswa::all();
        return view('data-cpdb',['cpdb'=>$calonmurid]);
    }

    public function create() {
        return view('form-pendaftaran');
    }

    public function simpan(Request $request) {
        $validateData = $request->validate([
            'no_ppdb'=>'required|size:10',
            'nama'=>'required|min:3|max:60',
            'asal_sekolah'=>'required',
            'pilihan1'=>'required',
            'pilihan2'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required'
        ],[
            'no_ppdb.required'=>'Nomor PPDB Wajib di isi dan harus 10 Karakter',
            'nama.required'=>'Nama Calon Siswa Wajib di isi',
            'asal_sekolah.required'=>'Asal Sekolah Wajib di isi',
            'pilihan1.required'=>'Pilihan pertama jurusan Wajib di isi',
            'pilihan2.required'=>'Pilihan kedua jurusan Wajib di isi',
            'alamat.required'=>'Alamat Wajib Lengkap dan di isi',
            'no_hp.required'=>'No Handphone Wajib di isi'
        ]);
        dump($validateData);
        $calonsiswa = New Calonsiswa();
        $calonsiswa->no_ppdb = $validateData['no_ppdb'];
        $calonsiswa->nama = $validateData['nama'];
        $calonsiswa->asal_sekolah = $validateData['asal_sekolah'];
        $calonsiswa->pilihan1 = $validateData['pilihan1'];
        $calonsiswa->pilihan2 = $validateData['pilihan2'];
        $calonsiswa->alamat = $validateData['alamat'];
        $calonsiswa->no_hp = $validateData['no_hp'];
        $calonsiswa->save();

        return "Data Kamu berhasil di simpan ke database";
    }
}
