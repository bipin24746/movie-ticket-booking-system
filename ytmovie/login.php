<div class="bg-gray-900">
        <div class="flex justify-center items-center ">
            <div class="bg-gray-800 rounded-lg p-8 max-w-sm w-full" id="loginForm" style="display: none;">
                <div class="flex justify-end">
                    <button class="text-white hover:text-gray-400" id="loginCloseBtn">&times;</button>
                </div>
                <h1 class="text-3xl text-center text-white mb-6">Sign In</h1>
                <div class="mt-4">
                    <input type="email" name="email" placeholder="Email" class="w-full bg-gray-700 rounded-sm px-4 py-3 text-white placeholder-gray-500">
                </div>
                <div class="mt-4">
                    <input type="password" name="password" placeholder="Password" class="w-full bg-gray-700 rounded-sm px-4 py-3 text-white placeholder-gray-500">
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-sm font-medium hover:bg-blue-500 transition duration-200">Sign In</button>
                </div>
                <div class="mt-4 text-center text-white">
                    Don't have an account? <a href="#" class="text-blue-500">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.getElementById("registerLink").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("signupForm").style.display = "block";
        document.getElementById("loginForm").style.display = "none";
    });

    document.getElementById("loginLink").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("loginForm").style.display = "block";
        document.getElementById("signupForm").style.display = "none";
    });

    document.getElementById("signupCloseBtn").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("signupForm").style.display = "none";
    });

    document.getElementById("loginCloseBtn").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("loginForm").style.display = "none";
    });
</script>