<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendapatanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pendapatan = DB::table('pendapatan')->get();

    	// mengirim data pegawai ke view index
    	return view('pendapatan.index',['pendapatan' => $pendapatan]);

    }
        // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('pendapatan.tambah');

    }
            // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pendapatan')->insert([
            'pendapatan_idpegawai' => $request->idpegawai,
            'pendapatan_bulan' => $request->bulan,
            'pendapatan_tahun' => $request->tahun,
            'pendapatan_gaji' => $request->gaji,
            'pendapatan_tunjangan' => $request->tunjangan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan'); //tidak return view, karna jadi tidak fleksibel

    }
        // method untuk edit data pegawai
        public function edit($id)
        {
            // mengambil data pegawai berdasarkan id yang dipilih
            $pendapatan = DB::table('pendapatan')->where('pendapatan_id',$id)->get();
            // passing data pegawai yang didapat ke view edit.blade.php
            return view('pendapatan.edit',['pendapatan' => $pendapatan]);

        }
                // method untuk hapus data pegawai
        public function hapus($id)
        {
            // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('pendapatan')->where('pendapatan_id',$id)->delete();

            // alihkan halaman ke halaman pegawai
            return redirect('/pendapatan');
        }
                // update data pegawai
        public function update(Request $request)
        {
            // update data pegawai
            DB::table('pendapatan')->where('pendapatan_id',$request->id)->update([
            'pendapatan_idpegawai' => $request->idpegawai,
            'pendapatan_bulan' => $request->bulan,
            'pendapatan_tahun' => $request->tahun,
            'pendapatan_gaji' => $request->gaji,
            'pendapatan_tunjangan' => $request->tunjangan
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/pendapatan');
    }
}
