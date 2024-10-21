<!-- resources/views/index.blade.php -->
@extends('welcome')

@section('title', 'User Template')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow mb-6">
            <h1 class="text-2xl font-bold">Template Message</h1>
            <div class="flex items-center">
                <div class="ml-6 flex items-center">
                    <img src="{{ asset('images/default.png') }}" alt="Profile" class="w-10 h-10 rounded-full">
                    <span class="ml-2">Hi Admin!</span>
                </div>
            </div>
        </header>

        <div class="flex justify-between items-center mb-5">
            <h2 class="text-2xl font-bold">Promo</h2>
            <button class="bg-black text-white px-4 py-2 rounded-lg" onclick="addTemplate()">+ Tambah Template</button>
        </div>


        <!-- Template Section -->
        <div class="flex flex-wrap justify-center">
            <!-- Template 1 Informasi Promo -->
            <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/3 mb-10 p-4">
                <div class="max-w-xs p-4 bg-white border rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold text-center mb-4">Informasi Promo</h2>
                    <img src="{{ asset('images/bigsale.png') }}" alt="Big Sale" class="w-full rounded-lg">
                    <div class="p-4 bg-gray-100 rounded-lg my-4">
                        <p>Hallo Jennie,</p>
                        <p>Bagaimana kabar Anda?</p>
                        <p>Ada promo menarik spesial hanya untuk Anda!</p> <br>
                        <p>Anda dapat menikmati spesial discount 20% untuk periode transaksi bulan ini.</p> <br>
                        <p>Jangan lewatkan kesempatan ini atau promo akan hangus. Click button di bawah ini untuk
                            informasi lebih lanjut</p>
                    </div>
                    <div class="flex flex-col space-y-2 mt-4">
                        <button
                            class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                            style="pointer-events: none;">USE DISCOUNT NOW!</button>

                        <div class="flex justify-between items-center mt-2">
                            <div class="flex space-x-2">
                                <button
                                    class="flex items-center justify-center w-12 h-12 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-1 12a2 2 0 01-2 2H8a2 2 0 01-2-2L5 7M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3M4 7h16" />
                                    </svg>
                                </button>
                                <button onclick="editTemplate()"
                                    class="flex items-center justify-center w-12 h-12 bg-green-500 text-white rounded-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 4H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-4M16 2l6 6M8 12h4m0 0v4m0-4l10-10" />
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="w-20 px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300 focus:ring-opacity-75">
                                Use
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Template 2: Promo Produk (Tas) -->
            <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/3 mb-10 p-4">
                <div class="max-w-xs p-4 bg-white border rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold text-center mb-4">Promo Produk</h2>
                    <img src="{{ asset('images/bigsale.png') }}" alt="Big Sale" class="w-full rounded-lg">
                    <div class="p-4 bg-gray-100 rounded-lg my-4">
                        <p>Hallo Jennie,</p>
                        <p>Bagaimana kabar Anda?</p>
                        <p>Ada promo eksklusif untuk Anda!</p> <br>
                        <p>Dapatkan tas favorit Anda dengan potongan harga hingga 25% hanya bulan ini.</p> <br>
                        <p>Segera manfaatkan kesempatan ini sebelum promonya berakhir. Click button di bawah ini untuk
                            informasi lebih lanjut.</p>
                    </div>
                    <div class="flex flex-col space-y-2 mt-4">
                        <button
                            class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                            style="pointer-events: none;">BUY NOW!</button>
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex space-x-2">
                                <button
                                    class="flex items-center justify-center w-12 h-12 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-1 12a2 2 0 01-2 2H8a2 2 0 01-2-2L5 7M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3M4 7h16" />
                                    </svg>
                                </button>
                                <button onclick="editTemplate()"
                                    class="flex items-center justify-center w-12 h-12 bg-green-500 text-white rounded-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 4H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-4M16 2l6 6M8 12h4m0 0v4m0-4l10-10" />
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="w-20 px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300 focus:ring-opacity-75">
                                Use
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Template 3: Promo Pengguna Baru -->
            <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/3 mb-10 p-4">
                <div class="max-w-xs p-4 bg-white border rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold text-center mb-4">Promo Pengguna Baru</h2>
                    <img src="{{ asset('images/bigsale.png') }}" alt="Big Sale" class="w-full rounded-lg">

                    <div class="p-4 bg-gray-100 rounded-lg my-4">
                        <p>Hallo Jennie,</p>
                        <p>Bagaimana kabar Anda?</p>
                        <p>Selamat datang! Kami punya sesuatu yang spesial hanya untuk Anda.</p> <br>
                        <p>Nikmati diskon 30% untuk pembelian pertama Anda sebagai pengguna baru di toko kami.</p> <br>
                        <p>Jangan lewatkan kesempatan ini, klik tombol di bawah untuk memulai belanja sekarang.</p>
                    </div>
                    <div class="flex flex-col space-y-2 mt-4">
                        <button
                            class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                            style="pointer-events: none;">BUY NOW!</button>
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex space-x-2">
                                <button
                                    class="flex items-center justify-center w-12 h-12 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-1 12a2 2 0 01-2 2H8a2 2 0 01-2-2L5 7M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3M4 7h16" />
                                    </svg>
                                </button>
                                <button onclick="editTemplate()"
                                    class="flex items-center justify-center w-12 h-12 bg-green-500 text-white rounded-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 4H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-4M16 2l6 6M8 12h4m0 0v4m0-4l10-10" />
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="w-20 px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300 focus:ring-opacity-75">
                                Use
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Template 4: Pengenalan Produk Baru (Sepatu) -->
            <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/3 p-4">
                <div class="max-w-xs p-4 bg-white border rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold text-center mb-4">Pengenalan Produk Baru</h2>
                    <img src="{{ asset('images/bigsale.png') }}" alt="Big Sale" class="w-full rounded-lg">
                    <div class="p-4 bg-gray-100 rounded-lg my-4">
                        <p>Hallo Jennie,</p>
                        <p>Bagaimana kabar Anda?</p>
                        <p>Kami sangat senang memperkenalkan produk terbaru kami kepada Anda!</p> <br>
                        <p>Temukan koleksi sepatu terbaru kami dengan desain modern dan kenyamanan yang luar biasa.</p>
                        <br>
                        <p>Jangan lewatkan kesempatan untuk menjadi yang pertama memilikinya. Click button di bawah ini
                            untuk informasi lebih lanjut.</p>
                    </div>
                    <div class="flex flex-col space-y-2 mt-4">
                        <button
                            class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                            style="pointer-events: none;">CHECK NOW!</button>
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex space-x-2">
                                <button
                                    class="flex items-center justify-center w-12 h-12 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-1 12a2 2 0 01-2 2H8a2 2 0 01-2-2L5 7M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3M4 7h16" />
                                    </svg>
                                </button>
                                <button onclick="editTemplate()"
                                    class="flex items-center justify-center w-12 h-12 bg-green-500 text-white rounded-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 4H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-4M16 2l6 6M8 12h4m0 0v4m0-4l10-10" />
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="w-20 px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300 focus:ring-opacity-75">
                                Use
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Template 5: Informasi Maintenance (Toko) -->
            <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/3 p-4">
                <div class="max-w-xs p-4 bg-white border rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold text-center mb-4">Informasi Maintenance</h2>
                    <img src="{{ asset('images/bigsale.png') }}" alt="Big Sale" class="w-full rounded-lg">
                    <div class="p-4 bg-gray-100 rounded-lg my-4">
                        <p>Hallo Jennie,</p>
                        <p>Bagaimana kabar Anda?</p>
                        <p>Kami ingin memberitahukan bahwa toko kami akan mengalami maintenance.</p> <br>
                        <p>Maintenance akan berlangsung pada tanggal 15 Agustus dari pukul 10:00 hingga 14:00. Mohon
                            maaf atas ketidaknyamanannya.</p> <br>
                        <p>Untuk informasi lebih lanjut, silakan klik tombol di bawah ini.</p>
                    </div>
                    <div class="flex flex-col space-y-2 mt-4">
                        <button
                            class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                            style="pointer-events: none;">CHECK COUNTDOWN</button>
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex space-x-2">
                                <button
                                    class="flex items-center justify-center w-12 h-12 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-1 12a2 2 0 01-2 2H8a2 2 0 01-2-2L5 7M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3M4 7h16" />
                                    </svg>
                                </button>
                                <button onclick="editTemplate()"
                                    class="flex items-center justify-center w-12 h-12 bg-green-500 text-white rounded-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 4H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-4M16 2l6 6M8 12h4m0 0v4m0-4l10-10" />
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="w-20 px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300 focus:ring-opacity-75">
                                Use
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Template 6: Informasi Produk Best Seller (Ransel Merk Puma) -->
            <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/3 p-4">
                <div class="max-w-xs p-4 bg-white border rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold text-center mb-4">Informasi Produk Best Seller</h2>
                    <img src="{{ asset('images/bigsale.png') }}" alt="Big Sale" class="w-full rounded-lg">
                    <div class="p-4 bg-gray-100 rounded-lg my-4">
                        <p>Hallo Jennie,</p>
                        <p>Bagaimana kabar Anda?</p>
                        <p>Kami punya kabar baik untuk Anda!</p> <br>
                        <p>Ransel merk Puma, produk best seller kami, kembali tersedia. Jangan lewatkan kesempatan untuk
                            memilikinya.</p> <br>
                        <p>Click button di bawah ini untuk melakukan pembelian sekarang sebelum kehabisan.</p>
                    </div>
                    <div class="flex flex-col space-y-2 mt-4">
                        <button
                            class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                            style="pointer-events: none;">BUY NOW!</button>
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex space-x-2">
                                <button
                                    class="flex items-center justify-center w-12 h-12 bg-red-500 text-white rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-1 12a2 2 0 01-2 2H8a2 2 0 01-2-2L5 7M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3M4 7h16" />
                                    </svg>
                                </button>
                                <button
                                    class="flex items-center justify-center w-12 h-12 bg-green-500 text-white rounded-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75"
                                    onclick="editTemplate()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 4H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-4M16 2l6 6M8 12h4m0 0v4m0-4l10-10" />
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="w-20 px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300 focus:ring-opacity-75">
                                Use
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Tambah Template -->
        <div id="tambahMsg" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h3 class="text-lg font-semibold mb-4 text-center">Tambah Template Message</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Template</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Nama Template">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Isi Tombol</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Isi Tombol">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Isi Pesan</label>
                        <textarea class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" rows="4" placeholder="Isi Pesan"></textarea>
                    </div>
                    <div class="flex items-center">
                        <label class="block text-sm font-medium text-gray-700 mr-4">Gambar Template</label>
                        <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-2">
                            <img src="https://via.placeholder.com/100" alt="Gambar Template" id="photo-preview"
                                class="w-24 h-24 rounded-full">
                        </div>
                        <button class="bg-black text-white py-2 px-4 rounded ml-2"
                            onclick="document.getElementById('photo-input').click()">Pilih Gambar</button>
                        <input type="file" id="photo-input" class="hidden" onchange="previewPhoto(event)">
                    </div>
                </div>
                <div class="mt-6 flex justify-center">
                    <button class="bg-green-600 text-white py-2 px-4 rounded mr-4" onclick="submitProject()">Tambah
                        Template</button>
                    <button class="bg-red-600 text-white py-2 px-4 rounded" onclick="cancelProject()">Batal</button>
                </div>
            </div>
        </div>

        <!-- Edit Template -->
        <div id="editMsg" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h3 class="text-lg font-semibold mb-4 text-center">Edit Template Message</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Template</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Informasi Promo">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Isi Tombol</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="USE DISCOUNT NOW!">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Isi Pesan</label>
                        <textarea class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" rows="5" cols="30"
                            placeholder="Hallo Jennie,&#10;Bagaimana kabar Anda?&#10;Kami punya kabar baik untuk Anda!&#10;Ransel merk Puma, produk best seller kami, kembali tersedia. Jangan lewatkan kesempatan untuk memilikinya.&#10;Click button di bawah ini untuk melakukan pembelian sekarang sebelum kehabisan."></textarea>
                    </div>
                    <div class="flex items-center">
                        <label class="block text-sm font-medium text-gray-700 mr-4">Gambar Template</label>
                        <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-2">
                            <img src="{{ asset('images/bigsale.png') }}" alt="Gambar Template" id="photo-preview"
                                class="w-24 h-24 rounded-full">
                        </div>
                        <button class="bg-black text-white py-2 px-4 rounded ml-2"
                            onclick="document.getElementById('photo-input').click()">Pilih Gambar</button>
                        <input type="file" id="photo-input" class="hidden" onchange="previewPhoto(event)">
                    </div>
                </div>
                <div class="mt-6 flex justify-center">
                    <button class="bg-green-600 text-white py-2 px-4 rounded mr-4" onclick="submitEdit()">Edit
                        Template</button>
                    <button class="bg-red-600 text-white py-2 px-4 rounded" onclick="cancelEdit()">Batal</button>
                </div>
            </div>
        </div>

        <script>
            function addTemplate() {
                document.getElementById('tambahMsg').classList.toggle('hidden');
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
                addTemplate();
                resetPhoto();
            }

            function submitProject() {
                addTemplate();
                resetPhoto();
            }

            function editTemplate() {
                document.getElementById('editMsg').classList.toggle('hidden');
            }

            function cancelEdit() {
                editTemplate();
            }

            function submitEdit() {
                editTemplate();
            }
        </script>
    </div>
    </div>
@endsection
