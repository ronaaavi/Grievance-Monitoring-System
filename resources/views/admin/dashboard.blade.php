@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('sidebar')
    <!-- Manage Staff -->
    <a href="{{ route('admin.manage-staff') }}" 
       class="flex items-center gap-3 px-6 py-4 font-semibold cursor-pointer
              {{ request()->routeIs('admin.manage-staff') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}
              transition-colors rounded-r-lg w-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6 flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M16 11c1.657 0 3-1.343 3-3s-1.343-3-3-3
                     -3 1.343-3 3 1.343 3 3 3zM8 11c1.657 
                     0 3-1.343 3-3S9.657 5 8 5 5 6.343 5 
                     8s1.343 3 3 3zm8 2c-2.21 0-4 1.79-4 
                     4v2h8v-2c0-2.21-1.79-4-4-4zm-8 0c-2.21 
                     0-4 1.79-4 4v2h8v-2c0-2.21-1.79-4-4-4z"/>
        </svg>
        <span class="text-base">Manage Staff</span>
    </a>

    <!-- Manage Students -->
    <a href="{{ route('admin.manage-students') }}" 
       class="flex items-center gap-3 px-6 py-4 font-semibold cursor-pointer
              {{ request()->routeIs('admin.manage-students') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}
              transition-colors rounded-r-lg w-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6 flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 
                     4 4 0 000 8z"/>
        </svg>
        <span class="text-base">Manage Students</span>
    </a>

    <!-- Grievance Reports -->
    <a href="{{ route('admin.grievancereports') }}" 
       class="flex items-center gap-3 px-6 py-4 font-semibold cursor-pointer
              {{ request()->routeIs('admin.grievancereports') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}
              transition-colors rounded-r-lg w-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6 flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M9 17v-2h6v2M7 7h10v10a2 2 0 01-2 2H9a2 
                     2 0 01-2-2V7z"/>
        </svg>
        <span class="text-base">Grievance Reports</span>
    </a>

    <!-- Action History -->
    <a href="{{ route('admin.action-history') }}" 
       class="flex items-center gap-3 px-6 py-4 font-semibold cursor-pointer
              {{ request()->routeIs('admin.action-history') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}
              transition-colors rounded-r-lg w-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6 flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 
                     0 9 9 0 0118 0z"/>
        </svg>
        <span class="text-base">Action History</span>
    </a>

    <!-- Profile -->
    <a href="{{ route('admin.profile') }}" 
       class="flex items-center gap-3 px-6 py-4 font-semibold cursor-pointer
              {{ request()->routeIs('admin.profile') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}
              transition-colors rounded-r-lg w-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6 flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 
                     4 4 0 000 8z"/>
        </svg>
        <span class="text-base">Profile</span>
    </a>

    <!-- Settings -->
    <a href="{{ route('admin.settings') }}" 
       class="flex items-center gap-3 px-6 py-4 font-semibold cursor-pointer
              {{ request()->routeIs('admin.settings') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}
              transition-colors rounded-r-lg w-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6 flex-shrink-0">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M11.983 4.223a1 1 0 011.034 0l1.518.878a1 1 0 001.414-.414l.607-1.175a1 1 0 011.29-.447l1.392.557a1 1 0 01.553 1.29l-.557 1.392a1 1 0 00.447 1.29l1.175.607a1 1 0 01.414 1.414l-.878 1.518a1 1 0 000 1.034l.878 1.518a1 1 0 01-.414 1.414l-1.175.607a1 1 0 00-.447 1.29l.557 1.392a1 1 0 01-.553 1.29l-1.392.557a1 1 0 01-1.29-.447l-.607-1.175a1 1 0 00-1.29-.447l-1.518.878a1 1 0 01-1.034 0l-1.518-.878a1 1 0 00-1.29.447l-.607 1.175a1 1 0 01-1.29.447l-1.392-.557a1 1 0 01-.553-1.29l.557-1.392a1 1 0 00-.447-1.29l-1.175-.607a1 1 0 01-.414-1.414l.878-1.518a1 1 0 000-1.034l-.878-1.518a1 1 0 01.414-1.414l1.175-.607a1 1 0 00.447-1.29l-.557-1.392a1 1 0 01.553-1.29l1.392-.557a1 1 0 011.29.447l.607 1.175a1 1 0 001.29.447l1.518-.878zM12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z"/>
        </svg>
        <span class="text-base">Settings</span>
    </a>
@endsection

@section('content')
<!-- TOP CARD -->
<div class="bg-gradient-to-r from-[#760000] to-[#D62F26] text-white rounded-xl flex flex-col md:flex-row justify-between items-stretch px-8 mb-8 shadow-lg h-40">
    <!-- Text Section -->
    <div class="md:w-2/3 flex flex-col justify-center">
        <p class="text-xs text-gray-200 mb-7">{{ now()->format('F j, Y') }}</p>
        <h2 class="text-3xl font-bold mb-1">Welcome back, Ivan!</h2>
        <p class="text-sm">Keep track of your grievance history and manage the system effectively.</p>
    </div>

    <!-- Image Section -->
    <div class="md:w-1/3 flex justify-end items-end">
        <img src="/images/Sticker.png" alt="Admin Illustration" 
             class="h-full object-bottom object-contain">
    </div>
</div>

<!-- GRID: Summary (3 cols) + Profile (1 col) -->
<div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mb-8">
    
    <!-- Summary Cards -->
    <div class="lg:col-span-3">
        <h3 class="text-xl font-semibold mb-4">Summary</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-4xl font-bold text-red-800 mb-2">15</p>
                <p class="text-base text-gray-600 flex items-center justify-center">
                    <span class="w-3 h-3 bg-blue-500 rounded-full mr-3"></span>
                    Total Grievances
                </p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-4xl font-bold text-black mb-2">5</p>
                <p class="text-base text-gray-600 flex items-center justify-center">
                    <span class="w-3 h-3 bg-orange-500 rounded-full mr-3"></span>
                    Pending Cases
                </p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-4xl font-bold text-red-800 mb-2">10</p>
                <p class="text-base text-gray-600 flex items-center justify-center">
                    <span class="w-3 h-3 bg-green-500 rounded-full mr-3"></span>
                    Resolved Cases
                </p>
            </div>
        </div>
    </div>
    

    <!-- Profile Card -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col">
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 fill="currentColor" viewBox="0 0 24 24" 
                 class="h-20 w-20 rounded-full border-4 border-pink-300 text-gray-600 mx-auto mb-4">
                <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 
                         2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                         0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
            </svg>
        </div>

        <h4 class="font-semibold text-center text-lg mb-1">Ivan Rhey Sapar</h4>
        <p class="text-sm text-gray-600 text-center mb-4">Admin</p>
        <div class="mb-4 pl-2 text-sm text-gray-700 space-y-2">
            <p><span class="font-semibold">Staff ID:</span> ST-001</p>
            <p><span class="font-semibold">Email:</span> admin@example.com</p>
            <p><span class="font-semibold">Role:</span> Admin</p>
            <p><span class="font-semibold">Status:</span> Active</p>
        </div>
        <button class="px-6 py-3 bg-red-900 text-white rounded-lg hover:bg-red-800 font-medium">Edit Profile</button>
    </div>
</div>
@endsection
