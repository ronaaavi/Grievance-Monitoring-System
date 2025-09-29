@extends('layouts.app')

@section('title', 'Staff Profile')

@section('sidebar')
<!-- File Grievances -->
<a href="/staff/file-grievances" 
   class="flex items-center gap-3 px-6 py-4 font-semibold cursor-pointer
          {{ request()->is('staff/file-grievances') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}
          transition-colors rounded-r-lg w-full">
  
  <!-- Inline SVG icon -->
  <svg xmlns="http://www.w3.org/2000/svg" 
       class="w-6 h-6 flex-shrink-0" viewBox="0 0 16 16" fill="currentColor">
    <path fill-rule="evenodd" d="M2.5 1.045a.5.5 0 0 0-.5.5v10.91a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V5.364a.5.5 0 0 0-.152-.36L7.911 1.188a.5.5 0 0 0-.348-.142zm7.766 3.819L8.063 2.727v2.137zM6 5.5H4v-1h2zM10 8H4V7h6zm-6 2.5h6v-1H4z" clip-rule="evenodd"/>
    <path d="M13 7.5V14H4.5v1h9a.5.5 0 0 0 .5-.5v-7z"/>
  </svg>

  <span class="text-base">File Grievances</span>
</a>

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
@endsection

@section('content')
<div class="flex flex-col min-h-screen">

    <!-- Breadcrumb -->
    <div class="px-3 -mt-4 mb-4">
        <nav class="text-sm text-gray-600 flex items-center space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
                 viewBox="0 0 24 24" class="w-4 h-4 mr-1">
                <path d="M3 9.75L12 3l9 6.75V21a1 1 0 0 1-1 1h-5.5a.5.5 0 0 1-.5-.5V15h-4v6.5a.5.5 0 0 1-.5.5H4a1 1 0 0 1-1-1V9.75z"/>
            </svg>
            <a href="{{ route('staff.dashboard') }}" class="hover:text-red-800">Dashboard</a>
            <span class="mx-1 text-gray-500">></span>
            <a href="{{ route('staff.profile') }}" class="text-blue-600 hover:underline">Profile</a>
        </nav>
    </div>

    <div class="p-6">
    <!-- Top Section -->
    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 mb-8">
        <!-- Avatar -->
        <div class="flex-shrink-0">
            <img src="/images/avatar-female.png" alt="Profile Avatar" 
                 class="h-28 w-28 rounded-full border-4 border-red-200 object-cover bg-white shadow-md">
        </div>
        <!-- Info -->
        <div class="flex flex-col justify-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-1">Ivan Rhay Jeferson C. Sapar</h2>
            <p class="text-gray-600 mb-1">OSAS Officer</p>
            <p class="text-sm text-gray-500">
                <span class="font-semibold">Staff ID:</span> <span class="text-black">ST-001</span> &nbsp;|&nbsp;
                <span class="font-semibold">Email:</span> <span class="text-black">staff@example.com</span>
            </p>
        </div>
    </div>

    <!-- Basic Info Card -->
    <div class="bg-white rounded-xl shadow border border-gray-200 mb-8">
        <div class="p-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">Basic info</h3>
        </div>
        <div class="p-0">
            <table class="w-full text-sm text-gray-700">
                <tbody>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-6 font-medium w-1/3">Name</td>
                        <td class="py-3 px-6">Ivan Rhay Jeferson C. Sapar</td>
                    </tr>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-6 font-medium">Office</td>
                        <td class="py-3 px-6">OSAS</td>
                    </tr>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-6 font-medium">Position</td>
                        <td class="py-3 px-6">Administrative Aide VI</td>
                    </tr>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-6 font-medium">Phone</td>
                        <td class="py-3 px-6">0991 234 5678</td>
                    </tr>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-6 font-medium">Email</td>
                        <td class="py-3 px-6">staff@example.com</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-6 font-medium">Change password</td>
                        <td class="py-3 px-6">********</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- System Info Card -->
    <div class="bg-white rounded-xl shadow border border-gray-200">
        <div class="p-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">System Info</h3>
        </div>
        <div class="p-0">
            <table class="w-full text-sm text-gray-700">
                <tbody>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-6 font-medium w-1/3">Role</td>
                        <td class="py-3 px-6">Staff</td>
                    </tr>
                    <tr class="border-b last:border-b-0">
                        <td class="py-3 px-6 font-medium">Date Joined</td>
                        <td class="py-3 px-6">July 10, 2025 – 02:15 PM</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-6 font-medium">Last Login</td>
                        <td class="py-3 px-6">Aug 26, 2025 – 08:20 AM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
