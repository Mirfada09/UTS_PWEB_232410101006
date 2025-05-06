@extends('layout.app')

@section('content')

<div class="px-3 py-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-items-center">
        @for ($i = 0; $i < 7; $i++)
        <div class="w-[17rem] border-2 flex border-[orange] h-[9rem] rounded-[1rem] shadow-2xl">
            <div class="flex items-center justify-center px-2">
                <img src="{{ asset('img/hamburger.png') }}" alt="Hamburger" class="w-[6rem] h-[6rem] object-contain">
            </div>
            <div class="px-2 py-3">
                <p class="font-bold text-[1.1rem] text-red-500 leading-tight">Whopper JR</p>
                <p class="font-bold text-sm">Rp. 45.454</p>
                <button class="mt-3 text-white font-bold bg-[#f88000] py-1 px-3 text-xs rounded">Pesan</button>
            </div>
        </div>
        @endfor
    </div>
</div>

@endsection
