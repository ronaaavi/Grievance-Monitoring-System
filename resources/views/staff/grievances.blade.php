@extends('layouts.app')

@section('title', 'Grievances')

@section('sidebar')
    @include('partials.sidebar-staff')
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
            <a href="{{ route('staff.grievances') }}" class="text-blue-600 hover:underline">Grievances</a>
        </nav>
    </div>

    <!-- Main Table -->
    <div class="flex-1 max-w-[1300px] mx-auto w-full px-7">
        <div class="bg-white rounded-2xl shadow-lg p-5 w-full">
            <div class="h-4 bg-[#6f0909] rounded-t-2xl -mx-5 -mt-5 mb-5"></div>
            <h1 class="text-2xl text-gray-800 font-semibold mb-2">My Grievances</h1>
            <div class="border-t border-gray-200 mt-2 mb-5"></div>
            <div class="flex justify-between items-center mb-2">
                <div></div>
                <div class="relative">
                    <input type="text" placeholder="Search" class="pl-10 pr-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-red-800 focus:border-red-800 outline-none text-sm" />
                    <span class="absolute left-2 top-2.5 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-700 rounded-xl overflow-hidden">
                    <thead>
                        <tr class="bg-blue-50 text-blue-900">
                            <th class="px-4 py-3 font-semibold"><input type="checkbox" /></th>
                            <th class="px-4 py-3 font-semibold">Student ID</th>
                            <th class="px-4 py-3 font-semibold">Name</th>
                            <th class="px-4 py-3 font-semibold">Type</th>
                            <th class="px-4 py-3 font-semibold">Date Filed</th>
                            <th class="px-4 py-3 font-semibold">Status</th>
                            <th class="px-4 py-3 font-semibold">Filed By</th>
                            <th class="px-4 py-3 font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2"><input type="checkbox" /></td>
                            <td class="px-4 py-2">CASE-2025-001</td>
                            <td class="px-4 py-2">Rona Arbe B. Limbago</td>
                            <td class="px-4 py-2">Spot Report</td>
                            <td class="px-4 py-2">2025-07-10</td>
                            <td class="px-4 py-2">Open</td>
                            <td class="px-4 py-2">Maria D. Reyes</td>
                            <td class="px-4 py-2 flex gap-1">
                                <button class="bg-green-100 text-green-700 rounded p-1 hover:bg-green-200" title="Approve">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                </button>
                                <button class="bg-red-100 text-red-700 rounded p-1 hover:bg-red-200" title="Reject">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Example row, repeat as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
