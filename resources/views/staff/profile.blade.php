@extends('layouts.app')

@section('title', 'Staff Profile')

@section('sidebar')
  <!-- Profile button - active state -->
  <a href="/staff/profile" class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold text-gray-700 hover:bg-red-800 hover:text-white bg-red-800 text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 4 4 0 000 8z"/>
    </svg>
    <span class="text-base">Profile</span>
  </a>

  <!-- File Grievances button -->
  <a href="/staff/file-grievances" class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
      <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
    </svg>
    <span class="text-base">File Grievances</span>
  </a>
@endsection

@section('content')
<div class="flex flex-col min-h-screen"> 
  <!-- Breadcrumbs -->
  <div class="px-3 -mt-4 mb-4">
    <nav class="text-sm text-gray-600 flex items-center space-x-1">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
           viewBox="0 0 24 24" class="w-4 h-4 mr-1">
        <path d="M3 9.75L12 3l9 6.75V21a1 1 0 0 1-1 1h-5.5a.5.5 0 0 1-.5-.5V15h-4v6.5a.5.5 0 0 1-.5.5H4a1 1 0 0 1-1-1V9.75z"/>
      </svg>
      <a href="/staff/dashboard" class="hover:text-red-800">Dashboard</a>
      <span class="mx-1 text-gray-500">></span>
      <span class="text-blue-600">Profile</span>
    </nav>
  </div>

  <div class="flex-1 max-w-[1300px] mx-auto w-full px-7">
    <!-- Profile Card -->
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full">
      <div class="h-4 bg-[#6f0909] rounded-t-2xl -mx-8 -mt-8 mb-8"></div>
      
      <div class="flex flex-col items-center">
        <!-- Profile Picture -->
        <div class="relative mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" 
               fill="currentColor" viewBox="0 0 24 24" 
               class="h-32 w-32 rounded-full border-4 border-pink-300 text-gray-600 mx-auto">
            <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 
                     2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                     0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
          </svg>
        </div>

        <!-- Name and Role -->
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Ivan Rhay Jeferson C. Sapar</h1>
        <p class="text-lg text-gray-600 mb-8">Staff</p>
        
        <!-- Profile Details Table -->
        <div class="w-full max-w-2xl">
          <table class="w-full">
            <tbody class="space-y-4">
              <tr class="border-b border-gray-200">
                <td class="py-4 font-semibold text-gray-700 text-left">Staff ID:</td>
                <td class="py-4 text-gray-600 text-left">ST-001</td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-4 font-semibold text-gray-700 text-left">Email:</td>
                <td class="py-4 text-gray-600 text-left">ivan.sapar@example.com</td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-4 font-semibold text-gray-700 text-left">Role:</td>
                <td class="py-4 text-gray-600 text-left">Guidance Staff</td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-4 font-semibold text-gray-700 text-left">Department:</td>
                <td class="py-4 text-gray-600 text-left">Office of Student Affairs and Services</td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-4 font-semibold text-gray-700 text-left">Status:</td>
                <td class="py-4 text-green-600 font-semibold text-left">Active</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- System Info Section -->
        <div class="w-full max-w-2xl mt-8">
          <h3 class="text-xl font-semibold text-gray-800 mb-4">System Info</h3>
          <table class="w-full">
            <tbody class="space-y-4">
              <tr class="border-b border-gray-200">
                <td class="py-4 font-semibold text-gray-700 text-left">Last Login:</td>
                <td class="py-4 text-gray-600 text-left">September 5, 2025 - 9:30 AM</td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-4 font-semibold text-gray-700 text-left">Account Created:</td>
                <td class="py-4 text-gray-600 text-left">January 15, 2025</td>
              </tr>
              <tr class="border-b border-gray-200">
                <td class="py-4 font-semibold text-gray-700 text-left">Permission Level:</td>
                <td class="py-4 text-gray-600 text-left">Standard Staff</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Edit Profile Button -->
        <button class="mt-8 px-8 py-3 bg-red-900 text-white rounded-lg hover:bg-red-800 font-medium text-lg">
          Edit Profile
        </button>
      </div>
    </div>
  </div>
</div>
@endsection