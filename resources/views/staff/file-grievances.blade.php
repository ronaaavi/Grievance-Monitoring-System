@extends('layouts.app')

@section('title', 'File Grievances')

@section('sidebar')
  <a href="{{ route('staff.file-grievances') }}" 
     class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
            text-gray-700 hover:bg-red-800 hover:text-white 
            bg-red-800 text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
      <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
    </svg>
    <span class="text-base">File Grievances</span>
  </a>

  <!-- Profile -->
  <a href="{{ route('staff.profile') }}"
     class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold
            text-gray-700 hover:bg-red-800 hover:text-white
            {{ request()->routeIs('staff.profile') ? 'bg-red-800 text-white' : '' }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 4 4 0 000 8z"/>
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
      <a href="{{ route('staff.file-grievances') }}" class="text-blue-600 hover:underline">File Grievances</a>
    </nav>
  </div>

  <!-- Main Form -->
  <div class="flex-1 max-w-[1300px] mx-auto w-full px-7">
    <div class="bg-white rounded-2xl shadow-lg p-5 w-full">
      <div class="h-4 bg-[#6f0909] rounded-t-2xl -mx-5 -mt-5 mb-5"></div>

      <h1 class="text-2xl text-gray-800 font-semibold">Student Grievance Report Form</h1>
      <div class="border-t border-gray-200 mt-2 mb-5"></div>

      <form class="space-y-3 text-lg">
        <!-- Row 1 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
          <input type="text" id="school_id" name="school_id" placeholder="School ID"
                 class="w-full px-3 py-3 border border-gray-300 rounded 
                        focus:ring-2 focus:ring-red-800 focus:border-red-800 outline-none" />
          <input type="text" id="name" name="name" placeholder="Name"
                 class="w-full px-3 py-3 border border-gray-300 rounded 
                        focus:ring-2 focus:ring-red-800 focus:border-red-800 outline-none" />
        </div>

        <!-- Row 2 -->
        <input type="text" id="program" name="program" placeholder="Program"
               class="w-full px-3 py-3 border border-gray-300 rounded 
                      focus:ring-2 focus:ring-red-800 focus:border-red-800 outline-none" />

        <!-- Row 3 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
          <input type="date" id="date" name="date"
                 class="w-full px-3 py-3 pr-10 border border-gray-300 rounded 
                        focus:ring-2 focus:ring-red-800 focus:border-red-800 outline-none" />
          <select id="grievance" name="grievance"
                  class="w-full px-3 py-3 pr-10 border border-gray-300 rounded 
                         focus:ring-2 focus:ring-red-800 focus:border-red-800 outline-none 
                         appearance-none bg-white">
            <option value="">Grievance</option>
            <option value="spot_report">Spot Report</option>
            <option value="arf">ARF (Academic Review Form)</option>
            <option value="disciplinary">Disciplinary Action</option>
            <option value="other">Other</option>
          </select>
        </div>

        <!-- Row 4 -->
        <textarea id="description" name="description" rows="5" placeholder="Description of Incident"
                  class="w-full px-3 py-3 border border-gray-300 rounded 
                         focus:ring-2 focus:ring-red-800 focus:border-red-800 outline-none resize-none"></textarea>

        <!-- Buttons -->
        <div class="flex justify-end space-x-3 pt-2">
          <button type="reset"
                  class="px-4 py-2 border border-gray-300 text-gray-700 rounded 
                         hover:bg-gray-50 focus:ring-2 focus:ring-gray-500 focus:border-gray-500 outline-none">
            Clear
          </button>
          <button type="submit"
                  class="px-4 py-2 bg-red-900 text-white rounded 
                         hover:bg-red-800 focus:ring-2 focus:ring-red-800 outline-none">
            Add
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
