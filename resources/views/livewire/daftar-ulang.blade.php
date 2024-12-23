  <div class="grid grid-cols-5 gap-4 mt-4">
      <div class="bg-white p-4 border  w-full  rounded-lg col-span-3">
          <div class="flex justify-between">
              <h2 class="text-2xl text-[#001B36] font-bold">Pendaftaran Ulang
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
              <div class="flex items-center justify-between mt-4 border-dotted border-2 border-black p-4 h-fit">

                  <h2 class="text-lg font-semibold text-gray-700">Jalur Reguler</h2>

                  <a href=""
                      class="p-2 bg-[#004680] text-white flex justify-center items-center border rounded-lg text-sm ">Pilih
                      Jalur</a>
              </div>

              <div class="flex items-center justify-between mt-4 border-dotted border-2 border-black p-4">

                  <h2 class="text-lg font-semibold text-gray-700">Jalur Alih Jenjang</h2>

                  <a href=""
                      class="p-2 bg-[#004680] text-white flex justify-center items-center border rounded-lg text-sm ">Pilih
                      Jalur</a>
              </div>

              <div class="flex items-center justify-between mt-4 border-dotted border-2 border-black p-4">

                  <h2 class="text-lg font-semibold text-gray-700">Jalur Transfer</h2>

                  <a href=""
                      class="p-2 bg-[#004680] text-white flex justify-center items-center border rounded-lg text-sm ">Pilih
                      Jalur</a>
              </div>
          @else
              <div class="w-full rounded-lg col-span-2">
                  <div class="flex justify-between items-center">
                      <span class="text-left font-normal text-base text-[#17A35F] mt-6">Biaya Pendaftaran</span>
                      <span class="text-right font-normal text-base text-[#F44336] mt-6">IDR 15.000.000</span>
                  </div>
                  <div class="flex justify-between items-center -mt-5">
                      <span class="text-left font-normal text-xl text-black mt-6">Biaya DPP</span>
                      <span class="text-right font-normal text-base text-black mt-6">IDR 5.000.000</span>
                  </div>

                  <hr class="mt-2">

                  <div class="flex justify-between items-center -mt-5">
                      <span class="text-left font-normal text-xl text-black mt-6">Biaya UKT</span>
                      <span class="text-right font-normal text-base text-black mt-6">IDR 5.500.000</span>
                  </div>

                  <hr class="mt-2">

                  <div class="flex justify-between items-center -mt-5">
                      <span class="text-left font-normal text-xl text-black mt-6">Biaya PMB</span>
                      <span class="text-right font-normal text-base text-black mt-6">IDR 1.500.000</span>
                  </div>

                  <div class="flex justify-between items-center -mt-5">
                      <span class="text-left font-normal text-xl text-[#004680] mt-6">Total Biaya</span>
                      <span class="text-right font-normal text-base text-[#EB9A3C] mt-6">IDR 16.150.000</span>
                  </div>

                  <hr class=" mt-2">

                  <h2 class="text-2xl text-[#001B36] font-bold mt-4 mb-4">Pilih Skema Pembayaran</h2>

                  <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg mb-4 shadow-sm">
                      <div class="flex items-center">
                          <span class="text-gray-700 font-medium text-xl p-2">Tanpa Cicilan</span>
                      </div>
                      <input type="radio" name="metode_pembayaran" class="form-radio text-green-500 p-3" checked />
                  </div>

                  <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg mb-2 shadow-sm">
                      <div class="flex items-center">
                          <span class="text-gray-700 font-medium text-xl p-2">Dengan Cicilan</span>
                      </div>
                      <input type="radio" name="metode_pembayaran" class="form-radio text-green-500 p-3" checked />
                  </div>

                  <h2 class="text-2xl text-[#001B36] font-bold mt-4 mb-4">Pilih Metode Pembayaran</h2>

                  <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg mb-4 mt-4 shadow-sm">
                      <div class="flex items-center">
                          <img src="{{ asset('assets/images/pmb/bni.png') }}" alt="BNI Logo"
                              class="w-11 object-contain mr-3" />
                          <span class="text-gray-700 font-medium text-xl p-2">BNI Virtual Account</span>
                      </div>
                      <input type="radio" name="metode_pembayaran" class="form-radio text-green-500 p-3" checked />
                  </div>

                  <div class="flex items-center justify-between bg-gray-100 p-4 rounded-lg mb-2 shadow-sm">
                      <div class="flex items-center">
                          <span class="text-gray-700 font-medium text-xl p-2">Pembayaran Cash</span>
                      </div>
                      <input type="radio" name="metode_pembayaran" class="form-radio text-green-500 p-3" checked />
                  </div>

                  <div
                      class="rounded-lg shadow-sm mt-4 w-full bg-blue-800 text-white py-2 font-medium hover:bg-blue-900">
                      <a href="" class="text-center align-middle p-1 flex justify-center items-center">
                          Lanjutkan
                      </a>
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
  </div>
