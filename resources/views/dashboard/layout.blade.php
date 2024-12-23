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
            </div>
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
                    {{-- <div class="flex justify-start bg-[#004680]">
                       <div class="icon-[material-symbols--home] text-2xl align-middle mt-3 text-white p-2"></div>
                        <a class=" text-white w-full inline-block p-3 rounded-md" href="/">
                            Dashboard
                        </a>
                    </div> --}}
                    <a class="bg-[#004680] text-white w-full inline-flex items-center gap-3 p-3 rounded-md"
                        href="/">
                        <span class="icon-[mdi--arrow-left] text-xl text-white"></span>
                        Dashboard
                        </a>
                    <a class=" w-full inline-block p-3 rounded-md">
                        Application
                    </a>
                    <a class=" w-full inline-block p-3 rounded-md">
                        Profile
                    </a>
                    <a class=" w-full inline-block p-3 rounded-md">
                        Payment
                    </a>
                    <a class=" w-full inline-block p-3 rounded-md">
                        Frequently Ask Question
                    </a>
                    <a class=" w-full inline-block p-3 rounded-md">
                        Logout
                    </a>
                </div>
            </div>
            @yield('container')
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
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @yield('footer')

    @stack('scripts')
</body>

</html>
