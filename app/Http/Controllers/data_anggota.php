<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perpustakaan;

class data_anggota extends Controller
{
    public function index(){
        return view('data_anggota');
    }

    public function anggota_detail ($id)
    {
        $perpustakaan = perpustakaan::where('id', $id)->get();
        return view('dataanggota_detail')->with('perpustakaan', $perpustakaan);
    } 

    public function anggota_edit ($id){
        $perpustakaan = perpustakaan::where('id', $id)->get();
        return view('dataanggota_edit')->with('perpustakaan', $perpustakaan);
    }

    public function anggota_edit_store (Request $request)
    {

        $messages = [
            'required' => 'Wajib diisi',
        ];

        $this->validate($request,[
            'namalengkap' => 'required|', 
              'email' => 'required|email',
              'ktp_ktas' => 'required|in:KTP, KTAS',
              'nomor_ktp_ktas' => 'required',
              'password' => 'required',
              'tempat_lahir' => 'required',
             'tanggal_lahir' => 'required',
              'alamat_rumah' => 'required',
              'hp' => 'required',
               'nama_instansi' => 'required',
              'alamat_instansi' => 'required',
               'pendidikan_terakhir' => 'required',
               'kelamin' => 'required',
               'pekerjaan' => 'required',
               'status_perkawinan' => 'required',
               'telpon_instansi' => 'required',
        ],$messages);

       perpustakaan::where('id', $request->id)->update([
            'namalengkap' => $request->namalengkap ,
              'email' => $request->email ,
              'ktp_ktas' => $request->ktp_ktas ,
              'nomor_ktp_ktas' => $request->nomor_ktp_ktas ,
              'password' => $request->password ,
              'tempat_lahir' => $request->tempat_lahir ,
             'tanggal_lahir' => $request->tanggal_lahir ,
              'alamat_rumah' => $request->alamat_rumah ,
              'hp' => $request->hp ,
               'nama_instansi' => $request->nama_instansi ,
              'alamat_instansi' => $request->alamat_instansi ,
               'pendidikan_terakhir' => $request->pendidikan_terakhir ,
               'kelamin' => $request->kelamin ,
               'pekerjaan' => $request->pekerjaan ,
               'status_perkawinan' => $request->status_perkawinan ,
               'telpon_instansi' => $request->telpon_instansi ,
        ]);
        return Redirect('/dataanggota');

    }
}
