@extends('layout.app')
@section('content') 
<div class="flex justify-center items-center flex-col bg-[#f5eddd]  px-4 mb-2">
    <p class="font-bold text-2xl text-red-500">Profil Akun</p>
    <div class="bg-[#f5eddd] w-full max-w-3xl p-6 md:p-10 rounded-2xl shadow-xl flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0 md:space-x-6">
        
        {{-- Form --}}
        <div class="flex flex-col space-y-4 w-full md:w-[60%]">
            <div>
                <p class="text-gray-800 font-semibold">Nama</p>
                <div class="flex items-center justify-between border p-3 rounded-full">
                    <p class="text-gray-700 text-sm md:text-base">Mirfada Arubba Yoana</p>
                    <img src="{{ asset('img/edit.png') }}" alt="Edit" class="w-4 h-4 cursor-pointer">
                </div>
            </div>

            <div>
                <p class="text-gray-800 font-semibold">Username</p>
                <input type="text" class="w-full px-3 py-2 border rounded-full focus:outline-none" placeholder="Username">
            </div>

            <div>
                <p class="text-gray-800 font-semibold">Password</p>
                <input type="password" class="w-full px-3 py-2 border rounded-full focus:outline-none" value="............">
            </div>

            <div>
                <p class="text-gray-800 font-semibold">Nomor Telepon</p>
                <input type="text" class="w-full px-3 py-2 border rounded-full focus:outline-none" value="+62 823-7674-2341">
            </div>
        </div>

        {{-- Foto --}}
        <div class="w-[130px] h-[130px] rounded-full overflow-hidden flex-shrink-0">
            <img src="{{ asset('img/myfoto.png') }}" alt="Profile" class="object-cover w-full h-full">
        </div>
    </div>
</div>
@endsection
