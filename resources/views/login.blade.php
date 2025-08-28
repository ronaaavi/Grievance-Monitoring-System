<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grievance Monitoring System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
            body { font-family: 'Inter', sans-serif; }
        </style>
    @endif
</head>
<body class="bg-white min-h-screen flex flex-col">

    <!-- Consent Modal -->
    <div id="consentModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50">
        <div class="bg-white p-8 rounded-xl w-full max-w-md shadow-lg text-center relative">
            <img src="{{ asset('images/consent.png') }}" alt="Consent" class="mx-auto mb-6 h-40">
            <p class="text-sm leading-relaxed mb-6 text-gray-800">
                By continuing to use the <span class="font-semibold">GMS</span>, you agree to the
                <a href="https://www.usep.edu.ph" class="text-red-800 hover:underline" target="_blank">
                    University of Southeastern Philippines’ Data Privacy Statement
                </a>.
            </p>
            <button onclick="hideConsent()" class="bg-red-900 hover:bg-red-800 text-white font-semibold py-2 px-6 rounded-full">
                CONTINUE
            </button>
        </div>
    </div>

 
    <main class="flex-grow flex">
        
        <div class="w-1/2 min-h-screen flex items-center justify-center">
            <div class="w-[400px] bg-white border rounded-xl shadow-xl px-8 py-6 flex flex-col items-center">
               
                <div class="mb-4">
                    <img src="{{ asset('images/osas_logo.png') }}" alt="Logo" class="h-20 mx-auto">
                </div>

                
                <div class="w-full">
                    <h1 class="text-3xl font-bold text-center text-black mb-1">Login</h1>
                    <div class="w-12 h-[2px] bg-[#a10101] mx-auto mb-6"></div>

                    
                    <form id="loginForm" action="/login" method="POST" class="space-y-4 opacity-30 pointer-events-none">
                        @csrf

                     
                        <input type="text" name="email" placeholder="ID Number" required
                               class="w-full border-b border-gray-400 focus:border-[#a10101] focus:outline-none py-2 text-gray-800 bg-transparent">

                        
                        <input type="password" name="password" placeholder="Password" required
                               class="w-full border-b border-gray-400 focus:border-[#a10101] focus:outline-none py-2 text-gray-800 bg-transparent">

                        
                        <div class="flex justify-between items-center text-sm text-gray-600">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="remember" class="accent-[#a10101]">
                                <span>Remember me</span>
                            </label>
                            <a href="#" class="text-blue-600 hover:underline">Forgot password? <span class="text-blue-600 font-bold"></span></a>
                        </div>

                    
                        <button type="submit"
                                class="w-full bg-red-900 hover:bg-red-700 text-white font-semibold py-3 rounded-full transition mb-6 border border-white-400">
                            LOGIN
                        </button>

                      
                        <div class="flex items-center my-6">
                            <hr class="flex-grow border-t border-gray-300">
                            <span class="mx-2 text-gray-500 text-sm">or</span>
                            <hr class="flex-grow border-t border-gray-300">
                        </div>

                        <div class="h-10"></div>
                    </form>
                </div>
            </div>
        </div>

       
        <div class="w-1/2 bg-white"></div>
    </main>


    <footer class="w-full text-center py-4 border-t border-gray-300 text-sm text-gray-600">
        <p>
            Copyright &copy; 2025. All Rights Reserved
            <a href="#" class="text-blue-600 hover:underline">Terms of Use</a> |
            <a href="https://www.usep.edu.ph/usep-data-privacy-statement/"
       target="_blank" rel="noopener noreferrer"
       class="text-blue-600 hover:underline">
      Privacy Policy
    </a>
    </p>
    </footer>

    <script>
        function hideConsent() {
            document.getElementById('consentModal').style.display = 'none';
            const form = document.getElementById('loginForm');
            form.classList.remove('opacity-30', 'pointer-events-none');
        }
    </script>
</body>
</html>

