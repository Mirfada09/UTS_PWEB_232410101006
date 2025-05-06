<div class="flex flex-wrap items-center justify-between px-4 py-2">
    {{-- Logo --}}
    <div class="w-full sm:w-auto flex justify-center sm:justify-start mb-2 sm:mb-0">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-[7rem]">
    </div>

    {{-- Profile Title --}}
   

    {{-- Menu Kami dan Keranjang di halaman orders --}}
    @if(request()->is('orders'))
    <div class="w-full sm:flex-1 flex justify-center sm:justify-center items-center">
        <p class="font-bold text-2xl sm:text-3xl text-red-600 text-center">Menu Kami</p>
    </div>
    <div class="w-full sm:w-auto flex justify-center sm:justify-end items-center mt-2 sm:mt-0">
        <img src="{{ asset('img/keranjang.png') }}" alt="Keranjang" class="w-10 h-10 cursor-pointer sm:mr-12">
    </div>
    @endif
</div>
