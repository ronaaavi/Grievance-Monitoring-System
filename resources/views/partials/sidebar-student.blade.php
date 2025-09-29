<div class="flex flex-col h-full">
    <nav class="flex flex-col gap-0 pt-2">
        <!-- Dashboard -->
        <a href="{{ route('student.dashboard') }}"
           class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full
                  {{ request()->routeIs('student.dashboard') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                 viewBox="0 0 16 16" class="w-6 h-6">
                <path fill-rule="evenodd" d="M8 3.293l6 6V14.5a.5.5 0 0 1-.5.5h-3v-3H6v3H3.5a.5.5 0 0 1-.5-.5V9.293l6-6zm5 6.414V14.5A1.5 1.5 0 0 1 11.5 16h-3a.5.5 0 0 1-.5-.5V13H6v2.5A1.5 1.5 0 0 1 4.5 16h-3A1.5 1.5 0 0 1 0 14.5V9.707l8-8 8 8z"/>
            </svg>
            <span class="text-base">Dashboard</span>
        </a>
        <!-- Grievances -->
        <a href="{{ route('student.grievances') }}"
           class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full
                  {{ request()->routeIs('student.grievances') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path d="M3 6a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6zm2 0v12h14V6H5zm2 2h10v2H7V8zm0 4h6v2H7v-2z"/>
            </svg>
            <span class="text-base">Grievances</span>
        </a>
        <!-- Profile -->
        <a href="{{ route('student.profile') }}"
           class="flex items-center gap-3 px-6 py-4 rounded-r-lg font-medium cursor-pointer transition-colors w-full
                  {{ request()->routeIs('student.profile') ? 'bg-red-900 text-white' : 'text-red-900 hover:bg-red-800 hover:text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                 viewBox="0 0 24 24" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4zm0-2a4 4 0 100-8 4 4 0 000 8z"/>
            </svg>
            <span class="text-base">Profile</span>
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
