  <div class="grid grid-cols-5 gap-4 mt-4">
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
                          class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
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
                          class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
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
                          class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
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
      <div class="border w-full h-auto rounded-lg col-span-2 p-3">
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
          <div>
              <hr>
              <a href="" class="py-4 px-3 bg-[#EEEEEE] flex justify-center items-center border rounded-lg">
                  Lihat Tata Cara Pembayaran
              </a>
          </div>
      </div>
  </div>
