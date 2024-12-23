@extends('dashboard.layout')



@section('container')
    <div class="col-span-3">
        <div class="border rounded-lg">
            <div class="p-6">
                <a href="/" class="flex items-center gap-2">
                    <span class="icon-[mdi--arrow-left] text-xl text-[#004680]"></span>
                    <span class="font-semibold text-sm"> Kembali</span>
                </a>
                <h5 class="mt-6 font-medium font-[Georama] text-3xl mb-5">Tagihan Pembayaran</h5>
                <hr class="mt-2">

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
                        <span class=" text-[#6B7B8A] text-base font-normal">Program Studi Pilihan</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: Bisnis Digital</span>
                    </div>
                    <div class="flex justify-start">
                        <span class=" text-[#6B7B8A] text-base font-normal">Sistem Kuliah</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: Kelas Pagi</span>
                    </div>
                </div>

                <h4 class="text-base font-medium text-black mt-4">Keterangan</h4>
                <div class="space-y-2 text-sm w-auto pl-0 p-3">
                    <div class="flex justify-start">
                        <span class=" text-[#6B7B8A] text-base font-normal">Skema Pembayaran</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: Cicilan</span>
                    </div>
                    <div class="flex justify-start">
                        <span class=" text-[#6B7B8A] text-base font-normal">Tenggat Pembayaran</span>
                        <span class="text-[#6B7B8A] text-base font-normal">: 31 Juli 2025</span>
                    </div>
                </div>


                {{-- <div class="flex justify-evenly">
                    <a href="" class="p-6 pb-0 bg-orange-500">Download Invoice</a>
                    <a href="" class="p-6 bg-orange-500">Download Invoice</a>
                    <a href="" class="p-6 bg-orange-500">Download Invoice</a>
                </div> --}}
                {{-- <div class="flex justify-end">
                    <a href="" class="p-6 ">Download Invoice</a>
                </div> --}}

            </div>

        </div>
    </div>
@stop
