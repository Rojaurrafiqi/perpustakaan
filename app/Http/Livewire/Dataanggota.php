<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\perpustakaan;

class Dataanggota extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;
    public $namalengkap, $email, $hp ;
    public $updateMode = false;
     public $deleteId = '';


    


    public function render()
    {
        // livesearch
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.dataanggota',[
            'perpustakaan' => perpustakaan::where('namalengkap','like', $searchTerm)->paginate(5)
        ]);

    }


    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        perpustakaan::find($this->deleteId)->delete();
        session()->flash('message', 'Anggota berhasil dihapus.');
    }
}
