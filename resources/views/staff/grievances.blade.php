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
            <h1 class="text-2xl text-gray-800 font-semibold mb-2">All Grievances</h1>
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
                            <th class="px-5 py-3 font-semibold">Student ID</th>
                            <th class="px-5 py-3 font-semibold">Name</th>
                            <th class="px-5 py-3 font-semibold">Type</th>
                            <th class="px-5 py-3 font-semibold">Date Filed</th>
                            <th class="px-5 py-3 font-semibold">Status</th>
                            <th class="px-5 py-3 font-semibold">Filed By</th>
                            <th class="px-5 py-3 font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                    <span>CASE-2025-001</span>
                                </div>
                            </td>
                            <td class="px-5 py-3">Rona Arbe B. Limbago</td>
                            <td class="px-5 py-3">Spot Report</td>
                            <td class="px-5 py-3">2025-07-10</td>
                            <td class="px-5 py-3">Open</td>
                            <td class="px-5 py-3">Maria D. Reyes</td>
                            <td class="px-5 py-3">
                                <div class="flex space-x-2">
                                    <a href="#" class="text-blue-600 hover:text-blue-800">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    <form method="POST" action="#" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this grievance?')">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
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
