<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'OSAS System')</title>

  <!-- Tailwind CSS -->
  @vite('resources/css/app.css')

  @stack('head')
</head>
<body class="bg-gray-100 font-sans antialiased">

  {{-- HEADER --}}
  <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-3 flex items-center justify-between">
      
      <div class="flex items-center space-x-3">
          <!-- Grievance Logo -->
          <img src="{{ asset('images/Logo_GMS.png') }}" alt="Grievance Monitoring System Logo" class="h-10">

          <!-- System Title -->
          <div>
              <span class="text-lg font-bold text-gray-800 block">GRIEVANCE</span>
              <span class="text-sm text-gray-500">MONITORING SYSTEM</span>
          </div>
      </div>

      
