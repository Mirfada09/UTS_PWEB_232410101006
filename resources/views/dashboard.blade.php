@extends('layout.app')

@section('content')
<div class="flex flex-col items-center justify-center bg-[#F4EBDC] px-4 relative overflow-hidden">
    
    <div class="absolute top-4 left-4 text-3xl">🍔</div>
    <div class="absolute top-10 left-10 text-2xl">🥤</div>

    <div class="absolute top-4 right-4 text-3xl">⭐</div>
    <div class="absolute top-12 right-10 text-2xl">🎯</div>

    <div class="absolute bottom-4 left-4 text-3xl">📚</div>
    <div class="absolute bottom-12 left-10 text-2xl">🧠</div>

    <div class="absolute bottom-4 right-4 text-3xl">🚀</div>
    <div class="absolute bottom-12 right-10 text-2xl">🎮</div>

    <div class="absolute top-[50%] left-4 text-2xl">💡</div>
    <div class="absolute top-[55%] right-4 text-2xl">🔔</div>

    <div class="absolute top-2 left-[45%] text-2xl">🎉</div>

    <div class="absolute top-[30%] left-[30%] text-6xl opacity-10 rotate-12">🧁</div>
    <div class="absolute top-[60%] right-[25%] text-6xl opacity-10 -rotate-12">🍩</div>

    <div class="bg-white shadow-xl rounded-xl p-8 max-w-xl w-full text-center border border-[#FF8731] relative z-10">
        <h1 class="text-4xl font-extrabold text-[#FF8731] mb-4">Selamat Datang di Dashboard!</h1>
        <p class="text-2xl text-[#A8401A]">Halo, <span class="font-semibold">{{ session('name') }}</span> 👋</p>
        <p class="text-gray-600 mt-2">Kamu berhasil masuk ke sistem.</p>

        <div class="mt-6">
            <a href="{{ route('login') }}"
               class="inline-block bg-[#FF8731] text-white px-6 py-2 rounded-lg hover:bg-orange-500 transition">
                Keluar
            </a>
        </div>
    </div>
</div>
@endsection
