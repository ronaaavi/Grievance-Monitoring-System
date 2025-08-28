<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard | GMS</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { 
      font-family: 'Inter', sans-serif; 
      overflow: hidden; /* prevents scrolling */
    }
  </style>
</head>
<body class="bg-white h-screen flex flex-col">

  <!-- HEADER -->
  <header class="flex items-center justify-between bg-white border-b border-gray-200 px-6 py-4 flex-shrink-0">
    <div class="flex items-center space-x-3">
      <img src="images/LOGO_GMS.png" alt="GMS Logo" class="h-10">
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

      <!-- Header Avatar -->
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" 
           class="w-8 h-8 rounded-full border text-gray-600">
        <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
      </svg>
    </div>
  </header>

  <!-- MAIN LAYOUT -->
  <div class="flex flex-grow overflow-hidden">
    <!-- SIDEBAR -->
    <aside class="w-80 bg-white border-r border-gray-200 flex flex-col">
      <nav class="flex-grow p-4 space-y-2">
        <a href="#" class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold text-gray-700 hover:bg-red-800 hover:text-white bg-red-800 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
          </svg>
          <span class="text-base">Dashboard</span>
        </a>
      </nav>
      <div class="p-4 border-t border-gray-200">
        <a href="#" class="flex items-center space-x-4 px-4 py-3 rounded-lg font-semibold text-gray-600 hover:bg-red-900 hover:text-white">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M16 13v-2H7V8l-5 4 5 4v-3h9zm3-10H5c-1.1 
                     0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 
                     1.1.9 2 2 2h14c1.1 0 2-.9 
                     2-2V5c0-1.1-.9-2-2-2z"/>
          </svg>
          <span class="text-base">Log out</span>
        </a>
      </div>
    </aside>

    <!-- CONTENT AREA -->
    <main class="flex-grow bg-white p-8 flex flex-col overflow-hidden">
      <!-- TOP CARD -->
      <div class="bg-[#6f0909] text-white rounded-xl flex items-center justify-between p-10 mb-10 flex-shrink-0">
        <div class="flex flex-col justify-between h-32">
          <p class="text-sm">August 26, 2025</p>
          <div>
            <h2 class="text-3xl font-bold">Welcome back, Rona!</h2>
            <p class="text-sm">Keep track of your grievance history and make sure your record stays clean.</p>
          </div>
        </div>
        <img src="images/Sticker.png" alt="Student Illustration" class="h-40 object-contain">  
      </div>

      <!-- TOP ROW: 3 Stats + Profile -->
      <div class="flex gap-6 mb-8 flex-shrink-0">
        <div class="flex gap-6 flex-grow">
          <div class="bg-white rounded-2xl shadow p-6 text-center aspect-square flex flex-col justify-center">
            <p class="text-4xl font-bold text-red-800">2</p>
            <p class="text-gray-600">Total Cases</p>
          </div>
          <div class="bg-white rounded-2xl shadow p-6 text-center aspect-square flex flex-col justify-center">
            <p class="text-4xl font-bold text-yellow-500">1</p>
            <p class="text-gray-600">Active Cases</p>
          </div>
          <div class="bg-white rounded-2xl shadow p-6 text-center aspect-square flex flex-col justify-center">
            <p class="text-4xl font-bold text-green-600">1</p>
            <p class="text-gray-600">Resolved Cases</p>
          </div>
        </div>

        <!-- PROFILE CARD (with upload plus sign) -->
        <div class="w-80 bg-white rounded-2xl shadow p-6 flex flex-col justify-between">
          <div class="relative">
            <!-- SVG Avatar -->
            <svg id="profileAvatar" xmlns="http://www.w3.org/2000/svg" 
                 fill="currentColor" viewBox="0 0 24 24" 
                 class="h-20 w-20 rounded-full border text-gray-600 mx-auto mb-4">
              <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                       0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
            </svg>

            <label for="profileUpload" 
                   class="absolute bottom-0 right-0 bg-red-900 text-white rounded-full p-1 cursor-pointer hover:bg-red-800">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                   stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
              </svg>
            </label>
            <input type="file" id="profileUpload" class="hidden" accept="image/*" onchange="previewProfile(event)">
          </div>

          <h4 class="font-semibold text-center">Rona Arbe B. Limbago</h4>
          <p class="text-sm text-gray-600 text-center">Student</p>
          <div class="mt-4 text-sm text-gray-700 space-y-1">
            <p><span class="font-semibold">Student ID:</span> 2022-00720</p>
            <p><span class="font-semibold">Email:</span> rablimbago00720@usep.edu.ph</p>
            <p><span class="font-semibold">Course:</span> BSIT-4A</p>
            <p><span class="font-semibold">Status:</span> Good Status</p>
          </div>

          <button class="mt-4 px-4 py-2 bg-red-900 text-white rounded-lg hover:bg-red-800">Edit Profile</button>
        </div>
      </div>

      <!-- TABLE -->
      <div class="bg-white rounded-2xl shadow p-6 overflow-x-auto flex-grow">
        <h3 class="text-lg font-semibold mb-4">My Grievances</h3>
        <table class="w-full text-sm text-left border-collapse">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-4 py-2">Case ID</th>
              <th class="px-4 py-2">Type</th>
              <th class="px-4 py-2">Status</th>
              <th class="px-4 py-2">Date</th>
              <th class="px-4 py-2">Remarks</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="px-4 py-2">CASE-2025-004</td>
              <td class="px-4 py-2">Spot Report</td>
              <td class="px-4 py-2 text-green-600 font-semibold">Resolved</td>
              <td class="px-4 py-2">18/06/2025</td>
              <td class="px-4 py-2">Warning Issued</td>
            </tr>
            <tr class="border-t">
              <td class="px-4 py-2">CASE-2025-003</td>
              <td class="px-4 py-2">ARF</td>
              <td class="px-4 py-2 text-green-600 font-semibold">Resolved</td>
              <td class="px-4 py-2">22/05/2025</td>
              <td class="px-4 py-2">Warning Issued</td>
            </tr>
            <tr class="border-t">
              <td class="px-4 py-2">CASE-2025-001</td>
              <td class="px-4 py-2">Spot Report</td>
              <td class="px-4 py-2 text-yellow-500 font-semibold">Active</td>
              <td class="px-4 py-2">18/06/2025</td>
              <td class="px-4 py-2">For Investigation</td>
            </tr>
            <tr class="border-t">
              <td class="px-4 py-2">CASE-2025-002</td>
              <td class="px-4 py-2">Spot Report</td>
              <td class="px-4 py-2 text-yellow-500 font-semibold">Active</td>
              <td class="px-4 py-2">06/05/2025</td>
              <td class="px-4 py-2">For Investigation</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- FOOTER -->
      <footer class="w-full text-center py-4 text-sm text-gray-600 border-t border-gray-200 flex-shrink-0">
        <p>
          Copyright &copy; 2025. All Rights Reserved
          <a href="#" class="text-blue-600 hover:underline">Terms of Use</a> |
          <a href="https://www.usep.edu.ph/usep-data-privacy-statement/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
            Privacy Policy
          </a>
        </p>
      </footer>
    </main>
  </div>

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

    function previewProfile(event) {
      const avatar = document.getElementById('profileAvatar');
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = e => {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.className = "h-20 w-20 rounded-full border mx-auto mb-4 object-cover";
          avatar.replaceWith(img);
        };
        reader.readAsDataURL(file);
      }
    }
  </script>
</body>
</html>
