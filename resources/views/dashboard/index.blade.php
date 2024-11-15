@extends('dashboard.layout')

@section('container')

<div class="col-span-3">
    <div class="w-full h-8 bg-white border rounded-lg min-h-64 flex items-center p-5 bg-no-repeat bg-right-top"
        style="background-image: url({{ asset('assets/images/hero-pmb.svg') }})">
        <div class="max-w-lg">
            <div class="space-y-10">
                <div>
                    <h1 class="text-3xl font-[Georama] font-semibold mb-2">Hai, I Kadek Adi Gilang Pratama
                    </h1>
                    <p class="text-[#6B7B8A]">Selamat datang di portal pendaftaran Universitas Primakara.
                        <br />Berikut
                        adalah
                        informasi pribadi dan
                        status pendaftaran Anda:
                    </p>
                </div>
                <div class="flex gap-6">
                    <div class="flex items-center gap-2">
                        <div class="rounded-full w-10 h-10 bg-[#149fa93d]"></div>
                        <div>
                            <p class="text-xs">Program Studi</p>
                            <p class="text-sm font-semibold">Sistem Informasi</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="rounded-full w-10 h-10 bg-[#149fa93d]"></div>
                        <div>
                            <p class="text-xs">Sistem Kuliah</p>
                            <p class="text-sm font-semibold">Kelas Pagi</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="rounded-full w-10 h-10 bg-[#149fa93d]"></div>
                        <div>
                            <p class="text-xs">Status Pendaftaran</p>
                            <p class="text-sm font-semibold">Tes Masuk</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="grid grid-cols-3 gap-3 mt-4">
        <div class="col-span-2 space-y-3">
            <div class="border rounded-lg p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-[Georama]  text-2xl font-medium mb-2">Mengisi Biodata
                        </h3>
                        <p class="text-[#6B7B8A] text-sm">Pastikan Anda mengunggah semua dokumen</p>
                    </div>
                    <p class="text-base font-[Georama] text-[#17A35F] font-medium">Selesai</p>
                </div>
                <hr class="my-5 border-2 rounded-md" />
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-[Georama]  text-2xl font-medium mb-2">Lakukan Pembayaran
                        </h3>
                        <p class="text-[#6B7B8A] text-sm">Membayaran pendaftaran registrasi</p>
                    </div>
                    <p class="text-base font-[Georama] text-[#17A35F] font-medium">Selesai</p>
                </div>
                <hr class="my-5 border-2 rounded-md" />
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-[Georama]  text-2xl font-medium mb-2">Lakukan Test Masuk
                        </h3>
                        <p class="text-[#6B7B8A] text-sm">Sediakan waktu 120 menit untuk menjawab.</p>
                    </div>
                    <p class="text-base font-[Georama] text-[#149FA9] font-medium">Lanjutkan</p>
                </div>
                <hr class="my-5 border-2 rounded-md" />
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-[Georama]  text-2xl font-medium mb-2">Daftar Ulang
                        </h3>
                        <p class="text-[#6B7B8A] text-sm">Pastikan Anda mengunggah semua dokumen</p>
                    </div>
                    <p class="text-base font-[Georama] text-[#6B7B8A] font-medium">Belum Dibuka</p>
                </div>
            </div>
            <div class="h-auto font-[Georama] mt-10">
                <div id="accordion-collapse" data-accordion="collapse">
                    <h2 id="accordion-collapse-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                            aria-controls="accordion-collapse-body-1">
                            <span class="text-base font-medium text-black">Test masuk apa aja yang ada?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Untuk test sendiri ada test IQ, TKPA, dan
                                DISC</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                            aria-controls="accordion-collapse-body-2">
                            <span class="text-base font-medium text-black">Bagaimana saya tau jika sudah lolos test
                                masuk?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and
                                designed using the
                                Figma software so everything you see in the library has a design equivalent in our Figma
                                file.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out the <a
                                    href="https://flowbite.com/figma/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
                                based on the
                                utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                            aria-controls="accordion-collapse-body-3">
                            <span class="text-base font-medium text-black">Apakah bisa mengubah Program Studi setelah
                                DU?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                                components from
                                Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
                                Another
                                difference is that Flowbite relies on smaller and standalone components, whereas
                                Tailwind UI offers
                                sections of pages.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                                Flowbite,
                                Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from
                                using the best of
                                two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="border rounded-lg h-96"></div> --}}
        <div inline-datepicker></div>
    </div>
</div>
@stop
