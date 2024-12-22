@extends('dashboard.layout')

@php
    $currPage = 1;
@endphp

@section('container')
    <div class="col-span-3">
        <div class="border rounded-lg">
            <div class="p-6 pb-3">
                <a href="/" class="flex items-center gap-2">
                    <span class="icon-[mdi--arrow-left] text-xl text-[#004680]"></span>
                    <span class="font-semibold text-sm"> Kembali</span>
                </a>
                <h5 class="mt-6 font-medium font-[Georama] text-3xl mb-5">Application</h5>
                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
            </div>
            <ol class="flex items-center w-full p-6 pt-1">
                <li
                    class="flex w-full items-center min-h-[95px] border max-h-[95px] bg-white p-3 pl-5 py-7 relative border-b-[6px] border-[#E3E6EA]-400 border-b-[#17A35F]">
                    <div class="min-w-8 min-h-8 mr-2 bg-[#17A35F] rounded-full flex justify-center items-center">
                        <span class="icon-[mdi--check] text-white text-xl"></span>
                    </div>
                    {{-- <div class="min-w-8 min-h-8 max-w-8 max-h-8 border-[#17A35F] border-8 bg-white rounded-full mr-2 after:content['']"></div> --}}
                    <p class="font-bold">Mengisi Biodata</p>
                    <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg"
                        class="absolute right-[-12px] rotate-90 z-20">
                        <polygon points="6,0 12,12 0,12" fill="white" stroke="#E3E6EA" stroke-width="1" />
                        <line x1="6" y1="0" x2="0" y2="12" stroke="#E3E6EA"
                            stroke-width="1" />
                        <line x1="6" y1="0" x2="12" y2="12" stroke="#E3E6EA"
                            stroke-width="1" />
                        <line x1="0" y1="12" x2="12" y2="12" stroke="white" stroke-width="1" />
                    </svg>
                </li>
                <li
                    class="flex w-full items-center min-h-[95px] border max-h-[95px] bg-white p-3 pl-5 py-7 relative border-b-[6px] border-[#E3E6EA]-400 border-b-[#EB9A3C]">
                    <div class="min-w-8 min-h-8 mr-2 bg-[#EB9A3C] flex items-center justify-center rounded-full">
                        <div class="bg-white w-4 h-4 rounded-full"></div>
                    </div>
                    <p class="font-bold">Pembayaran Registrasi</p>
                    <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg"
                        class="absolute right-[-12px] rotate-90 z-20">
                        <polygon points="6,0 12,12 0,12" fill="white" stroke="#E3E6EA" stroke-width="1" />
                        <line x1="6" y1="0" x2="0" y2="12" stroke="#E3E6EA"
                            stroke-width="1" />
                        <line x1="6" y1="0" x2="12" y2="12" stroke="#E3E6EA"
                            stroke-width="1" />
                        <line x1="0" y1="12" x2="12" y2="12" stroke="white" stroke-width="1" />
                    </svg>
                </li>
                <li
                    class="flex w-full items-center border max-h-[95px] bg-white p-3 pl-5 py-7 relative border-b-[6px] border-[#E3E6EA]-400 border-b-[#E3E6EA]">
                    <div
                        class="min-w-8 min-h-8 max-w-8 max-h-8 border-[#E3E6EA] border-8  bg-[#E3E6EA] rounded-full mr-2 after:content['']">
                    </div>
                    <p class="font-bold text-[#E3E6EA]">Test Masuk</p>
                    <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg"
                        class="absolute right-[-12px] rotate-90 z-20">
                        <polygon points="6,0 12,12 0,12" fill="white" stroke="#E3E6EA" stroke-width="1" />
                        <line x1="6" y1="0" x2="0" y2="12" stroke="#E3E6EA"
                            stroke-width="1" />
                        <line x1="6" y1="0" x2="12" y2="12" stroke="#E3E6EA"
                            stroke-width="1" />
                        <line x1="0" y1="12" x2="12" y2="12" stroke="white" stroke-width="1" />
                    </svg>
                </li>
                <li
                    class="flex w-full items-center border max-h-[95px] bg-white p-3 pl-5 py-7 relative border-b-[6px] border-[#E3E6EA]-400 border-b-[#E3E6EA]">
                    <div
                        class="min-w-8 min-h-8 max-w-8 max-h-8 border-[#E3E6EA] border-8  bg-[#E3E6EA] rounded-full mr-2 after:content['']">
                    </div>
                    <p class="font-bold text-[#E3E6EA]" id="daftar-ulang">Daftar Ulang</p>
                </li>
            </ol>
        </div>
        {{-- Form Data --}}
        {{-- <div class="grid grid-cols-5 gap-4 mt-4">
            <div class="bg-white p-4 border  w-full  rounded-lg col-span-3">
                <div class="flex justify-between">
                    <h2 class="text-2xl text-[#001B36] font-bold">Biodata
                        <span class="text-[#17A35F]">1/2</span>
                    </h2>
                    <div class="flex gap-2">
                        <button @disabled($currPage == 1)
                            class="w-6 h-6 rounded-md border border-[#001B36] disabled:border-[#E3E6EA] flex items-center justify-center">
                            <span
                                class="icon-[ic--baseline-chevron-left] text-xl {{ $currPage == 1 ? 'text-[#E3E6EA]' : '' }}"></span>
                        </button>
                        <button @disabled($currPage == 2)
                            class="w-6 h-6 rounded-md border border-[#001B36] rotate-180 disabled:border-[#E3E6EA] flex items-center justify-center">
                            <span
                                class="icon-[ic--baseline-chevron-left] text-xl {{ $currPage == 2 ? 'text-[#E3E6EA]' : '' }}"></span>
                        </button>
                    </div>
                </div>
                @if ($currPage == 1)
                    <div class="grid w-full rounded-lg col-span-2 mt-4">
                        <div class="">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                            <input type="" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenis
                                Kelamin</label>
                            <select name="" id=""
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="">Pilh Salah satu</option>
                                <option value="">Laki-laki</option>
                                <option value="">Perempuan</option>
                            </select>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                            <input type="text" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tanggal
                                Lahir</label>
                            <input type="date" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nomor
                                Telepon</label>
                            <input type="number" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Alamat Email</label>
                            <input type="email" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                    </div>
                @else
                    <div class="w-full rounded-lg col-span-2">
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">NISN</label>
                            <input type="text" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">NPSN Nama
                                Sekolah</label>
                            <input type="text" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jurusan</label>
                            <input type="text" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tahun Lulus</label>
                            <input type="date" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Provinsi Asal
                                Sekolah</label>
                            <input type="text" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Kabupaten Asal
                                Sekolah</label>
                            <input type="text" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                        <div class="mt-2">
                            <label for="item-weight"
                                class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nilai Akhir
                                Assesment</label>
                            <input type="number" name="item-weight" id="item-weight"
                                class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                        </div>
                    </div>
                @endif
            </div>
            <div class="border w-full h-fit rounded-lg col-span-2 p-3">
                <h2 class="font-bold text-xl text-center mb-4 mt-2">Rencana Studi</h2>
                <div class="flex justify-between">
                    <div>
                        <p class="font-bold text-sm">Program Studi Pilihan</p>
                        <p class="text-[#17A35F] text-sm">Sistem Informasi</p>
                    </div>
                    <div class="flex items-center gap-1 text-[#001B36] ">
                        Ganti
                        <span class="icon-[mdi--chevron-down] text-xl"></span>
                    </div>
                </div>
                <div class="flex justify-between mt-3">
                    <div>
                        <p class="font-bold text-sm">Sistem Kuliah</p>
                        <p class="text-[#17A35F] text-sm">Kelas Pagi</p>
                    </div>
                    <div class="flex items-center gap-1 text-[#001B36] ">
                        Ganti
                        <span class="icon-[mdi--chevron-down] text-xl"></span>
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
        </div> --}}
        @livewire('biodata-form')
    </div>
@stop
