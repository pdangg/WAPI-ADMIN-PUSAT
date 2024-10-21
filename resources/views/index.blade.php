<!-- resources/views/index.blade.php -->
@extends('welcome')

@section('title', 'Dashboard')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow mb-6">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <div class="flex items-center">
                <div class="ml-6 flex items-center">
                    <img src="{{ asset('images/default.png') }}" alt="Profile" class="w-10 h-10 rounded-full">
                    <span class="ml-2">Hi Admin!</span>
                </div>
            </div>
        </header>


    </div>
    </div>
    </div>
@endsection
