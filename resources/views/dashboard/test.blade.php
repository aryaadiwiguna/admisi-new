<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav class="bg-black border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/">
                <img src="{{ asset('assets/images/primakara-university.webp') }}" class="h-9" />
            </a>
            <div class="flex items-center  md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-white gap-3 py-2 px-3 rounded-full  md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">

                    <img src="{{ asset('assets/images/user-dropdown/user-icon.svg') }}" class="h-6" />
                    <img src="{{ asset('assets/images/user-dropdown/collapse-icon.svg') }}" class="h-6" />
                    {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo"> --}}
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
                {{-- <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button> --}}
            </div>
            {{-- <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </nav>


    <div>

    </div>

    <main class="max-w-screen-xl px-4 mx-auto my-8">
        <div class="grid grid-cols-4 gap-3">
            <div class="w-full space-y-4" id="sidebar">
                <div class="w-full p-5 flex gap-4 rounded-lg border">
                    <img src="{{ asset('assets/images/user-dropdown/user-icon.svg') }}" class="h-12" />

                    <div class="space-y-1">
                        <p class="font-[Georama] text-base font-medium">
                            I Kadek Adi Gilang Pratama
                        </p>
                        <p class="text-[#6B7B8A] text-sm ">
                            Calon Mahasiswa Primakara angkatan 2025
                        </p>
                    </div>
                </div>
                <div class="w-full p-5 rounded-lg border space-y-3 font-[Georama] font-medium">
                    {{-- Ketika active --}}
                    <a class="bg-[#004680] text-white w-full inline-block p-3 rounded-md" href="/">
                        Dashboard
                    </a>
                    <a class=" w-full inline-block p-3 rounded-md">
                        Application
                    </a>
                    <a class=" w-full inline-block p-3 rounded-md">
                        Profile
                    </a>
                    <a class=" w-full inline-block p-3 rounded-md">
                        Frequently Ask Question
                    </a>
                    <a class=" w-full inline-block p-3 rounded-md">
                        Logout
                    </a>
                </div>
            </div>
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
                        <div class="border rounded-lg h-72"></div>
                    </div>
                    <div class="border rounded-lg h-96"></div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <nav class="bg-black border-white-200 dark:bg-gray-900 py-2 px-4">
            <div class="max-w-screen-xl px-4 flex flex-wrap items-center justify-between mx-auto p-2">
                <p class="text-white">Copyright © 2024 <a href="https://dti.primakara.ac.id/" target="_blank">DTI
                        Universitas Primakara </a> </p>
                <p class="text-white">Made with <span class="text-red-500">❤️</span>
                </p>
            </div>
        </nav>
    </footer>
</body>

</html>
