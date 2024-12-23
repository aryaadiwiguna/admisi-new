<div class="bg-white p-4 border  w-full  rounded-lg col-span-3">
    <div class="flex justify-between">
        <h2 class="text-2xl text-[#001B36] font-bold">Biodata
            <span class="text-[#17A35F]">{{ $currPage }}/2</span>
        </h2>
        <div class="flex gap-2">
            <button wire:click='prevPage' @disabled($currPage == 1)
                class="w-6 h-6 rounded-md border border-[#001B36] disabled:border-[#E3E6EA] flex items-center justify-center">
                <span
                    class="icon-[ic--baseline-chevron-left] text-xl {{ $currPage == 1 ? 'text-[#E3E6EA]' : '' }}"></span>
            </button>
            <button wire:click='nextPage' @disabled($currPage == 2)
                class="w-6 h-6 rounded-md border border-[#001B36] rotate-180 disabled:border-[#E3E6EA] flex items-center justify-center">
                <span
                    class="icon-[ic--baseline-chevron-left] text-xl {{ $currPage == 2 ? 'text-[#E3E6EA]' : '' }}"></span>
            </button>
        </div>
    </div>
    @if ($currPage == 1)
        <form class="grid w-full rounded-lg col-span-2 mt-4" wire:submit="saveFirstSection">
            <div class="mt-2">
                <label for="nama_lengkap" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nama
                    Lengkap</label>
                <input name="nama_lengkap" id="nama_lengkap" wire:model="nama_lengkap"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                @error('nama_lengkap')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="jenis_kelamin" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenis
                    Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" wire:model="jenis_kelamin" required
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    {{-- <option disabled value="">Pilh Salah satu</option> --}}
                    <option value="0" selected>Laki-laki</option>
                    <option value="1">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="tempat_lahir" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tempat
                    Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" wire:model="tempat_lahir"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                @error('tempat_lahir')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="tanggal_lahir" wire:model="tanggal_lahir"
                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" wire:model="tanggal_lahir" id="tanggal_lahir"
                    wire:model="tanggal_lahir"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                @error('tanggal_lahir')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="alamat"
                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Alamat</label>
                <input type="text" name="alamat" id="alamat" wire:model="alamat"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                @error('alamat')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="no_telp" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nomor
                    Telepon</label>
                <input type="number" name="no_telp" id="no_telp" wire:model="no_telp"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                @error('no_telp')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="email" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Alamat
                    Email</label>
                <input type="email" name="email" id="email" wire:model="email"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                @error('email')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-4">
                <button type="submit"
                    class="text-white w-full bg-[#004680] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 dark:bg-blue-600 dark:hover:bg-[#004680] focus:outline-none dark:focus:ring-blue-800">Lanjutkan</button>
            </div>
        </form>
    @else
        <form class="w-full rounded-lg col-span-2" wire:submit="saveSecondSection">
            <div class="mt-2">
                <label for="nisn"
                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">NISN</label>
                <input type="text" name="nisn" id="nisn" wire:model="nisn"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div class="mt-2">
                <label for="id_ref_sekolah" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">NPSN
                    Nama
                    Sekolah</label>
                <input type="text" name="id_ref_sekolah" id="id_ref_sekolah" wire:model="id_ref_sekolah"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div class="mt-2">
                <label for="jurusan"
                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" wire:model="jurusan"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div class="mt-2">
                <label for="tahun_lulus" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tahun
                    Lulus</label>
                <input type="number" name="tahun_lulus" id="tahun_lulus" wire:model="tahun_lulus"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div class="mt-2">
                <label for="id_ref_provinsi"
                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Provinsi Asal
                    Sekolah</label>
                <input type="text" name="id_ref_provinsi" id="id_ref_provinsi" wire:model="id_ref_provinsi"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div class="mt-2">
                <label for="id_ref_kabupaten"
                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Kabupaten Asal
                    Sekolah</label>
                <input type="text" name="id_ref_kabupaten" id="id_ref_kabupaten" wire:model="id_ref_kabupaten"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div class="mt-2">
                <label for="nilai_akhir" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nilai
                    Akhir
                    Assesment</label>
                <input type="number" name="nilai_akhir" id="nilai_akhir" wire:model="nilai_akhir"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div class="mt-2">
                <label for="kuesioner"
                    class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Kuesioner</label>
                <input type="text" name="kuesioner" id="kuesioner" wire:model="kuesioner"
                    class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div class="mt-4">
                <button type="submit"
                    class="text-white w-full bg-[#004680] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 dark:bg-blue-600 dark:hover:bg-[#004680] focus:outline-none dark:focus:ring-blue-800">Simpan
                    dan Lanjutkan</button>
            </div>
    @endif
</div>
