<!-- resources/views/index.blade.php -->
@extends('welcome')

@section('title', 'Pricelist')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow mb-6">
            <h1 class="text-2xl font-bold">Pricelist</h1>
            <div class="flex items-center">
                <div class="ml-6 flex items-center">
                    <img src="{{ asset('images/default.png') }}" alt="Profile" class="w-10 h-10 rounded-full">
                    <span class="ml-2">Hi Admin!</span>
                </div>
            </div>
        </header>

        <!-- Tambah Data -->
        <div id="tambahData" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h3 class="text-lg font-semibold mb-4 text-center">Tambah Promo</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Credit</label>
                        <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Credit">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Discount (%)</label>
                        <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Discount">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Normal Price</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Normal Price">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Promo Price</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Promo Price">
                    </div>
                    <div class="flex items-center">
                        <label class="block text-sm font-medium text-gray-700 mr-4">Image Promo</label>
                        <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-2">
                            <img src="https://via.placeholder.com/100" alt="Photo Profil" id="photo-preview"
                                class="w-24 h-24 rounded-full">
                        </div>
                        <button class="bg-black text-white py-2 px-4 rounded ml-2"
                            onclick="document.getElementById('photo-input').click()">Pilih Photo</button>
                        <input type="file" id="photo-input" class="hidden" onchange="previewPhoto(event)">
                    </div>
                </div>
                <div class="mt-6 flex justify-center">
                    <button class="bg-green-600 text-white py-2 px-4 rounded mr-4" onclick="submitProject()">Buat
                        Project</button>
                    <button class="bg-red-600 text-white py-2 px-4 rounded" onclick="cancelProject()">Batal</button>
                </div>
            </div>
        </div>

        <div class="w-full mx-auto bg-white p-5 rounded-lg shadow-lg mt-6">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-2xl font-bold">Promo</h2>
                    <button class="bg-black text-white px-4 py-2 rounded-lg" onclick="togglePicture()">+ Tambah Data</button>
            </div>

            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border-b-2 p-2">No</th>
                        <th class="border-b-2 p-2">Credit</th>
                        <th class="border-b-2 p-2">Normal Price</th>
                        <th class="border-b-2 p-2">Discount (%)</th>
                        <th class="border-b-2 p-2">Promo Price</th>
                        <th class="border-b-2 p-2">Promo</th>
                        <th class="border-b-2 p-2">Image Promo</th>
                        <th class="border-b-2 p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">01</td>
                        <td class="border-b p-2 text-center">20000</td>
                        <td class="border-b p-2 text-center">20000</td>
                        <td class="border-b p-2 text-center">10</td>
                        <td class="border-b p-2 text-center">19500</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                        <td class="border-b p-2" style="display: flex; justify-content: center; align-items: center;">
                            <img src="{{ asset('images/promo.png') }}" alt="Image Promo" class="w-20 h-20 rounded-full">
                        </td>
                        <td class="border-b p-2 text-center">

                            <button class="text-green-600 hover:text-green-800" onclick="editPromo()">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>
                            </button>

                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b p-2 text-center">02</td>
                        <td class="border-b p-2 text-center">15000</td>
                        <td class="border-b p-2 text-center">15000</td>
                        <td class="border-b p-2 text-center">10</td>
                        <td class="border-b p-2 text-center">14500</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                        <td class="border-b p-2" style="display: flex; justify-content: center; align-items: center;">
                            <img src="{{ asset('images/promo.png') }}" alt="Image Promo" class="w-20 h-20 rounded-full">
                        </td>
                        <td class="border-b p-2 text-center">
                            <a href="{{ route('welcome') }}">
                                <button class="text-green-600 hover:text-green-800">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                    </svg>
                                </button>
                            </a>

                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">03</td>
                        <td class="border-b p-2 text-center">10000</td>
                        <td class="border-b p-2 text-center">10000</td>
                        <td class="border-b p-2 text-center">10</td>
                        <td class="border-b p-2 text-center">9500</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                        <td class="border-b p-2" style="display: flex; justify-content: center; align-items: center;">
                            <img src="{{ asset('images/promo.png') }}" alt="Image Promo" class="w-20 h-20 rounded-full">
                        </td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>
                            </button>

                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b p-2 text-center">04</td>
                        <td class="border-b p-2 text-center">5000</td>
                        <td class="border-b p-2 text-center">5000</td>
                        <td class="border-b p-2 text-center">10</td>
                        <td class="border-b p-2 text-center">4500</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                        <td class="border-b p-2" style="display: flex; justify-content: center; align-items: center;">
                            <img src="{{ asset('images/promo.png') }}" alt="Image Promo" class="w-20 h-20 rounded-full">
                        </td>
                        <td class="border-b p-2 text-center">
                            <a href="{{ route('welcome') }}">
                                <button class="text-green-600 hover:text-green-800">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                    </svg>
                                </button>
                            </a>

                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">05</td>
                        <td class="border-b p-2 text-center">7000</td>
                        <td class="border-b p-2 text-center">7000</td>
                        <td class="border-b p-2 text-center">0</td>
                        <td class="border-b p-2 text-center">7000</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-gray-600 hover:text-gray-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                        <td class="border-b p-2"></td>
                        <td class="border-b p-2 text-center">
                            <a href="{{ route('welcome') }}">
                                <button class="text-green-600 hover:text-green-800">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                    </svg>
                                </button>
                            </a>

                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Edit Promo -->
        <div id="editData" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h3 class="text-lg font-semibold mb-4 text-center">Edit Promo</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Credit</label>
                        <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="20000">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Discount (%)</label>
                        <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="10">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Normal Price</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="20000">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Promo Price</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="19500">
                    </div>
                    <div class="flex items-center">
                        <label class="block text-sm font-medium text-gray-700 mr-4">Image Promo</label>
                        <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-2">
                            <img src="{{ asset('images/promo.png') }}" alt="Image Promo" id="photo-preview"
                                class="w-24 h-24 rounded-full">
                        </div>
                        <button class="bg-black text-white py-2 px-4 rounded ml-2"
                            onclick="document.getElementById('photo-input').click()">Pilih Photo</button>
                        <input type="file" id="photo-input" class="hidden" onchange="previewPhoto(event)">
                    </div>
                </div>
                <div class="mt-6 flex justify-center">
                    <button class="bg-green-600 text-white py-2 px-4 rounded mr-4" onclick="submitEdit()">Buat
                        Project</button>
                    <button class="bg-red-600 text-white py-2 px-4 rounded" onclick="cancelEdit()">Batal</button>
                </div>
            </div>
        </div>

        
    </div>

    <script>
        function togglePicture() {
            document.getElementById('tambahData').classList.toggle('hidden');
        }
    
        function previewPhoto(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('photo-preview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    
        function resetPhoto() {
            document.getElementById('photo-preview').src = "https://via.placeholder.com/100"; 
            document.getElementById('photo-input').value = ""; 
        }
    
        function cancelProject() {
            togglePicture(); 
            resetPhoto();    
        }

        function submitProject() {
            togglePicture(); 
            resetPhoto();    
        }

        function editPromo() {
            document.getElementById('editData').classList.toggle('hidden');
        }

        function cancelEdit() {
            editPromo(); 
        }

        function submitEdit() {
            editPromo(); 
        }
    </script>

    </div>
@endsection
