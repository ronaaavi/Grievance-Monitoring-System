@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('sidebar')
        @include('partials.sidebar-student')
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
            <a href="{{ route('student.dashboard') }}" class="hover:text-red-800">Dashboard</a>
            <span class="mx-1 text-gray-500">></span>
            <a href="{{ route('student.grievances') }}" class="text-blue-600 hover:underline">Grievances</a>
        </nav>
    </div>

    <div class="flex-1 max-w-4l mx-auto px-1 overflow-x-hidden w-full">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Title and Search -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-2 md:mb-0">My Grievances</h2>
                <div class="flex justify-end">
                    <input type="text" placeholder="Search" 
                        class="border border-gray-300 rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50 text-gray-700">
                        <tr>
                            <th class="px-5 py-3 text-left font-semibold">Grievance ID</th>
                            <th class="px-5 py-3 text-left font-semibold">Type</th>
                            <th class="px-5 py-3 text-left font-semibold">Status</th>
                            <th class="px-5 py-3 text-left font-semibold">Date</th>
                            <th class="px-5 py-3 text-left font-semibold">Remarks</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-b last:border-b-0">
                            <td class="px-5 py-3 text-blue-600 font-medium">CASE-2025-003</td>
                            <td class="px-5 py-3">Spot Report</td>
                            <td class="px-5 py-3">
                                <span class="px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Resolved</span>
                            </td>
                            <td class="px-5 py-3">13/05/2025</td>
                            <td class="px-5 py-3">Warning issued</td>
                        </tr>
                        <tr class="border-b last:border-b-0">
                            <td class="px-5 py-3 text-blue-600 font-medium">CASE-2025-002</td>
                            <td class="px-5 py-3">ARF</td>
                            <td class="px-5 py-3">
                                <span class="px-2 py-1 rounded bg-yellow-100 text-yellow-700 text-xs">Open</span>
                            </td>
                            <td class="px-5 py-3">22/05/2025</td>
                            <td class="px-5 py-3">Warning issued</td>
                        </tr>
                        <tr class="border-b last:border-b-0">
                            <td class="px-5 py-3 text-blue-600 font-medium">CASE-2025-001</td>
                            <td class="px-5 py-3">Spot Report</td>
                            <td class="px-5 py-3">
                                <span class="px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Resolved</span>
                            </td>
                            <td class="px-5 py-3">15/06/2025</td>
                            <td class="px-5 py-3">For investigation</td>
                        </tr>
                        <tr>
                            <td class="px-5 py-3 text-blue-600 font-medium">CASE-2025-000</td>
                            <td class="px-5 py-3">Spot Report</td>
                            <td class="px-5 py-3">
                                <span class="px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Resolved</span>
                            </td>
                            <td class="px-5 py-3">06/09/2025</td>
                            <td class="px-5 py-3">For investigation</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

