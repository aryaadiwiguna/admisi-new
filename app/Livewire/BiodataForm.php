<?php

namespace App\Livewire;

use App\Models\Pmb;
use Livewire\Component;
use Livewire\Attributes\Validate;


/**
 * TOLONG BACA SAYA :
 *
 * Karena tidak user yang login, tapi sebenarnya dalam flow kita membutuhkan sebuah userId yang login untuk menyimpan data,
 * maka disini saya akan menggunakan userId = 1 sebagai contoh.
 *
 * Semua yang ada disini masih bersifat hard code, jadi mohon ketika sudah implementasi login, tolong struktur table pmb diperbaiki
 * dengan berelasi kepada tabel user.
 *
 * Flow saat ini :
 * (Contoh disini menggunakan id = 1, jika ingin membuat data yang baru maka dapat mengubah ke id yang lainnya.)
 * 1. Buatlah $currentActiveUserId = 1
 * 2. Pada awal mengunjungi page maka sistem mengecek ke db apakah sudah ada data dengan userId 1. Jika sudah maka fill data, kalau belum data kosong.
 * 3. Validasi dan penyimpanan hanya dilakukan dimasing masing section form dan langsung melakukan penyimpanan ke DB.
 *
 * NEED TO FIX :
 * 1. Struktur table, mohon disesuaikan kembali nanti (dari relasi, seperti foreign key ataupun tipe data).
 * 2. Component input, bisa disesuaikan, misal nanti memunculkan list sekolah, bisa menggunakan autocomplete
 * , atau apapun yang bisa mengakomodir kebutuhan.
 *
 * **** JANGAN LUPA MIGRATE DB DULU ****
 * SEMUA HAL DISINI BERSIFAT SEMENTARA, MOHON DISESUAIKAN DENGAN KEBUTUHAN YA GANTENG 😘
 */

class BiodataForm extends Component
{
    public $currPage = 1;

    public $currentActiveUserId = 1;

    public $id_pmb = null;
    public $nama_lengkap = '';
    public $jenis_kelamin = '0';
    public $tempat_lahir = '';
    public $tanggal_lahir = '';
    public $alamat = '';
    public $no_telp = '';
    public $email = '';
    public $nisn = '';
    public $id_ref_sekolah = '';
    public $jurusan = '';
    public $tahun_lulus = '';
    public $id_ref_provinsi = '';
    public $id_ref_kabupaten = '';
    public $nilai_akhir = '';
    public $kuesioner = '';

    public function mount()
    {
        $data = Pmb::where('id_user', $this->currentActiveUserId)->first();

        if ($data) {
            $this->nama_lengkap = $data['nama_lengkap'];
            $this->jenis_kelamin = $data['jenis_kelamin'];
            $this->tempat_lahir = $data['tempat_lahir'];
            $this->tanggal_lahir = $data['tanggal_lahir'];
            $this->alamat = $data['alamat'];
            $this->no_telp = $data['no_telp'];
            $this->email = $data['email'];
            $this->nisn = $data['nisn'];
            $this->id_ref_sekolah = $data['id_ref_sekolah'];
            $this->jurusan = $data['jurusan'];
            $this->tahun_lulus = $data['tahun_lulus'];
            $this->id_ref_provinsi = $data['id_ref_provinsi'];
            $this->id_ref_kabupaten = $data['id_ref_kabupaten'];
            $this->nilai_akhir = $data['nilai_akhir'];
            $this->kuesioner = $data['kuesioner'];
            $this->id_pmb = $data['id_pmb'];
        }
    }

    public function nextPage($isSave = true)
    {
        if ($this->currPage == 2) {
            return;
        }

        if ($isSave) {
            $this->saveFirstSection(true);
            $this->currPage++;

            return;
        }

        $this->currPage++;
    }

    public function validateFirstSection()
    {
        $rules = [
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required|boolean',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'email' => 'required|email',
        ];

        $validated_data = $this->validate($rules);

        return $validated_data;
    }

    public function validateSecondSection()
    {
        $rules = [
            'nisn' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required',
            'tahun_lulus' => 'required',
            'id_ref_sekolah' => 'required',
            'id_ref_provinsi' => 'required',
            'id_ref_kabupaten' => 'required',
            'nilai_akhir' => 'required',
            'kuesioner' => 'required',
        ];

        $validated_data = $this->validate($rules);

        return $validated_data;
    }

    public function saveFirstSection($isFromNextAction = false)
    {
        $data = $this->validateFirstSection();

        if ($this->id_pmb) {
            $pmb = Pmb::findOrFail($this->id_pmb);
            $payload = array_merge($data, ['id_user' => $this->currentActiveUserId]);
            $pmb->fill($payload);
            $pmb->save();
        } else {
            Pmb::create(array_merge($data, ['id_user' => $this->currentActiveUserId]));
        }

        if (!$isFromNextAction) {
            $this->currPage++;
        }
    }

    public function saveSecondSection()
    {
        $data = $this->validateSecondSection();

        if ($this->id_pmb) {
            $pmb = Pmb::findOrFail($this->id_pmb);
            $payload = array_merge($data, ['id_user' => $this->currentActiveUserId]);
            $pmb->fill($payload);
            $pmb->save();
        } else {
            Pmb::create(array_merge($data, ['id_user' => $this->currentActiveUserId]));
        }

        session()->flash('status', 'Biodata berhasil disimpan');

        return $this->redirect('/application/pembayaran/1');
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
        return view('livewire.biodata-form');
    }
}
