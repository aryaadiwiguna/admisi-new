@extends('dashboard.layout')

@section('container')
    <div class="col-span-3 border h-auto">
       <div class="p-6">
            <span class="font-semibold font-[Georama] text-sm">Kembali</span>
            <h5 class="mt-10 font-medium font-[Georama] text-3xl">Profile</h5>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
       </div>

       <div class="px-6 pt-0 flex gap-4">
        <img src="{{ asset('assets/images/user-dropdown/user-icon.svg') }}" alt="" class="h-20">

        <div class="space-y-1 m-2">
            <p class="mb-2 text-xl font-medium font-[Georama]">I Kadek Adi Gilang Pratama</p>
            <p class="m-0 text-[#004680] text-base font-medium font-[Georama]">Ganti Foto Profil</p>
        </div>
        
       </div>
       <div class="my-8 px-6">  
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 text-white text-base font-medium bg-blue-900 rounded-t-lg hover:text-white font-[Georama]" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Informasi Umum</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 text-black text-base font-medium  rounded-t-lg bg-gray-100 font-[Georama]" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Domisili</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 text-black text-base font-medium bg-gray-100 rounded-t-lg font-[Georama]" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Orang Tua</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h1 class="font-bold text-2xl leading-8 font-[Georama]">Umum</h1>
                            <form action="#">
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-6">
                                    <div class="w-full">
                                        <label for="jenis_kelamin"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                        <select id="category"
                                            class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Pilih Jenis Kelamin</option>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                    </select>
                                    </div>
                                    <div class="w-full">
                                        <label for=""
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Agama</label>
                                        <select id="category"
                                            class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Pilih Agama</option>
                                            <option value="laki-laki">Hindu</option>
                                            <option value="perempuan">Islam</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="category"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                                        <input type="date" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    </div>
                                    <div>
                                        <label for="item-weight" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">No.Hp</label>
                                        <input type="number" name="item-weight" id="item-weight"
                                            class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            required>
                                    </div>
                                    <div>
                                        <label for="item-weight" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                                        <input type="text" name="" id=""
                                            class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            required>
                                    </div>
                                    <div>
                                        <label for="item-weight" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Alamat Email</label>
                                        <input type="email" name="item-weight" id="item-weight"
                                            class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                    </div>
                                </div>
                                {{-- <button type="submit"
                                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                    Add product
                                </button> --}}

                            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

                            <h1 class="font-bold text-2xl leading-8 font-[Georama]">Administrasi</h1>
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-6">
                                    <div class="w-full">
                                        <label for="jenis_kelamin" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Kewarganegaraan</label>
                                        <select id="category"
                                            class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Pilih Kewarganegaraan</option>
                                            <option value="laki-laki">Indonesia</option>
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">No. KK</label>
                                        <input type="number" name="item-weight" id="item-weight"
                                            class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            required>
                                    </div>
                                    <div>
                                        <label for="category" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">NIK / No. KTP</label>
                                      <input type="number" name="item-weight" id="item-weight"
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        required>
                                    </div>
                                    <div>
                                        <label for="item-weight"
                                            class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Status</label>
                                        <select id="category"
                                            class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Pilih Status</option>
                                            <option value="laki-laki">Sudah Menikah</option>
                                            <option value="laki-laki">Belum Menikah</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="item-weight" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Paspor</label>
                                       <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="file_input" type="file">
                                    </div>
                                    <div>
                                        <label for="item-weight" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Ukuran Jas Almamater</label>
                                        <select id="category"
                                            class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Pilih Ukuran</option>
                                            <option value="laki-laki">S</option>
                                            <option value="laki-laki">M</option>
                                            <option value="laki-laki">L</option>
                                            <option value="laki-laki">XL</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <button type="submit"
                                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                    Add product
                                </button> --}}
                            </form>


                </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <h1 class="font-bold text-2xl leading-8 font-[Georama]">Domisili</h1>
                        <form action="">
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-6">
                                <div class="w-full">
                                    <label for="jenis_kelamin"
                                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Provinsi</label>
                                        <input type="text" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-50">
                                </div>
                                <div class="w-full">
                                    <label for="jenis_kelamin"
                                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Kabupaten / Kota</label>
                                        <input type="text" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-50">
                                </div>
                                <div class="w-full">
                                    <label for="jenis_kelamin"
                                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Kecamatan</label>
                                        <input type="text" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-50">
                                </div>
                                <div class="w-full">
                                    <label for="jenis_kelamin"
                                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Desa / Kelurahan</label>
                                        <input type="text" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-50">
                                </div>
                                <div class="w-full">
                                    <label for="jenis_kelamin"
                                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Dusun</label>
                                        <input type="text" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-50">
                                </div>
                                <div class="w-full">
                                    <label for="jenis_kelamin"
                                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">RT dan RW</label>
                                        <input type="text" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-50">
                                </div>
                                <div class="w-full">
                                    <label for="jenis_kelamin"
                                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Kode Post</label>
                                        <input type="text" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-50">
                                </div>
                                <div class="w-full">
                                    <label for="jenis_kelamin"
                                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Alamat</label>
                                        <input type="text" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-50">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <h1 class="font-bold text-2xl leading-8 font-[Georama]">Data Ayah</h1>
                        <form action="#">
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-8 mt-6">
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nama Ayah Kandung</label>
                                    <input type="text" name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Status Kekerabatan</label>
                                    <select name="" id="" class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="">Ayah Kandung</option>
                                        <option value="">Ayah Tiri</option>
                                        <option value="">Ayah Angkat</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">NIK</label>
                                    <input type="number" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Alamat</label>
                                    <input type="text" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenjang Pendidikan</label>
                                    <select name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="">SD</option>
                                        <option value="">SMP</option>
                                        <option value="">SMA</option>
                                        <option value="">Sarjana</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tempat Lahir Sesuai KTP</label>
                                    <input type="text" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                                    <input type="text" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tanggal Lahir Sesuai KTP</label>
                                    <input type="date" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenjang Pendidikan</label>
                                    <select name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="">Pilih Penghasilan</option>
                                        <option value="">3 - 5 jt perbulan</option>
                                        <option value="">3 - 5 jt perbulan</option>
                                        <option value="">3 - 5 jt perbulan</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                                    <input type="number" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Status</label>
                                    <input type="number" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                            </div>
                            {{-- <button type="submit"
                                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Add product
                            </button> --}}
                        
                            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                        
                            <h1 class="font-bold text-2xl leading-8 font-[Georama]">Data Ibu</h1>
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-8 mt-6">
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nama Ayah Kandung</label>
                                    <input type="text" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Status Kekerabatan</label>
                                    <select name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="">Ayah Kandung</option>
                                        <option value="">Ayah Tiri</option>
                                        <option value="">Ayah Angkat</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">NIK</label>
                                    <input type="number" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Alamat</label>
                                    <input type="text" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenjang Pendidikan</label>
                                    <select name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="">SD</option>
                                        <option value="">SMP</option>
                                        <option value="">SMA</option>
                                        <option value="">Sarjana</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tempat Lahir Sesuai
                                        KTP</label>
                                    <input type="text" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                                    <input type="text" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tanggal Lahir Sesuai
                                        KTP</label>
                                    <input type="date" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenjang Pendidikan</label>
                                    <select name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="">Pilih Penghasilan</option>
                                        <option value="">3 - 5 jt perbulan</option>
                                        <option value="">3 - 5 jt perbulan</option>
                                        <option value="">3 - 5 jt perbulan</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                                    <input type="number" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Status</label>
                                    <input type="number" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="w-full">
                                    <label for="" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="" id=""
                                        class="bg-[#F0F7FD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                            </div>
                            {{-- <button type="submit"
                                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Add product
                            </button> --}}
                        </form>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
            </div>
       </div>
    </div>
@stop