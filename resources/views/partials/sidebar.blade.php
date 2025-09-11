 <a href="#" class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold text-gray-700 
       hover:bg-red-800 hover:text-white bg-red-800 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
             viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
        </svg>
        <span class="text-lg">Dashboard</span>
    </a>

    <!-- Manage Staff -->
    <a href="{{ url('/staff/manage') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M16 11c1.657 0 3-1.343 3-3s-1.343-3-3-3
                 -3 1.343-3 3 1.343 3 3 3zM8 11c1.657 
                 0 3-1.343 3-3S9.657 5 8 5 5 6.343 5 
                 8s1.343 3 3 3zm8 2c-2.21 0-4 1.79-4 
                 4v2h8v-2c0-2.21-1.79-4-4-4zm-8 0c-2.21 
                 0-4 1.79-4 4v2h8v-2c0-2.21-1.79-4-4-4z"/>
    </svg>
    <span class="text-lg">Manage Staff</span>
</a>

<!-- Manage Students -->
<a href="{{ url('/students/manage') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 
                 4 4 0 000 8z"/>
    </svg>
    <span class="text-lg">Manage Students</span>
</a>

<!-- All Grievance Reports -->
<a href="{{ url('/grievances/all') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M9 17v-2h6v2M7 7h10v10a2 2 0 01-2 2H9a2 
                 2 0 01-2-2V7z"/>
    </svg>
    <span class="text-lg">Grievance Reports</span>
</a>

<!-- Action History -->
<a href="{{ url('/actions/history') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M12 8v4l3 3m6-3a9 9 0 11-18 
                 0 9 9 0 0118 0z"/>
    </svg>
    <span class="text-lg">Action History</span>
</a>

<!-- Profile -->
<a href="{{ url('/profile') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 
                 4 4 0 000 8z"/>
    </svg>
    <span class="text-lg">Profile</span>
</a>

<!-- Settings -->
<a href="{{ url('/settings') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          text-gray-700 hover:bg-red-800 hover:text-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
         viewBox="0 0 24 24" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M11.983 4.223a1 1 0 011.034 0l1.518.878a1 1 0 001.414-.414l.607-1.175a1 1 0 011.29-.447l1.392.557a1 1 0 01.553 1.29l-.557 1.392a1 1 0 00.447 1.29l1.175.607a1 1 0 01.414 1.414l-.878 1.518a1 1 0 000 1.034l.878 1.518a1 1 0 01-.414 1.414l-1.175.607a1 1 0 00-.447 1.29l.557 1.392a1 1 0 01-.553 1.29l-1.392.557a1 1 0 01-1.29-.447l-.607-1.175a1 1 0 00-1.29-.447l-1.518.878a1 1 0 01-1.034 0l-1.518-.878a1 1 0 00-1.29.447l-.607 1.175a1 1 0 01-1.29.447l-1.392-.557a1 1 0 01-.553-1.29l.557-1.392a1 1 0 00-.447-1.29l-1.175-.607a1 1 0 01-.414-1.414l.878-1.518a1 1 0 000-1.034l-.878-1.518a1 1 0 01.414-1.414l1.175-.607a1 1 0 00.447-1.29l-.557-1.392a1 1 0 01.553-1.29l1.392-.557a1 1 0 011.29.447l.607 1.175a1 1 0 001.29.447l1.518-.878zM12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z"/>
    </svg>
    <span class="text-lg">Settings</span>
</a>
