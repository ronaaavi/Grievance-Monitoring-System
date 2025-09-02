@extends('layouts.app')

@section('title', 'Staff Dashboard')

@section('sidebar')
    <!-- Dashboard -->
    <a href="#" class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold text-gray-700 
       hover:bg-red-800 hover:text-white bg-red-800 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
        </svg>
        <span class="text-base">Dashboard</span>
    </a>

    <!-- File Grievances -->
    <a href="{{ url('/staff/file-grievances') }}" 
       class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold text-gray-700 
              hover:bg-red-800 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 
                     2 2h14c1.1 0 2-.9 
                     2-2V5c0-1.1-.9-2-2-2zm-8 
                     14H7v-2h4v2zm6-4H7v-2h10v2zm0-4H7V7h10v2z"/>
        </svg>
        <span class="text-base">File Grievances</span>
    </a>
@endsection

@section('content')
    <!-- TOP CARD -->
    <div class="bg-[#6f0909] text-white rounded-xl flex items-center justify-between p-10 mb-10 flex-shrink-0">
        <div class="flex flex-col justify-between h-32">
            <p class="text-sm">September 1, 2025</p>
            <div>
                <h2 class="text-3xl font-bold">Welcome back, Staff!</h2>
                <p class="text-sm">Manage grievances, track student cases, and maintain clean records.</p>
            </div>
        </div>
        <img src="/images/Sticker.png" alt="Staff Illustration" class="h-40 object-contain">  
    </div>

    <!-- TOP ROW: 3 Stats + Profile -->
    <div class="flex gap-8 mb-8 flex-shrink-0">
        <!-- LEFT SIDE: Summary Cards -->
        <div class="flex flex-col flex-grow">
            <h3 class="text-xl font-semibold mb-4">Summary</h3>
            <div class="flex gap-8">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center w-72 h-40 flex flex-col justify-center">
                    <p class="text-4xl font-bold text-red-800 mb-2">15</p>
                    <p class="text-base text-gray-600 flex items-center justify-center">
                        <span class="w-3 h-3 bg-blue-500 rounded-full mr-3"></span>
                        Total Grievances
                    </p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center w-72 h-40 flex flex-col justify-center">
                    <p class="text-4xl font-bold text-black mb-2">5</p>
                    <p class="text-base text-gray-600 flex items-center justify-center">
                        <span class="w-3 h-3 bg-orange-500 rounded-full mr-3"></span>
                        Pending Cases
                    </p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center w-72 h-40 flex flex-col justify-center">
                    <p class="text-4xl font-bold text-red-800 mb-2">10</p>
                    <p class="text-base text-gray-600 flex items-center justify-center">
                        <span class="w-3 h-3 bg-green-500 rounded-full mr-3"></span>
                        Resolved Cases
                    </p>
                </div>
            </div>
        </div>

        <!-- PROFILE CARD -->
        <div class="w-96 bg-white rounded-2xl shadow-lg p-10 flex flex-col justify-between">
            <div class="relative">
                <svg id="profileAvatar" xmlns="http://www.w3.org/2000/svg" 
                     fill="currentColor" viewBox="0 0 24 24" 
                     class="h-24 w-24 rounded-full border-4 border-pink-300 text-gray-600 mx-auto mb-6">
                    <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 
                             2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                             0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
                </svg>
                <label for="profileUpload" 
                       class="absolute bottom-0 right-0 bg-red-900 text-white rounded-full p-2 cursor-pointer hover:bg-red-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
                         viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                              stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                </label>
                <input type="file" id="profileUpload" class="hidden" accept="image/*" onchange="previewProfile(event)">
            </div>

            <h4 class="font-semibold text-center text-lg mb-2">Anna Alleah Jane B. Lindo</h4>
            <p class="text-base text-gray-600 text-center mb-4">Staff</p>
            <div class="mb-6 text-sm text-gray-700 space-y-2">
                <p><span class="font-semibold">Staff ID:</span> ST-001</p>
                <p><span class="font-semibold">Email:</span> staff@example.com</p>
                <p><span class="font-semibold">Role:</span> Guidance Staff</p>
                <p><span class="font-semibold">Status:</span> Active</p>
            </div>
            <button class="px-6 py-3 bg-red-900 text-white rounded-lg hover:bg-red-800 font-medium">Edit Profile ></button>
        </div>
    </div>
@endsection
