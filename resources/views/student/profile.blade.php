@extends('layouts.app')

@section('title', 'Student Profile')

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
            <a href="{{ route('student.profile') }}" class="text-blue-600 hover:underline">Profile</a>
        </nav>
    </div>

    <div class="flex-1 max-w-4l mx-auto px-1 overflow-x-hidden w-full">
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
                    <h2 class="text-2xl font-bold text-gray-800 mb-1">Anna Alleah Jane B. Lindo</h2>
                    <p class="text-gray-600 mb-1">Student</p>
                    <p class="text-sm text-gray-500">
                        <span class="font-semibold">Student ID:</span> <span class="text-black">ST-001</span> &nbsp;|&nbsp;
                        <span class="font-semibold">Email:</span> <span class="text-black">aajlindo@usep.edu.ph</span>
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
                                <td class="py-3 px-6">Anna Alleah Jane B. Lindo</td>
                            </tr>
                            <tr class="border-b last:border-b-0">
                                <td class="py-3 px-6 font-medium">College</td>
                                <td class="py-3 px-6">College of Information Computing</td>
                            </tr>
                            <tr class="border-b last:border-b-0">
                                <td class="py-3 px-6 font-medium">Program & Year</td>
                                <td class="py-3 px-6">BSIT - 4th Year</td>
                            </tr>
                            <tr class="border-b last:border-b-0">
                                <td class="py-3 px-6 font-medium">Phone</td>
                                <td class="py-3 px-6">0991 234 5678</td>
                            </tr>
                            <tr class="border-b last:border-b-0">
                                <td class="py-3 px-6 font-medium">Email</td>
                                <td class="py-3 px-6">aajlindo@usep.edu.ph</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-6 font-medium">Change password</td>
                                <td class="py-3 px-6">********</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
