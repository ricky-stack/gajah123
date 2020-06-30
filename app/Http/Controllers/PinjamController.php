<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamController extends Controller
    {
        public function index()
        {
        $datatamu = DB::table('buku')->get();
        return view('index',['datatamu'=> $datatamu]);
    }

    public function tambah()
    {
    
        // memanggil view tambah
            return view('tambah');
    }
        // method untuk insert data ke table Tamu
        public function proses_tambah(Request $request)
        {
            // insert data ke table pegawai
            DB::table('buku')->insert([
                'No_Buku' => $request->No_Buku,
                'Judul' => $request->Judul,
                'Pengarang' => $request->Pengarang,
                'Tahun_Terbit' => $request->Tahun_Terbit,
                'Jenis_Buku' => $request->Jenis_Buku
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/peminjaman');
    
        }

        public function hapus($id)
        {
            // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('buku')->where('No_Buku',$id)->delete();
                
            // alihkan halaman ke halaman pegawai
            return redirect('peminjaman');
        }
        
        // method untuk edit data pegawai
        public function edit($id)
        {
            // mengambil data pegawai berdasarkan id yang dipilih
            $datatamu = DB::table('buku')->where('No_Buku',$id)->get();
            // passing data pegawai yang didapat ke view edit.blade.php
            return view('edit',['datatamu' => $datatamu]);
        }
        // update data pegawai
    public function proses_edit(Request $request)
    {
        // update data pegawai
        DB::table('buku')->where('No_Buku',$request->id)->update([
            'Judul' => $request->Judul,
            'Pengarang' => $request->Pengarang,
            'Tahun_Terbit' => $request->Tahun_Terbit,
            'Jenis_Buku' => $request->Jenis_Buku
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('peminjaman');
    }
    public function anggota()
    {
    $datatamu = DB::table('anggota')->get();
    return view('anggota',['datatamu'=> $datatamu]);
    }

    public function tambahag()
    {
        return view('tambahag');
    }

    public function proses_tambah2(Request $request)
    {
        // insert data ke table pegawai
        DB::table('anggota')->insert([
            'Id_Anggota' => $request->Id_Anggota,
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'No_Telp' => $request->No_Telp,
            'Tgl_Lahir' => $request->Tgl_Lahir
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/anggota');
    }
    public function editag($id)
        {
            // mengambil data pegawai berdasarkan id yang dipilih
            $datatamu = DB::table('anggota')->where('Id_Anggota',$id)->get();
            // passing data pegawai yang didapat ke view edit.blade.php
            return view('editag',['datatamu' => $datatamu]);
        }
        // update data pegawai
    public function proses_edit2(Request $request)
    {
        // update data pegawai
        DB::table('anggota')->where('Id_Anggota',$request->id)->update([
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'No_Telp' => $request->No_Telp,
            'Tgl_Lahir' => $request->Tgl_Lahir
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('anggota');
    }
    public function hapus2($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('anggota')->where('Id_Anggota',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('anggota');
    }
    public function pinjam()
    {
    $datatamu = DB::table('pinjam')->get();
    return view('pinjam',['datatamu'=> $datatamu]);
    }

    public function tambahpj()
    {
        return view('tambahpj');
    }

    public function proses_tambah3(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pinjam')->insert([
            'No_Pinjam' => $request->No_Pinjam,
            'Id_Anggota' => $request->Id_Anggota,
            'No_Buku' => $request->No_Buku,
            'Tgl_Pinjam' => $request->Tgl_Pinjam,
            'Tgl_Kembali' => $request->Tgl_Kembali
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pinjam');
    }
    
    public function welcome()
    {
        return view('welcome');
    }
    }