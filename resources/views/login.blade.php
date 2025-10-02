<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | GMS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
    /* Transparent custom checkbox style */
    input[type="checkbox"] {
      appearance: none;
      width: 22px;
      height: 22px;
      border: 2px solid #fff;
      border-radius: 4px;
      background: transparent;
      cursor: pointer;
      position: relative;
    }
    input[type="checkbox"]:checked::after {
      content: '✔';
      position: absolute;
      top: -2px;
      left: 3px;
      font-size: 16px;
      color: white;
    }
  </style>
</head>
<body class="min-h-screen w-screen flex flex-col lg:flex-row">

  <!-- Left Panel -->
  <div class="w-full lg:w-1/2 min-h-screen lg:h-screen bg-gradient-to-br from-[#DC5656] via-[#800000] to-[#EB6E6E] 
              flex flex-col justify-between rounded-none lg:rounded-r-[60px] shadow-xl px-4 sm:px-6 md:px-14 py-6 sm:py-8 md:py-12">

    <div class="flex-1 flex items-center justify-center py-4 sm:py-6 lg:py-0">
      <!-- Slightly larger form container -->
      <div class="w-full max-w-[400px] sm:max-w-[480px]">

        <!-- Title -->
        <div class="text-center mb-6 sm:mb-8">
          <h1 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-white inline-block relative">
            <span class="block">Login</span>
            <span class="block h-[3px] bg-white mt-3 sm:mt-5 w-full"></span>
          </h1>
        </div>

        <!-- Form -->
        <form id="loginForm" action="/login" method="POST" class="space-y-4 sm:space-y-6">
          @csrf

          <!-- Username -->
          <div class="w-full">
            <input type="text" name="email" placeholder="Username" required
                   class="w-full border-b border-white focus:border-white focus:outline-none pb-3 text-white bg-transparent placeholder-white text-sm sm:text-base">
          </div>

          <!-- Password with Eye Icon -->
          <div class="relative w-full">
            <input type="password" id="password" name="password" placeholder="Password" required
                   class="w-full border-b border-white focus:border-white focus:outline-none pb-3 text-white bg-transparent placeholder-white text-sm sm:text-base pr-10">
            <button type="button" onclick="togglePassword()" 
                    class="absolute right-0 top-2 text-white">
              <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" 
                   fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                   class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </button>
          </div>

          <!-- Remember me + Forgot password -->
          <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center text-white text-xs sm:text-sm gap-2 sm:gap-0">
            <label class="flex items-center space-x-2">
              <input type="checkbox" name="remember" class="w-4 h-4">
              <span>Remember me</span>
            </label>
            <a href="#" class="hover:underline">Forgot password?</a>
          </div>

          <!-- Login Button -->
          <button type="submit"
                  class="w-full bg-white text-black font-semibold py-2.5 sm:py-3 rounded-full text-sm sm:text-base uppercase hover:bg-gray-100 transition">
            LOGIN
          </button>

          <!-- Divider -->
          <div class="flex items-center my-3 sm:my-4">
            <hr class="flex-grow border-t border-white">
            <span class="mx-3 text-white text-xs sm:text-sm">or</span>
            <hr class="flex-grow border-t border-white">
          </div>

          <!-- Google Sign-in -->
          <button type="button" onclick="signInWithGoogle()"
                  class="w-full bg-white text-black font-medium py-2.5 sm:py-3 rounded-full text-sm sm:text-base flex items-center justify-center gap-3 hover:bg-gray-100 transition">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google Logo" class="w-5 h-5 sm:w-6 sm:h-6">
            <span class="hidden sm:inline">Sign in with Google</span>
            <span class="sm:hidden">Google</span>
          </button>
        </form>
      </div>
    </div>

    <!-- Signup link -->
    <div class="text-center text-white text-sm mt-6 md:mb-6">
      Don’t have an account? 
      <a href="#" class="text-blue-300 hover:underline font-semibold">Sign up</a>
    </div>
  </div>

  <!-- Right Panel -->
  <div class="w-full md:w-1/2 bg-white h-screen flex flex-col">
    <div class="flex-1 flex items-center justify-center">
      <img src="{{ asset('images/Login_pic.png') }}" 
           alt="Login Illustration" 
           class="w-full max-w-[600px] mx-auto"> 
    </div>

    <div class="flex-shrink-0 text-sm text-gray-400 text-center tracking-wide py-4 px-6 md:px-12">
      © 2025 Office of Student Affairs and Services. All Rights Reserved.
    </div>
  </div>

  <script>
    function signInWithGoogle() {
      alert("Google Sign-in will be integrated later.");
    }

    function togglePassword() {
      const pwd = document.getElementById("password");
      const eye = document.getElementById("eyeIcon");

      if (pwd.type === "password") {
        pwd.type = "text";
        eye.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.97 9.97 0 012.224-3.592M9.88 9.88A3 3 0 0114.12 14.12M6.1 6.1l11.8 11.8" />`;
      } else {
        pwd.type = "password";
        eye.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
      }
    }
  </script>
</body>
</html>
