<div class="flex flex-col h-full">
    <nav class="flex flex-col gap-0 pt-2 flex-1">
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full {{ request()->routeIs('admin.dashboard') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-6 h-6">
                <path fill-rule="evenodd" d="M8 3.293l6 6V14.5a.5.5 0 0 1-.5.5h-3v-3H6v3H3.5a.5.5 0 0 1-.5-.5V9.293l6-6zm5 6.414V14.5A1.5 1.5 0 0 1 11.5 16h-3a.5.5 0 0 1-.5-.5V13H6v2.5A1.5 1.5 0 0 1 4.5 16h-3A1.5 1.5 0 0 1 0 14.5V9.707l8-8 8 8z"/>
            </svg>
            <span class="text-base">Dashboard</span>
        </a>
        <!-- Manage Staff -->
        <a href="{{ route('admin.manage-staff') }}"
           class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full {{ request()->routeIs('admin.manage-staff') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM8 11c1.657 0 3-1.343 3-3S9.657 5 8 5 5 6.343 5 8s1.343 3 3 3zm8 2c-2.21 0-4 1.79-4 4v2h8v-2c0-2.21-1.79-4-4-4zm-8 0c-2.21 0-4 1.79-4 4v2h8v-2c0-2.21-1.79-4-4-4z"/>
            </svg>
            <span class="text-base">Manage Staff</span>
        </a>
        <!-- Manage Students -->
        <a href="{{ route('admin.manage-students') }}"
           class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full {{ request()->routeIs('admin.manage-students') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 4 4 0 000 8z"/>
            </svg>
            <span class="text-base">Manage Students</span>
        </a>
          <!-- All Grievance Reports -->
          <a href="{{ route('admin.all-grievances-reports') }}"
              class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full {{ request()->routeIs('admin.all-grievances-reports') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2h6v2M7 7h10v10a2 2 0 01-2 2H9a2 2 0 01-2-2V7z"/>
            </svg>
            <span class="text-base">All Grievance Reports</span>
        </a>
        <!-- Action History -->
        <a href="{{ route('admin.action-history') }}"
           class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full {{ request()->routeIs('admin.action-history') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="text-base">Action History</span>
        </a>
        <!-- Profile -->
        <a href="{{ route('admin.profile') }}"
           class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full {{ request()->routeIs('admin.profile') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 4 4 0 000 8z"/>
            </svg>
            <span class="text-base">Profile</span>
        </a>
        <!-- Settings -->
        <a href="{{ route('admin.settings') }}"
           class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full {{ request()->routeIs('admin.settings') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.983 4.223a1 1 0 011.034 0l1.518.878a1 1 0 001.414-.414l.607-1.175a1 1 0 011.29-.447l1.392.557a1 1 0 01.553 1.29l-.557 1.392a1 1 0 00.447 1.29l1.175.607a1 1 0 01.414 1.414l-.878 1.518a1 1 0 000 1.034l.878 1.518a1 1 0 01-.414 1.414l-1.175.607a1 1 0 00-.447 1.29l.557 1.392a1 1 0 01-.553 1.29l-1.392.557a1 1 0 01-1.29-.447l-.607-1.175a1 1 0 00-1.29-.447l-1.518.878a1 1 0 01-1.034 0l-1.518-.878a1 1 0 00-1.29.447l-.607 1.175a1 1 0 01-1.29.447l-1.392-.557a1 1 0 01-.553-1.29l.557-1.392a1 1 0 00-.447-1.29l-1.175-.607a1 1 0 01-.414-1.414l.878-1.518a1 1 0 000-1.034l-.878-1.518a1 1 0 01.414-1.414l1.175-.607a1 1 0 00.447-1.29l-.557-1.392a1 1 0 01.553-1.29l1.392-.557a1 1 0 011.29.447l.607 1.175a1 1 0 001.29.447l1.518-.878zM12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z"/>
            </svg>
            <span class="text-base">Settings</span>
        </a>
    </nav>
    <form method="POST" action="{{ route('logout') }}" class="mt-auto">
        @csrf
        <button type="submit" class="flex items-center gap-3 px-6 py-4 font-medium text-red-900 hover:bg-red-800 hover:text-white transition-colors rounded-r-lg w-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 flex-shrink-0">
                <path d="M16 13v-2H7V8l-5 4 5 4v-3h9zm3-10H5c-1.1 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
            </svg>
            <span class="sidebar-text text-base">Log out</span>
        </button>
    </form>
</div>
