@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('sidebar')
  <!-- Grievances -->
<a href="{{ route('student.grievances') }}" 
   class="flex items-center gap-3 px-6 py-4 font-semibold cursor-pointer
          {{ request()->routeIs('student.grievances') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}
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
   <!-- Breadcrumb -->
<div class="px-3 -mt-4 mb-4">
  <nav class="text-sm text-gray-600 flex items-center space-x-1">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
         viewBox="0 0 24 24" class="w-4 h-4 mr-1">
      <path d="M3 9.75L12 3l9 6.75V21a1 1 0 0 1-1 1h-5.5a.5.5 0 0 1-.5-.5V15h-4v6.5a.5.5 0 0 1-.5.5H4a1 1 0 0 1-1-1V9.75z"/>
    </svg>
    <a href="{{ route('student.dashboard') }}" class="hover:text-red-800">Dashboard</a>
    <span class="mx-1 text-gray-500">></span>
    <a href="{{ route('student.grievances') }}" class="text-blue-600 hover:underline">Grievances</a>
  </nav>
</div>

    <!-- Title -->
    <h2 class="text-2xl font-bold text-gray-800 mb-6">My Grievances</h2>

    <!-- Table -->
    <div class="bg-white shadow-md rounded-lg p-4 overflow-x-auto">
        <div class="flex justify-end mb-3">
            <input type="text" placeholder="Search" 
                   class="border border-gray-300 rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
        </div>

        <table class="min-w-full border border-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 text-left font-semibold">Grievance ID</th>
                    <th class="px-4 py-2 text-left font-semibold">Type</th>
                    <th class="px-4 py-2 text-left font-semibold">Status</th>
                    <th class="px-4 py-2 text-left font-semibold">Date</th>
                    <th class="px-4 py-2 text-left font-semibold">Remarks</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                <tr class="border-b">
                    <td class="px-4 py-2 text-blue-600 font-medium">CASE-2025-003</td>
                    <td class="px-4 py-2">Spot Report</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Resolved</span>
                    </td>
                    <td class="px-4 py-2">13/05/2025</td>
                    <td class="px-4 py-2">Warning issued</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 text-blue-600 font-medium">CASE-2025-002</td>
                    <td class="px-4 py-2">ARF</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded bg-yellow-100 text-yellow-700 text-xs">Open</span>
                    </td>
                    <td class="px-4 py-2">22/05/2025</td>
                    <td class="px-4 py-2">Warning issued</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 text-blue-600 font-medium">CASE-2025-001</td>
                    <td class="px-4 py-2">Spot Report</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Resolved</span>
                    </td>
                    <td class="px-4 py-2">15/06/2025</td>
                    <td class="px-4 py-2">For investigation</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 text-blue-600 font-medium">CASE-2025-000</td>
                    <td class="px-4 py-2">Spot Report</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Resolved</span>
                    </td>
                    <td class="px-4 py-2">06/09/2025</td>
                    <td class="px-4 py-2">For investigation</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

