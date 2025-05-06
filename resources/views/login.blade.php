@extends('layout.app')
@section('content')
<div class="flex items-center justify-center bg-[#F4EBDC]">
    <div class="bg-[#F4EBDC] p-6 rounded-2xl shadow-2xl w-90 h-70">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required 
                        class="mt-1 block w-full border p-1 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('email')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full border p-1 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('password')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Forgot Password Link -->
                <div class="mb-4">
                    <a href="#" class="text-sm text-red-600 font-bold hover:underline">Forgot password?</a>
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit" class="mt-4 font-bold w-[40%] bg-[#FF8731] text-white py-2 rounded-[0.5rem] hover:bg-[rgba(255,135,55,0.87)]">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection