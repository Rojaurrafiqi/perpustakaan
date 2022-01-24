<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\provinsi;
use App\Models\kota;
use App\Models\kecamatan;
use App\Models\desa;

class Wilayah extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $desa;

    public $selectedProvinsi = NULL;
    
    public function mount()
    {
        $this->provinsi = provinsi::all();
        $this->kota = collect();
    }
    public function render()
    {
        return view('livewire.wilayah');
    }


    public function updatedSelectedState($provinsi)
    {
        if (!is_null($provinsi)) {
            $this->kota = kota::where('province_code', $provinsi)->get();
        }
    }
}
