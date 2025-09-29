@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('sidebar')
  <!-- Grievances -->
<a href="{{ route('student.grievances') }}" 
   class="flex items-center gap-3 px-6 py-4 font-semibold cursor-pointer
          {{ request()->is('staff/grievances') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}
          transition-colors rounded-r-lg w-full">

  <!-- Inline SVG icon -->
  <svg xmlns="http://www.w3.org/2000/svg" 
       class="w-6 h-6 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
      <path d="M3 6a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v12a1 1 0 0 
      1-1 1H4a1 1 0 0 1-1-1V6zm2 0v12h14V6H5zm2 2h10v2H7V8zm0 
      4h6v2H7v-2z"/>
  </svg>

  <span class="text-base">Grievances</span>
</a>

@endsection

@section('content')
  <div class="max-w-4l mx-auto px-1 overflow-x-hidden">

    <!-- TOP CARD -->
    <div class="bg-[#6f0909] text-white rounded-xl flex flex-col md:flex-row items-center justify-between px-6 py-4 mb-6 w-full">
      <div class="mb-4 md:mb-0">
        <p class="text-sm text-gray-200">September 5, 2025</p>
        <h2 class="text-2xl font-bold">Welcome back, Rona!</h2>
        <p class="text-sm">Keep track of your grievance history and make sure your record stays clean.</p>
      </div>
      <img src="/images/Sticker.png" alt="Student Illustration" class="h-20 object-contain">
    </div>

<!-- Summary + Profile (GRID layout para aligned) -->
<div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mb-8">

  <!-- Summary Cards (3 columns, auto-fit) -->
  <div class="lg:col-span-3">
    <h3 class="text-xl font-semibold mb-4">Summary</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
        <p class="text-4xl font-bold text-red-800 mb-2">2</p>
        <p class="text-base text-gray-600 flex items-center justify-center">
          <span class="w-3 h-3 bg-blue-500 rounded-full mr-3"></span>
          Total Cases
        </p>
      </div>
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
        <p class="text-4xl font-bold text-black mb-2">1</p>
        <p class="text-base text-gray-600 flex items-center justify-center">
          <span class="w-3 h-3 bg-orange-500 rounded-full mr-3"></span>
          Active Cases
        </p>
      </div>
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
        <p class="text-4xl font-bold text-red-800 mb-2">1</p>
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
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" 
           class="h-20 w-20 rounded-full border-4 border-pink-300 text-gray-600 mx-auto mb-4">
        <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 
                 2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
      </svg>
    </div>
    <h4 class="font-semibold text-center text-lg mb-1">Rona Arbe B. Limbago</h4>
    <p class="text-sm text-gray-600 text-center mb-4">Student</p>
    <div class="mb-4 text-sm text-gray-700 space-y-2">
      <p><span class="font-semibold">Student ID:</span> 2022-00270</p>
      <p><span class="font-semibold">Email:</span> rablimbago00270@usep.edu.ph</p>
      <p><span class="font-semibold">Program:</span> BSIT-IS</p>
      <p><span class="font-semibold">Good Moral Status:</span> Pending</p>
    </div>
    <button class="mt-auto px-4 py-2 bg-red-900 text-white rounded-lg hover:bg-red-800 font-medium">
      Edit Profile
    </button>
  </div>

</div>
</div>
@endsection