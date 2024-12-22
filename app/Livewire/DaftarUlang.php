<?php

namespace App\Livewire;

use Livewire\Component;

class DaftarUlang extends Component
{
    public $currPage = 1;

    public function nextPage()
    {
        if ($this->currPage == 2) {
            return;
        }


        $this->currPage++;
    }

    public function prevPage()
    {
        if ($this->currPage == 1) {
            return;
        }

        $this->currPage--;
    }

    public function render()
    {
        return view('livewire.daftar-ulang');
    }
}
