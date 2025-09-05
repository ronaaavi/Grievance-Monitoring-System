@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('sidebar')
 <a href="#" class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold text-gray-700 
       hover:bg-red-800 hover:text-white bg-red-800 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
        </svg>
        <span class="text-lg">Dashboard</span>
    </a>

    <!-- Manage Staff -->
    <a href="{{ url('/staff/manage') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M16 11c1.657 0 3-1.343 3-3s-1.343-3-3-3
                 -3 1.343-3 3 1.343 3 3 3zM8 11c1.657 
                 0 3-1.343 3-3S9.657 5 8 5 5 6.343 5 
                 8s1.343 3 3 3zm8 2c-2.21 0-4 1.79-4 
                 4v2h8v-2c0-2.21-1.79-4-4-4zm-8 0c-2.21 
                 0-4 1.79-4 4v2h8v-2c0-2.21-1.79-4-4-4z"/>
    </svg>
    <span class="text-lg">Manage Staff</span>
</a>

<!-- Manage Students -->
<a href="{{ url('/students/manage') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 
                 4 4 0 000 8z"/>
    </svg>
    <span class="text-lg">Manage Students</span>
</a>

<!-- All Grievance Reports -->
<a href="{{ url('/grievances/all') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M9 17v-2h6v2M7 7h10v10a2 2 0 01-2 2H9a2 
                 2 0 01-2-2V7z"/>
    </svg>
    <span class="text-lg">Grievance Reports</span>
</a>

<!-- Action History -->
<a href="{{ url('/actions/history') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M12 8v4l3 3m6-3a9 9 0 11-18 
                 0 9 9 0 0118 0z"/>
    </svg>
    <span class="text-lg">Action History</span>
</a>

<!-- Profile -->
<a href="{{ url('/profile') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 
                 4 4 0 000 8z"/>
    </svg>
    <span class="text-lg">Profile</span>
</a>

<!-- Settings -->
<a href="{{ url('/settings') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M11.983 4.223a1 1 0 011.034 0l1.518.878a1 1 0 001.414-.414l.607-1.175a1 1 0 011.29-.447l1.392.557a1 1 0 01.553 1.29l-.557 1.392a1 1 0 00.447 1.29l1.175.607a1 1 0 01.414 1.414l-.878 1.518a1 1 0 000 1.034l.878 1.518a1 1 0 01-.414 1.414l-1.175.607a1 1 0 00-.447 1.29l.557 1.392a1 1 0 01-.553 1.29l-1.392.557a1 1 0 01-1.29-.447l-.607-1.175a1 1 0 00-1.29-.447l-1.518.878a1 1 0 01-1.034 0l-1.518-.878a1 1 0 00-1.29.447l-.607 1.175a1 1 0 01-1.29.447l-1.392-.557a1 1 0 01-.553-1.29l.557-1.392a1 1 0 00-.447-1.29l-1.175-.607a1 1 0 01-.414-1.414l.878-1.518a1 1 0 000-1.034l-.878-1.518a1 1 0 01.414-1.414l1.175-.607a1 1 0 00.447-1.29l-.557-1.392a1 1 0 01.553-1.29l1.392-.557a1 1 0 011.29.447l.607 1.175a1 1 0 001.29.447l1.518-.878zM12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z"/>
    </svg>
    <span class="text-lg">Settings</span>
</a>
@endsection

@section('content')
    <!-- TOP CARD -->
     <div class="bg-[#6f0909] text-white rounded-xl flex items-center justify-between pl-10 pt-6 mb-10 flex-shrink-0">
        <div class="flex flex-col justify-between h-40">
          <p class="text-medium text-gray-200">September 5, 2025</p>
          <div>
            <h2 class="text-5xl font-bold leading-snug">Welcome back, Ivan!</h2>
            <p class="text-medium">Keep track of your grievance history and make sure your record stays clean.</p>
          </div>
        </div>
        <img src="/images/Sticker.png" alt="Student Illustration" class="h-50 object-contain">  
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

            <h4 class="font-semibold text-center text-lg mb-2">Ivan Rhey Sapar</h4>
            <p class="text-base text-gray-600 text-center mb-4">Admin</p>
            <div class="mb-6 text-sm text-gray-700 space-y-2">
                <p><span class="font-semibold">Staff ID:</span> ST-001</p>
                <p><span class="font-semibold">Email:</span> staff@example.com</p>
                <p><span class="font-semibold">Role:</span> Admin</p>
                <p><span class="font-semibold">Status:</span> Active</p>
            </div>
            <button class="px-6 py-3 bg-red-900 text-white rounded-lg hover:bg-red-800 font-medium">Edit Profile ></button>
        </div>
    </div>
@endsection