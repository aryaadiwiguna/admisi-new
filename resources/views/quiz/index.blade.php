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

    <nav class="bg-black border-white-200 dark:bg-gray-900 px-4">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/images/primakara-university.webp') }}" class="h-10"
                    alt="Primakara University Logo" />
            </a>
            <div class="bg-white rounded-full my-4">
                <button type="button" class="flex text-sm p-3 bg-white-800 rounded-full md:me-0" id="user-menu-button"
                    aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('assets/images/profile.png') }}"
                        alt="user photo">
                    <img class="w-8 h-8 rounded-full" src="{{ asset('assets/images/ep_menu.png') }}" alt="user photo">
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

    <div class="main-wrapper w-full">
        <main class="max-w-screen-xl px-4 my-8 mx-auto">
            <div class="grid grid-cols-8 gap-3">
                <div class="w-full border col-span-6 rounded-lg p-5">
                    <p class="text-[#6B7B8A] text-sm font-semibold">Test Intelligent Quotient</p>
                    <div class="flex justify-between mt-3">
                        <h1 class="text-2xl font-medium text-[#6B7B8A] font-[Georama]">Question 15</h1>
                        <button
                            class="bg-[#FAE7D0] font-medium flex gap-2 rounded-lg text-[#EB9A3C] border border-[#EB9A3C] p-2 px-3">
                            <span class="icon-[mingcute--flag-4-fill]"></span>
                            <span class="text-xs">Unflag Question</span>
                        </button>
                    </div>

                    <hr class="my-4" />

                    <p class="font-bold mb-5">Apa yang dimaksud dengan ruang vektor dalam konteks aljabar linear?</p>


                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ruang geometris dalam tiga
                            dimensi</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ruang yang terdiri dari
                            himpunan angka riil</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ruang yang terdiri dari
                            himpunan vektor-vektor dengan operasi penjumlahan dan perkalian skalar</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ruang yang terdiri dari
                            himpunan matriks</label>
                    </div>

                    <div class="flex mt-4">
                        <button
                            class="text-[#004680] border border-[#004680] font-[Georama] focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none flex items-center">
                            <span class="icon-[mdi--chevron-left] text-2xl"></span>
                            Previous Question
                        </button>
                        <button
                            class="text-white bg-[#004680] hover:bg-blue-800 font-[Georama] focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none flex items-center">Next
                            Question
                            <span class="icon-[mdi--chevron-right] text-2xl"></span>
                        </button>
                    </div>
                </div>
                <div class="border w-full col-span-2 rounded-lg px-8 py-4">
                    <div class="border rounded-full text-center border-[#6B7B8A] bg-[#333333]/20 p-1">
                        <span class="font-bold text-[#6B7B8A]">
                            00:29:59
                        </span>
                    </div>
                    <div class="grid grid-cols-5 gap-3 mt-5">
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">1</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">2</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">3</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">4</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">6</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">7</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">8</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">9</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">10</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">11</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">12</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">13</div>
                        <div class="bg-[#17A35F] rounded-md h-9 flex justify-center items-center text-white">14</div>
                        <div class="bg-[#EB9A3C] rounded-md h-9 flex justify-center items-center text-white">15</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">16</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">17</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">18</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">19</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">20</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">21</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">22</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">23</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">24</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">25</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">26</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">27</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">28</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">29</div>
                        <div class="bg-[#F3F4F5] rounded-md h-9 flex justify-center items-center">30</div>
                    </div>
                    <button
                        class="mt-4 w-full text-center text-white bg-[#004680] hover:bg-blue-800 font-[Georama] focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none justify-center flex items-center">Finish
                        Attempt...
                    </button>
                </div>

            </div>

        </main>
    </div>
    {{-- <footer>
        <nav class="bg-black border-white-200 dark:bg-gray-900 px-4">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                <p class="text-white">Copyright © 2024 <a href="https://dti.primakara.ac.id/" target="_blank">DTI
                        Universitas Primakara </a>. </p>
                <p class="text-white">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm"
                        data-feather="heart"></i>
                </p>
            </div>
        </nav>
    </footer> --}}
</body>

</html>
