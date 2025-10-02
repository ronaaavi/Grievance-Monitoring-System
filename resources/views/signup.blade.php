<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account | GMS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
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
        <div class="text-left mb-10 sm:mb-12">
          <h1 class="text-lg sm:text-xl font-semibold text-white inline-block relative">
            <span class="block">Create account</span>
            <span class="block h-[2px] bg-white mt-2 w-full"></span>
          </h1>
        </div>

        <!-- Form -->
        <!-- Step 1: Details Form -->
        <form id="step1Form" action="#" method="POST" class="space-y-6 sm:space-y-8">
          @csrf

          <!-- Student Fields -->
          <div id="studentFields" class="space-y-6 sm:space-y-8">
            <!-- Account Type and Student ID -->
            <div class="flex gap-4 w-full">
              <div class="flex-1 relative">
                <select name="account_type" id="accountTypeSelect" onchange="selectAccountType(this.value)" required
                        class="w-full border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent text-sm sm:text-base appearance-none cursor-pointer pr-8">
                  <option value="" disabled selected style="background-color: #DC5656; color: rgba(255,255,255,0.7);">Student</option>
                  <option value="student" style="background-color: #DC5656; color: white;">Student</option>
                  <option value="staff" style="background-color: #DC5656; color: white;">Staff</option>
                </select>
                <!-- Custom arrow for select -->
                <div class="pointer-events-none absolute right-0 top-1">
                  <svg class="w-4 h-4 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </div>
              </div>
              <input type="text" name="student_id" placeholder="Student ID" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
            </div>

            <!-- First Name and Middle Initial -->
            <div class="flex gap-4 w-full">
              <input type="text" name="first_name" placeholder="First Name" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
              <input type="text" name="middle_initial" placeholder="Middle Initial"
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
            </div>

            <!-- Last Name and Suffix -->
            <div class="flex gap-4 w-full">
              <input type="text" name="last_name" placeholder="Last Name" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
              <input type="text" name="suffix" placeholder="Suffix"
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
            </div>

            <!-- College -->
            <div class="w-full">
              <input type="text" name="college" placeholder="College" required
                     class="w-full border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
            </div>

            <!-- Program and Year -->
            <div class="flex gap-4 w-full">
              <input type="text" name="program" placeholder="Program" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
              <input type="text" name="year" placeholder="Year" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
            </div>
          </div>

          <!-- Staff Fields -->
          <div id="staffFields" class="space-y-6 sm:space-y-8 hidden">
            <!-- Staff and Employee ID -->
            <div class="flex gap-4 w-full">
              <div class="flex-1 relative">
                <select name="staff_type" required
                        class="w-full border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent text-sm sm:text-base appearance-none cursor-pointer pr-8">
                  <option value="" disabled selected style="background-color: #DC5656; color: rgba(255,255,255,0.7);">Staff</option>
                  <option value="academic" style="background-color: #DC5656; color: white;">Academic Staff</option>
                  <option value="administrative" style="background-color: #DC5656; color: white;">Administrative Staff</option>
                  <option value="support" style="background-color: #DC5656; color: white;">Support Staff</option>
                </select>
              </div>
              <input type="text" name="employee_id" placeholder="Employee ID" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
            </div>

            <!-- First Name and Middle Initial -->
            <div class="flex gap-4 w-full">
              <input type="text" name="first_name" placeholder="First Name" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
              <input type="text" name="middle_initial" placeholder="Middle Initial"
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
            </div>

            <!-- Last Name and Suffix -->
            <div class="flex gap-4 w-full">
              <input type="text" name="last_name" placeholder="Last Name" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
              <input type="text" name="suffix" placeholder="Suffix"
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
            </div>

            <!-- Office/Department/College -->
            <div class="w-full relative">
              <select name="department" required
                      class="w-full border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent text-sm sm:text-base appearance-none cursor-pointer pr-8">
                <option value="" disabled selected style="background-color: #DC5656; color: rgba(255,255,255,0.7);">Office / Department / College</option>
                <option value="college_of_arts_and_sciences" style="background-color: #DC5656; color: white;">College of Arts and Sciences</option>
                <option value="college_of_business" style="background-color: #DC5656; color: white;">College of Business</option>
                <option value="college_of_education" style="background-color: #DC5656; color: white;">College of Education</option>
                <option value="registrar_office" style="background-color: #DC5656; color: white;">Registrar's Office</option>
                <option value="student_affairs" style="background-color: #DC5656; color: white;">Student Affairs</option>
                <option value="human_resources" style="background-color: #DC5656; color: white;">Human Resources</option>
              </select>
            </div>

            <!-- Position and Phone -->
            <div class="flex gap-4 w-full">
              <input type="text" name="position" placeholder="Position" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
              <input type="tel" name="phone" placeholder="Phone" required
                     class="flex-1 border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
            </div>
          </div>

          <!-- Next Button -->
          <div class="flex justify-end">
            <button type="button" onclick="nextStep()" 
                    class="w-12 h-12 bg-white text-[#DC5656] rounded-full flex items-center justify-center hover:bg-gray-100 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </form>        <!-- Step 2: Login Details Form (Initially Hidden) -->
        <form id="step2Form" action="/signup" method="POST" class="space-y-6 sm:space-y-8 hidden">
          @csrf

          <!-- Username -->
          <div class="w-full">
            <input type="text" name="username" placeholder="Username" required
                   class="w-full border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base">
          </div>

          <!-- Password with Eye Icon -->

          <div class="relative w-full">
            <input type="password" id="password" name="password" placeholder="Password" required
                   class="w-full border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base pr-10">
            <button type="button" onclick="togglePassword()" 
                    class="absolute right-0 top-2 text-white/80">
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

          <!-- Confirm Password with Eye Icon -->
          <div class="relative w-full">
            <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password" required
                   class="w-full border-b border-white/70 focus:border-white focus:outline-none pb-3 text-white/80 bg-transparent placeholder-white/70 text-sm sm:text-base pr-10">
            <button type="button" onclick="toggleConfirmPassword()" 
                    class="absolute right-0 top-2 text-white/80">
              <svg id="confirmEyeIcon" xmlns="http://www.w3.org/2000/svg" 
                   fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                   class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </button>
          </div>

          <!-- Terms and Conditions -->
          <div class="flex items-center space-x-2 text-white/80 text-xs sm:text-sm">
            <input type="checkbox" name="agree_terms" required class="w-5 h-5">
            <span>I Agree To The Terms & Conditions</span>
          </div>

          <!-- Sign Up Button -->
          <button type="submit"
                  class="w-full bg-white text-black font-semibold py-2.5 sm:py-3 rounded-full text-sm sm:text-base uppercase hover:bg-gray-100 transition">
            SIGN UP
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
    function selectAccountType(type) {
      const studentFields = document.getElementById('studentFields');
      const staffFields = document.getElementById('staffFields');
      
      // Hide all fields first
      studentFields.classList.add('hidden');
      staffFields.classList.add('hidden');
      
      // Show the appropriate fields based on selection
      if (type === 'student') {
        studentFields.classList.remove('hidden');
        // Change the dropdown placeholder to show "Student" as selected
        document.getElementById('accountTypeSelect').selectedIndex = 1;
      } else if (type === 'staff') {
        staffFields.classList.remove('hidden');
        // Hide student fields when staff is selected
        studentFields.classList.add('hidden');
      }
    }

    // Show student fields by default when page loads
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('studentFields').classList.remove('hidden');
    });

    function nextStep() {
      // Hide step 1 form
      document.getElementById('step1Form').classList.add('hidden');
      // Show step 2 form
      document.getElementById('step2Form').classList.remove('hidden');
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

    function toggleConfirmPassword() {
      const pwd = document.getElementById("confirmPassword");
      const eye = document.getElementById("confirmEyeIcon");

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
