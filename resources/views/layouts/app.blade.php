<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Dashboard') | GMS</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { 
      font-family: 'Inter', sans-serif; 
    }
  </style>
</head>
<body class="bg-white h-screen flex flex-col">

  <!-- HEADER -->
<header class="flex items-center justify-between bg-white border-b border-gray-200 px-6 h-20 flex-shrink-0">
    <div class="flex items-center space-x-3">
      <img src="/images/Logo_GMS.png" alt="GMS Logo" class="h-18">
    </div>
    <div class="flex items-center space-x-4">
      <!-- Notifications -->
      <div class="relative">
        <button id="btnNotifications" class="relative p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-red-800">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
               fill="currentColor" class="w-6 h-6 text-gray-700">
            <path d="M12 22a2.5 2.5 0 0 0 2.45-2h-4.9A2.5 2.5 0 0 0 12 22zM19 16v-5a7 7 0 1 0-14 0v5l-1.5 1.5a1 1 0 0 0 .7 1.7h16.6a1 1 0 0 0 .7-1.7L19 16z"/>
          </svg>
          <span id="notifBadge" class="absolute -top-0.5 -right-0.5 inline-flex items-center justify-center
                       text-[10px] leading-none px-1.5 h-4 rounded-full bg-red-800 text-white">3</span>
        </button>
        <div id="notifDropdown" class="hidden absolute right-0 mt-2 w-72 bg-white shadow-lg rounded-lg border border-gray-200 z-50">
          <ul class="divide-y divide-gray-100">
            <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-50"><span class="text-sm text-gray-800">New grievance submitted</span></li>
            <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-50"><span class="text-sm text-gray-800">CASE-2025-003 resolved</span></li>
            <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-50"><span class="text-sm text-gray-800">Hearing set for CASE-2025-001</span></li>
            <li class="flex items-center gap-3 px-4 py-2 hover:bg-gray-50"><span class="text-sm text-gray-800">New message from Guidance</span></li>
          </ul>
        </div>
      </div>

      <!-- Avatar -->
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" 
           class="w-8 h-8 rounded-full border text-gray-600">
        <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
      </svg>
    </div>
  </header>

  <!-- MAIN LAYOUT -->
  <div class="flex flex-1 overflow-hidden">
    
    <aside class="w-96 bg-white border-r border-gray-200 flex flex-col h-full">
  <nav class="flex-grow p-4 space-y-2">
    @yield('sidebar')
  </nav>
  <div class="p-4">
    <a href="#" class="flex items-center space-x-4 px-4 py-3 rounded-lg font-semibold text-gray-600 hover:bg-red-900 hover:text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
        <path d="M16 13v-2H7V8l-5 4 5 4v-3h9zm3-10H5c-1.1 
                 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 
                 1.1.9 2 2 2h14c1.1 0 2-.9 
                 2-2V5c0-1.1-.9-2-2-2z"/>
      </svg>
      <span class="text-lg">Log out</span>
    </a>
  </div>
</aside>

<!-- CONTENT AREA (Right side with sticky footer) -->
<main class="flex-1 bg-white flex flex-col">
  <div class="flex-grow p-10 overflow-y-auto">
    @yield('content')
  </div>
  
  <!-- FOOTER -->
  <footer class="w-full text-center py-4 text-sm text-gray-600 bg-white">
    <p>
      © Office of Student Affairs and Services. All Rights Reserved.
      <a href="#" class="text-blue-600 hover:underline">Terms of Use</a> |
      <a href="https://www.usep.edu.ph/usep-data-privacy-statement/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
        Privacy Policy
      </a>
    </p>
  </footer>
</main>
  <!-- SCRIPTS -->
  <script>
    const btnNotif = document.getElementById('btnNotifications');
    const dropdownNotif = document.getElementById('notifDropdown');

    btnNotif.addEventListener('click', () => {
      dropdownNotif.classList.toggle('hidden');
    });
    window.addEventListener('click', (e) => {
      if (!btnNotif.contains(e.target) && !dropdownNotif.contains(e.target)) {
        dropdownNotif.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
