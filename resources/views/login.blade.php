<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | GMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen flex">

    <!-- Left Section - Red Gradient with Login Form -->
    <div class="w-1/2 h-full bg-gradient-to-br from-[#6f0909] to-[#450606] flex items-center justify-center">
        <!-- Glassy Login Box -->
        <div class="w-[85%] max-w-[420px] bg-white bg-opacity-10 rounded-2xl p-10 shadow-2xl">
            <h1 class="text-4xl font-bold text-center text-white mb-2">Login</h1>
            <div class="w-16 h-[2px] bg-white mx-auto mb-8"></div>

            <form id="loginForm" action="/login" method="POST" class="space-y-6">
                @csrf

                <!-- ID Number -->
                <input type="text" name="email" placeholder="ID Number" required
                       class="w-full border-b-2 border-white focus:border-white focus:outline-none py-3 text-white bg-transparent placeholder-white text-lg font-medium">

                <!-- Password -->
                <div class="relative">
                    <input type="password" name="password" placeholder="Password" required
                           class="w-full border-b-2 border-white focus:border-white focus:outline-none py-3 text-white bg-transparent placeholder-white pr-10 text-lg font-medium">
                </div>

                <!-- Remember Me + Forgot Password -->
                <div class="flex justify-between items-center text-white">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" class="accent-white w-4 h-4">
                        <span class="text-lg font-medium">Remember me</span>
                    </label>
                    <a href="#" class="text-white hover:underline text-lg font-medium">Forget password?</a>
                </div>

                <!-- Login Button -->
                <button type="submit"
                        class="w-full bg-white text-[#6f0909] font-bold py-4 rounded-lg transition mb-6 text-xl">
                    LOGIN
                </button>

                <!-- Divider -->
                <div class="flex items-center my-6">
                    <hr class="flex-grow border-t-2 border-white">
                    <span class="mx-4 text-white text-lg font-medium">or</span>
                    <hr class="flex-grow border-t-2 border-white">
                </div>

                <!-- Google Button (styled like screenshot: white bg, maroon text) -->
                <button type="button" onclick="signInWithGoogle()"
                        class="w-full bg-white text-[#6f0909] font-semibold py-4 rounded-lg transition text-lg hover:bg-gray-100">
                    Sign in with Google
                </button>

                <!-- Signup Link -->
                <div class="text-center text-white text-lg mt-6 font-medium">
                    Don’t have an account? <a href="#" class="underline hover:no-underline font-semibold">Sign up</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Section - Illustration -->
    <div class="w-1/2 bg-white h-full flex flex-col items-center justify-between px-12">
        <!-- Illustration -->
        <div class="flex-1 flex items-center justify-center">
            <img src="{{ asset('images/Login_pic.png') }}" 
                 alt="Login Illustration" 
                 class="h-[650px] w-auto object-contain"> <!-- Increased size -->
        </div>

        <!-- Copyright -->
        <div class="text-lg text-gray-400 pb-6 text-center tracking-wide">
            © Office of Student Affairs and Services. All Rights Reserved.
        </div>
    </div>

    <script>
        function signInWithGoogle() {
            alert("Google Sign-in will be integrated later.");
        }
    </script>

</body>
</html>
