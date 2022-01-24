<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\perpustakaan;

class Pendaftaran extends Component
{
    public $namalengkap;
    public $email;
    public $ktp_ktas ;
    public $nomor_ktp_ktas ;
    public $password ;
    public $tempat_lahir ;
    public $tanggal_lahir ;
    public $alamat_rumah ;
    public $hp ;
    public $nama_instansi ;
    public $telpon_instansi ;
    public $alamat_instansi ;
    public $pendidikan_terakhir ;
    public $kelamin ;
    public $pekerjaan ;
    public $status_perkawinan ;
    public $validasi;
    public $KTP;
    public $KTAS;

    public function submit()
    {
        $messages = [
            'required' => 'Wajib diisi',
        ];
        $data = $this->validate([
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
        // dd($data);
        perpustakaan::create($data);
  
        return redirect()->to('/dataanggota');
    }

    public function render()
    {
        return view('livewire.pendaftaran');
    }
}
