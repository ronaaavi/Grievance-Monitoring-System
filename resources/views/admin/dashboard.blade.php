@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('sidebar')
    @include('partials.sidebar-admin')
@endsection

@section('content')
<!-- TOP CARD -->
<div class="bg-gradient-to-r from-[#760000] to-[#D62F26] text-white rounded-xl flex flex-col md:flex-row justify-between items-stretch px-8 mb-8 shadow-lg h-40">
    <!-- Text Section -->
    <div class="md:w-2/3 flex flex-col justify-center">
        <p class="text-xs text-gray-200 mb-7">{{ now()->format('F j, Y') }}</p>
        <h2 class="text-3xl font-bold mb-1">Welcome back, Ivan!</h2>
        <p class="text-sm">Keep track of your grievance history and manage the system effectively.</p>
    </div>

    <!-- Image Section -->
    <div class="md:w-1/3 flex justify-end items-end">
        <img src="/images/Sticker.png" alt="Admin Illustration" 
             class="h-full object-bottom object-contain">
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mb-8">
    <!-- Summary Cards -->
    <div class="lg:col-span-3 flex flex-col gap-6">
        <h3 class="text-xl font-semibold mb-4">Summary</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-4xl font-bold text-red-800 mb-2">15</p>
                <p class="text-base text-gray-600 flex items-center justify-center">
                    <span class="w-3 h-3 bg-blue-500 rounded-full mr-3"></span>
                    Total Grievances
                </p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-4xl font-bold text-black mb-2">5</p>
                <p class="text-base text-gray-600 flex items-center justify-center">
                    <span class="w-3 h-3 bg-orange-500 rounded-full mr-3"></span>
                    Pending Cases
                </p>
            </div>
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <p class="text-4xl font-bold text-red-800 mb-2">10</p>
                <p class="text-base text-gray-600 flex items-center justify-center">
                    <span class="w-3 h-3 bg-green-500 rounded-full mr-3"></span>
                    Resolved Cases
                </p>
            </div>
        </div>

        <!-- My Grievances Table Preview -->
        <div class="bg-white rounded-2xl shadow-lg p-4 overflow-x-auto">
            <h4 class="text-lg font-semibold mb-3">My Grievances</h4>
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

    <!-- Profile Card -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col">
        <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 fill="currentColor" viewBox="0 0 24 24" 
                 class="h-20 w-20 rounded-full border-4 border-pink-300 text-gray-600 mx-auto mb-4">
                <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 
                         2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                         0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
            </svg>
        </div>

        <h4 class="font-semibold text-center text-lg mb-1">Ivan Rhey Sapar</h4>
        <p class="text-sm text-gray-600 text-center mb-4">Admin</p>
        <div class="mb-4 pl-2 text-sm text-gray-700 space-y-2">
            <p><span class="font-semibold">Staff ID:</span> ST-001</p>
            <p><span class="font-semibold">Email:</span> admin@example.com</p>
            <p><span class="font-semibold">Role:</span> Admin</p>
            <p><span class="font-semibold">Status:</span> Active</p>
        </div>
        <button class="px-6 py-3 bg-red-900 text-white rounded-lg hover:bg-red-800 font-medium">Edit Profile</button>
    </div>
</div>
@endsection
