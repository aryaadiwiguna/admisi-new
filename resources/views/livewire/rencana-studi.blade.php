<div class="border w-full h-fit rounded-lg col-span-2 p-3">
    <h2 class="font-bold text-xl text-center mb-4 mt-2">Rencana Studi</h2>
    <div class="flex justify-between">
        <div>
            <p class="font-bold text-sm">Program Studi Pilihan</p>
            <p class="text-[#17A35F] text-sm">{{ $selectedProdi }}</p>
        </div>
        <div class="flex items-center gap-1 text-[#001B36] cursor-pointer" data-dropdown-toggle="dropdown-prodi">
            Ganti
            <span class="icon-[mdi--chevron-down] text-xl"></span>
        </div>
        <div id="dropdown-prodi"
            class="z-10 hidden bg-white divide-y border border-zinc-300 divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                <li>
                    <div wire:click="changeProdi('Sistem Informasi')"
                        class="block px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Sistem
                        Informasi</div>
                </li>
                <li>
                    <div wire:click="changeProdi('Sistem Informasi Akuntansi')"
                        class="block px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Sistem
                        Informasi Akuntansi</div>
                </li>
                <li>
                    <div wire:click="changeProdi('Informatika')"
                        class="block px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Informatika</div>
                </li>
                <li>
                    <div wire:click="changeProdi('Desain Komunikasi Visual' )"
                        class="block px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Desain
                        Komunikasi Visual
                    </div>
                </li>
                <li>
                    <div wire:click="changeProdi('Akuntansi' )"
                        class="block px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Akuntasi
                    </div>
                </li>
                <li>
                    <div wire:click="changeProdi('Bisnis Digital')"
                        class="block px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Bisnis
                        Digital
                    </div>
                </li>
                <li>
                    <div wire:click="changeProdi('Manajemen')"
                        class="block px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Manajemen
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <div class="flex justify-between mt-3">
        <div>
            <p class="font-bold text-sm">Sistem Kuliah</p>
            <p class="text-[#17A35F] text-sm">{{ $selectedKelas }}</p>
        </div>
        <div class="flex items-center gap-1 text-[#001B36] cursor-pointer" data-dropdown-toggle="dropdown-kelas">
            Ganti
            <span class="icon-[mdi--chevron-down] text-xl"></span>
        </div>
        <div id="dropdown-kelas"
            class="z-10 hidden bg-white divide-y border border-zinc-300 divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                <li>
                    <div wire:click="changeKelas('Kelas Pagi')"
                        class="block px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Kelas Pagi</div>
                </li>
                <li>
                    <div wire:click="changeKelas('Kelas Malam')"
                        class="block px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Kelas Malam
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex mt-3 gap-2 mb-2">
        <span class="icon-[mingcute--information-fill] text-4xl text-[#6B7B8A]"></span>
        <div class="text-[#6B7B8A] font-medium flex gap-2">
            <span class="text-sm ">
                Rencana Studi tidak dapat diubah ketika sudah Daftar Ulang
            </span>
        </div>
    </div>
    <div class="mb-4">
        <hr>
        <a href="" class="py-4 px-3 bg-[#EEEEEE] flex justify-center items-center border rounded-lg">
            Lihat Tata Cara Pembayaran
        </a>
    </div>
    <div class="mb-4">
        <a href="" class="py-4 px-3 bg-[#EEEEEE] flex justify-center items-center border rounded-lg">
            Lihat Tata Cara Pembayaran
        </a>
    </div>
    <div class="text-center">
        <p class="font-medium text-lg">Perlu Bantuan?<a href="" class="ml-2 text-[#004680]">Hubungi
                Kami</a></p>
    </div>
</div>
