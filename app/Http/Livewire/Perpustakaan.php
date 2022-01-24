<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\perpustakaanv;

class Perpustakaan extends Component
{
    public $name;
    public $email;

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
        ]);
  
        perpustakaan::create($data);
  
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.perpustakaan');
    }
}
