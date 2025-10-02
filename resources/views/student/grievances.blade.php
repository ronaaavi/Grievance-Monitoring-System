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

    <!-- Main Table -->
    <div class="flex-1 px-6 w-full">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden w-full">
            <div class="h-4 bg-[#6f0909]"></div>
            <div class="p-6">
                <h1 class="text-2xl text-gray-800 font-semibold mb-2">My Grievances</h1>
                <div class="border-t border-gray-200 mt-2 mb-5"></div>
                <div class="flex justify-between items-center mb-2">
                    <div></div>
                    <div class="relative">
                        <input type="text" placeholder="Search" class="px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-red-800 focus:border-red-800 outline-none text-sm" />
                    </div>
                </div>
                <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-700 rounded-xl overflow-hidden">
                    <thead>
                        <tr class="bg-blue-50 text-blue-900">
                            <th class="px-5 py-3 font-semibold">Grievance ID</th>
                            <th class="px-5 py-3 font-semibold">Type</th>
                            <th class="px-5 py-3 font-semibold">Status</th>
                            <th class="px-5 py-3 font-semibold">Date</th>
                            <th class="px-5 py-3 font-semibold">Remarks</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                    <span class="text-blue-600 font-medium">CASE-2025-003</span>
                                </div>
                            </td>
                            <td class="px-5 py-3">Spot Report</td>
                            <td class="px-5 py-3">
                                <span class="px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Resolved</span>
                            </td>
                            <td class="px-5 py-3">13/05/2025</td>
                            <td class="px-5 py-3">Warning issued</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                    <span class="text-blue-600 font-medium">CASE-2025-002</span>
                                </div>
                            </td>
                            <td class="px-5 py-3">ARF</td>
                            <td class="px-5 py-3">
                                <span class="px-2 py-1 rounded bg-yellow-100 text-yellow-700 text-xs">Open</span>
                            </td>
                            <td class="px-5 py-3">22/05/2025</td>
                            <td class="px-5 py-3">Warning issued</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                    <span class="text-blue-600 font-medium">CASE-2025-001</span>
                                </div>
                            </td>
                            <td class="px-5 py-3">Spot Report</td>
                            <td class="px-5 py-3">
                                <span class="px-2 py-1 rounded bg-green-100 text-green-700 text-xs">Resolved</span>
                            </td>
                            <td class="px-5 py-3">15/06/2025</td>
                            <td class="px-5 py-3">For investigation</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                    <span class="text-blue-600 font-medium">CASE-2025-000</span>
                                </div>
                            </td>
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
</div>
@endsection

