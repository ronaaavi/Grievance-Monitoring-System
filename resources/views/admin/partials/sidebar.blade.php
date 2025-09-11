<!-- Admin Sidebar -->
<a href="{{ route('admin.dashboard') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          {{ request()->routeIs('admin.dashboard') ? 'bg-red-800 text-white' : 'text-gray-700 hover:bg-red-800 hover:text-white' }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
    </svg>
    <span class="text-base">Dashboard</span>
</a>

<a href="{{ route('admin.action-history') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          {{ request()->routeIs('admin.action-history') ? 'bg-red-800 text-white' : 'text-gray-700 hover:bg-red-800 hover:text-white' }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 
                 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
    </svg>
    <span class="text-base">Action History</span>
</a>

<a href="{{ route('admin.grievance-reports') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          {{ request()->routeIs('admin.grievance-reports') ? 'bg-red-800 text-white' : 'text-gray-700 hover:bg-red-800 hover:text-white' }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
        <path d="M5 4h14v2H5V4zm0 6h14v2H5v-2zm0 6h14v2H5v-2z"/>
    </svg>
    <span class="text-base">Grievance Reports</span>
</a>

<a href="{{ route('admin.manage-staff') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          {{ request()->routeIs('admin.manage-staff') ? 'bg-red-800 text-white' : 'text-gray-700 hover:bg-red-800 hover:text-white' }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
        <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 
                 2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
    </svg>
    <span class="text-base">Manage Staff</span>
</a>

<a href="{{ route('admin.manage-students') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          {{ request()->routeIs('admin.manage-students') ? 'bg-red-800 text-white' : 'text-gray-700 hover:bg-red-800 hover:text-white' }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
        <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 
                 2.3-5 5 2.3 5 5 5zm-6 8c0-2.2 
                 4-3.5 6-3.5s6 1.3 6 3.5v2H6v-2z"/>
    </svg>
    <span class="text-base">Manage Students</span>
</a>

<a href="{{ route('admin.profile') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          {{ request()->routeIs('admin.profile') ? 'bg-red-800 text-white' : 'text-gray-700 hover:bg-red-800 hover:text-white' }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
        <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 
                 2.3-5 5 2.3 5 5 5zm0 2c-3.3 
                 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
    </svg>
    <span class="text-base">Profile</span>
</a>

<a href="{{ route('admin.settings') }}" 
   class="flex items-center space-x-4 px-4 py-4 rounded-lg font-semibold 
          {{ request()->routeIs('admin.settings') ? 'bg-red-800 text-white' : 'text-gray-700 hover:bg-red-800 hover:text-white' }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
        <path d="M12 8c-2.2 0-4 1.8-4 4s1.8 4 
                 4 4 4-1.8 4-4-1.8-4-4-4zm8.9 
                 4c0-.5 0-1-.1-1.5l2.1-1.6-2-3.5-2.5 
                 1c-.7-.5-1.4-.9-2.2-1.2l-.4-2.6h-4l-.4 
                 2.6c-.8.3-1.6.7-2.2 1.2l-2.5-1-2 
                 3.5 2.1 1.6c0 .5-.1 1-.1 
                 1.5s0 1 .1 1.5l-2.1 1.6 2 
                 3.5 2.5-1c.7.5 1.4.9 
                 2.2 1.2l.4 2.6h4l.4-2.6c.8-.3 
                 1.6-.7 2.2-1.2l2.5 1 2-3.5-2.1-1.6c.1-.5.1-1 .1-1.5z"/>
    </svg>
    <span class="text-base">Settings</span>
</a>