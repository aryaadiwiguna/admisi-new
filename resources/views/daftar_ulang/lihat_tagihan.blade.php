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
        <div class="bg-white p-4 border  w-full  rounded-lg col-span-3 mt-4 font-semibold">
            <div class="p-4">
                <a href="/" class="flex items-center gap-2">
                    <span class="icon-[mdi--arrow-left] text-xl text-[#004680]"></span>
                    <span class="font-semibold text-sm"> Kembali</span>
                </a>

                <div class="bg-black p-3 flex justify-center items-center mt-4 rounded-t-3xl">
                    <img src="{{ asset('assets/images/pmb/whiteprimakara.png') }}" alt="Logo Primakara"
                        class="w-36 object-contain mr-3" />
                </div>

                <h4 class="text-base font-medium text-black mt-4">Data Calon Mahasiswa</h4>
                <div class="space-y-2 text-sm w-auto pl-0 p-3">
                    <div class="flex justify-start">
                        <span class=" text-[#6B7B8A] text-base font-normal">Nama</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: I Kadek Adi Gilang Pratama</span>
                    </div>
                    <div class="flex justify-start">
                        <span class=" text-[#6B7B8A] text-base font-normal">Nim</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: 2501010003</span>
                    </div>
                    <div class="flex justify-start">
                        <span class=" text-[#6B7B8A] text-base font-normal">Tempat Lahir</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: Denpasar</span>
                    </div>
                    <div class="flex justify-start">
                        <span class=" text-[#6B7B8A] text-base font-normal">Tanggal Lahir</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: 06 - 03 - 2003</span>
                    </div>
                </div>

                <hr class="mt-2">

                <h4 class="text-base font-medium text-black mt-4">Rencana Studi</h4>
                <div class="space-y-2 text-sm w-auto pl-0 p-3">
                    <div class="flex justify-start">
                        <span class=" text-[#6B7B8A] text-base font-normal">Program Studi Pilihan</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: Bisnis Digital</span>
                    </div>
                    <div class="flex justify-start">
                        <span class=" text-[#6B7B8A] text-base font-normal">Sistem Kuliah</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: Kelas Pagi</span>
                    </div>
                </div>

                <hr class="mt-2">

                <h4 class="text-base font-medium text-black mt-4">No Invoice - ID Transaksi</h4>
                <div class="flex justify-between mt-1">
                    <p class="text-xl font-bold text-black">INV-ACA.01.LBB.72264.2023</p>
                    <div class=" text-gray-600 bg-[#17A35F33] border-[#17A35F] p-2 pb-1 rounded-full">
                        <span class="icon-[icon-park-outline--correct]"></span>
                    </div>
                </div>
                <div class="flex justify-start mb-2">
                    <span class="font-normal text-[#6B7B8A] text-base">Tanggal</span>
                    <span class="text-[#6B7B8A] text-base font-normal">: 3 September 2024</span>
                </div>

                <div class="flex justify-start mb-2">
                    <span class="font-normal text-[#6B7B8A] text-base">Skema Pembayaran</span>
                    <span class="text-[#6B7B8A] text-base font-normal">: Tanpa Cicilan</span>
                </div>

                <div class="flex justify-start mb-2">
                    <span class="font-normal text-[#6B7B8A] text-base">Metode Pembayaran</span>
                    <span class="text-[#6B7B8A] text-base font-normal">: BNI Virtual Account</span>
                </div>

                <div class="flex justify-between mb-2">
                    <span class="font-normal text-[#6B7B8A] text-base">Biaya DPP</span>
                    <span class="text-[#6B7B8A] text-base font-normal">Rp 10.000.000</span>
                </div>

                <div class="flex justify-between mb-2">
                    <span class="font-normal text-[#6B7B8A] text-base">Biaya UKT</span>
                    <span class="text-[#6B7B8A] text-base font-normal">Rp 5.500.000</span>
                </div>

                <div class="flex justify-between mb-2">
                    <span class="font-normal text-[#6B7B8A] text-base">Diskon Early Bird Untuk DPP</span>
                    <span class="text-[#EE6363] text-base font-normal"> - Rp 10.000.000</span>
                </div>

                <div class="flex justify-between mb-2">
                    <h4 class="text-xl font-medium">Total Pembayaran</h4>
                    <span class="text-[#EB9A3C] text-xl font-normal">Rp 16.150.000</span>
                </div>

                <div class="flex justify-between mb-2">
                    <h4 class="text-xl font-medium">Sisa Pembayaran</h4>
                    <span class="text-[#EB9A3C] text-xl font-normal">Rp 16.150.000</span>
                </div>

                <div class="flex justify-center bg-[#004680] text-white p-3 mt-2 rounded">
                    <a href="" class="font-[Georama] font-medium text-base">Download Informasi Pendaftaran</a>
                </div>

                <div class="flex justify-center mt-2">
                    <a href="" class="font-[Georama] text-[#004680] font-medium text-sm">Lihat Tagihan
                        Pembayaran</a>
                </div>

            </div>

        </div>
    </div>
@stop
