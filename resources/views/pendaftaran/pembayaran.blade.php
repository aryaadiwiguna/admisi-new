@extends('dashboard.layout')

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
                    <p class="font-bold text-[#E3E6EA]">Daftar Ulang</p>
                </li>
            </ol>
        </div>

        {{-- form --}}

        <div class="grid grid-cols-5 gap-4 mt-4">
            <div class="bg-white p-4 border  w-full  rounded-lg col-span-3">
                <div class="flex justify-between">
                    <h2 class="text-[#001B36] font-bold text-2xl">Pembayaran</h2>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-left font-normal text-xl text-black mt-6">Biaya Pendaftaran</span>
                    <span class="text-right font-normal text-xl text-black mt-6">IDR 300.000</span>
                </div>
                <hr class="mt-3">

                <div class="flex justify-between items-center">
                    <span class="text-left font-normal text-xl text-black mt-6">Total Biaya</span>
                    <span class="text-right font-normal text-xl text-[#EB9A3C] mt-6">IDR 300.000</span>
                </div>
                <hr class="mt-3">

                <div class=" flex justify-center align-middle gap-4 rounded-lg bg-gradient-to-r from-[#F0F7FD]  to-[#17A35F] w-full h-10 mt-3 p-7">
                    <p></p>
                </div>

                <hr class="mt-3">

                 <h2 class="text-[#001B36] font-bold text-2xl mt-3">Pilih Metode Pembayaran</h2>

                <div class="p-4">
                    <!-- Opsi 1 -->
                    <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg mb-2 shadow-sm">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/32x32" alt="BNI Logo" class="w-8 h-8 mr-3" />
                            <span class="text-gray-700 font-medium text-xl p-2">BNI Virtual Account</span>
                        </div>
                        <input type="radio" name="metode_pembayaran" class="form-radio text-green-500 p-3" checked />
                    </div>

                    <!-- Opsi 2 -->
                    <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg shadow-sm mt-5">
                        <span class="text-gray-700 font-medium text-xl p-2">Pembayaran Cash</span>
                        <input type="radio" name="metode_pembayaran" class="form-radio text-green-500 p-3" />
                    </div>

                    <!-- Tombol -->
                    <div class="rounded-lg shadow-sm mt-4 w-full bg-blue-800 text-white py-2 font-medium hover:bg-blue-900">
                        <a href="" class="text-center align-middle p-1 flex justify-center items-center">
                            Lanjutkan
                        </a>
                    </div>
                </div>

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
                        Tentang Pembayaran
                    </a>
                </div>
                <div class="text-center">
                    <p class="font-medium text-lg">Perlu Bantuan?<a href="" class="ml-2 text-[#004680]">Hubungi
                            Kami</a></p>
                </div>
            </div>
        </div>

        {{-- end form --}}

    </div>
@stop
