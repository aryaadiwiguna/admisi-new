<?php

namespace App\Livewire;

use Livewire\Component;

class RencanaStudi extends Component
{

    public $selectedProdi = 'Sistem Informasi';
    public $selectedKelas = 'Kelas Pagi';


    public function changeProdi($prodi)
    {
        $this->selectedProdi = $prodi;
    }

    public function changeKelas($kelas)
    {
        $this->selectedKelas = $kelas;
    }

    public function render()
    {
        return view('livewire.rencana-studi');
    }
}
