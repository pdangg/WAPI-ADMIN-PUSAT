@extends('welcome')

@section('title', 'Edit User')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow mb-6">
            <h1 class="text-2xl font-bold">Edit User ID 001</h1>
            <div class="flex items-center">
                <div class="ml-6 flex items-center">
                    <img src="{{ asset('images/default.png') }}" alt="Profile" class="w-10 h-10 rounded-full">
                    <span class="ml-2">Hi Admin!</span>
                </div>
            </div>
        </header>

        <!-- Form -->
        <div class="bg-white p-6 rounded shadow">
            <form class="grid grid-cols-2 gap-6">
                <!-- Left Column -->
                <div>
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700">Nama*</label>
                        <input type="text" id="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        placeholder="Joko Sularso" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email*</label>
                        <input type="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            required placeholder="joko@email.com">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password*</label>
                        <input type="password" id="password" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="*******">
                    </div>
                    <div class="mb-4">
                        <label for="password-confirm" class="block text-gray-700">Konfirmasi Password*</label>
                        <input type="password" id="password-confirm" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="*******">
                    </div>
                    <div class="mb-4">
                        <label for="whatsapp" class="block text-gray-700">No. Handphone/Whatsapp*</label>
                        <input type="tel" id="whatsapp" pattern="[0-9]{11,15}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="08172182718">
                    </div>
                    <div class="mb-4">
                        <label for="facebook" class="block text-gray-700">Akun Facebook*</label>
                        <input type="text" id="facebook" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required placeholder="Jokosularso">
                    </div>
                    <div class="mb-4">
                        <label for="instagram" class="block text-gray-700">Akun Instagram*</label>
                        <input type="text" id="instagram" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required placeholder="joko_sularso">
                    </div>
                    <div class="mb-4">
                        <label for="nama-perusahaan" class="block text-gray-700">Nama Perusahaan</label>
                        <input type="text" id="nama-perusahaan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Joko Corp">
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <div class="mb-4">
                        <label for="date" class="block text-gray-700">Register Date</label>
                        <input type="text" id="register-date" placeholder="6 Juni 2014"> 
                    </div>
                    <div class="mb-4">
                        <label for="credit" class="block text-gray-700">Credit</label>
                        <input type="text" id="credit" placeholder="0"> 
                    </div>
                    <div class="mb-4">
                        <label for="addCredit" class="block text-gray-700">+ Credit</label>
                        <select id="addCredit" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option>5000</option>
                            <!-- Add options for cities based on selected province -->
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="credit-now" class="block text-gray-700">Credit Now</label>
                        <input type="text" id="credit-now" placeholder="5000"> 
                    </div>
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700">Start Date</label>
                            <input type="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label class="block text-gray-700"></label>
                            <input type="time" class="mt-6 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Expired Date</label>
                        <input type="text" value="7 Juli 2024" disabled
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </div>

                <!-- Save Button -->
                <div class="flex justify-end space-x-4 mt-6">
                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded">Simpan</button>
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Batal</button>
                </div>
            </form>
        </div>
    </div>

@endsection
