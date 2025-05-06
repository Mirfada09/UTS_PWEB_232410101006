@if(!request()->is('login'))
<div class="  left-0 w-full z-50 flex flex-col md:flex-row items-center justify-center p-2 gap-2 md:gap-4 bg-transparent">
    <!-- Menu Navigasi -->
    <div class="border-2 border-[#DBB59A] w-full md:w-[50%] h-[4rem] rounded-tl-[2rem] rounded-tr-[2rem] bg-[#F4EBDC] shadow-2xl">
        <ul class="flex justify-around items-center h-full font-bold text-[1rem] md:text-[1.3rem] text-black">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'text-[#D62A0E]' : 'text-black' }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('orders') }}" class="{{ request()->is('orders') ? 'text-[#D62A0E]' : 'text-black' }}">Orders</a>
            </li>
            <li>
                <a href="{{ route('profile') }}" class="{{ request()->is('profile') ? 'text-[#D62A0E]' : 'text-black' }}">Profile</a>
            </li>
        </ul>
    </div>

    <!-- Tombol Logout -->
    @if(!request()->is('dashboard'))
    <div class="w-full md:w-[6rem] h-[3rem] bg-[#FF8731] text-white font-bold text-center flex items-center justify-center rounded-lg shadow-md cursor-pointer">
        <a href="{{ route('login') }}" class="w-full">Logout</a>
    </div>
    @endif
</div>
@endif
