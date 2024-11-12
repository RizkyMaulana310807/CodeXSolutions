<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeX | Login</title>
    <link rel="shortcut icon" href="img/ico/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="css/dist/output.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>

<body class="flex items-center justify-center h-screen bg-gray-900">
    <!-- Container utama -->
    <div class="w-full max-w-md p-8 space-y-6 bg-yl shadow-keycaps-yl rounded-lg border-2 border-gray-700 animate-roundingbl">
        <!-- Login Form -->
        <div id="loginForm">
            <h2 class="font-sourGummy text-2xl font-bold text-center text-gray-800">Login</h2>
            <form class="space-y-4">
                <div>
                    <label for="loginEmail" class="font-sourGummy block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="loginEmail" class="font-sourGummy w-full px-3 py-2 mt-1 rounded-md shadow-keycaps-bl bg-bl placeholder:text-gray-700 border-2 border-gray-700 transform focus:translate-y-[10px] focus:shadow-active-bl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all duration-200 ease-in-out" placeholder="you@example.com" required>
                </div>
                <div>
                    <label for="loginPassword" class="font-sourGummy block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" id="loginPassword" class="font-sourGummy w-full px-3 py-2 mt-1 rounded-md shadow-keycaps-bl bg-bl placeholder:text-gray-700 border-2 border-gray-700 transform focus:translate-y-[10px] focus:shadow-active-bl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all duration-200 ease-in-out" placeholder="••••••••" required>
                </div>
                <input type="checkbox" name="showLoginPass" id="showLoginPass">
                <label for="showLoginPass" class="font-sourGummy ">Perlihatkan password</label>
                <button type="submit" class="font-sourGummy w-full px-4 py-2 bg-gr shadow-keycaps-gr rounded-md border-2 border-gray-700 text-gray-700 transform active:translate-y-[10px] active:shadow-active-gr focus:outline-none transition-all duration-75 ease-in-out">Sign Up</button>
            </form>
            <p class="font-sourGummy text-sm text-center text-gray-600 mt-4">
                Don't have an account? <button onclick="showSignUpForm()" class="font-sourGummy text-blue-600 hover:underline">Sign up</button>
            </p>
        </div>

        <!-- Sign Up Form -->
        <div id="signUpForm" class="hidden">
            <h2 class="text-2xl font-bold text-center text-gray-800">Sign Up</h2>
            <form class="space-y-4">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                    <input type="text" id="username" class="font-sourGummy w-full px-3 py-2 mt-1 rounded-md shadow-keycaps-bl bg-bl border-2 border-gray-700 transform focus:translate-y-[10px] focus:shadow-active-bl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent placeholder:text-gray-700 transition-all duration-200 ease-in-out" placeholder="Username" required>
                </div>
                <div>
                    <label for="signUpEmail" class="font-sourGummy block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="signUpEmail" class="font-sourGummy w-full px-3 py-2 mt-1 rounded-md shadow-keycaps-bl bg-bl border-2 border-gray-700 transform focus:translate-y-[10px] focus:shadow-active-bl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent placeholder:text-gray-700 transition-all duration-200 ease-in-out" placeholder="you@example.com" required>
                </div>
                <div>
                    <label for="signUpPassword" class="font-sourGummy block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" id="signUpPassword" class="font-sourGummy w-full px-3 py-2 mt-1 rounded-md shadow-keycaps-bl bg-bl border-2 border-gray-700 transform focus:translate-y-[10px] focus:shadow-active-bl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent placeholder:text-gray-700 transition-all duration-200 ease-in-out" placeholder="••••••••" required>
                </div>
                <div>
                    <label for="confirmPassword" class="font-sourGummy block text-sm font-medium text-gray-600">Confirm Password</label>
                    <input type="password" id="confirmPassword" class="font-sourGummy w-full px-3 py-2 mt-1 rounded-md shadow-keycaps-bl bg-bl border-2 border-gray-700 transform focus:translate-y-[10px] focus:shadow-active-bl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent placeholder:text-gray-700 transition-all duration-200 ease-in-out" placeholder="••••••••" required>
                </div>
                <input type="checkbox" name="showSignUpPass" id="showSignUpPass">
                <label for="showSignUpPass" class="font-sourGummy">Perlihatkan password</label>
                <button type="submit" class="font-sourGummy w-full px-4 py-2 bg-gr shadow-keycaps-gr rounded-md border-2 border-gray-700 text-gray-700 transform active:translate-y-[10px] active:shadow-active-gr focus:outline-none transition-all duration-75 ease-in-out">Sign Up</button>
            </form>
            <p class="font-sourGummy text-sm text-center text-gray-600 mt-4">
                Already have an account? <button onclick="showLoginForm()" class="font-sourGummy text-blue-600 hover:underline">Login</button>
            </p>
        </div>
    </div>

    <script>
        // Menampilkan atau menyembunyikan password di form Sign Up
        const signUpPasswordFields = document.querySelectorAll('#signUpForm input[type="password"]');
        document.getElementById('showSignUpPass').addEventListener('change', function() {
            signUpPasswordFields.forEach(field => {
                field.type = this.checked ? 'text' : 'password';
            });
        });

        // Menampilkan atau menyembunyikan password di form Login
        const loginPasswordField = document.getElementById('loginPassword');
        document.getElementById('showLoginPass').addEventListener('change', function() {
            loginPasswordField.type = this.checked ? 'text' : 'password';
        });

        // Function untuk menampilkan Login Form dan menyembunyikan Sign Up Form
        function showLoginForm() {
            document.getElementById("loginForm").classList.remove("hidden");
            document.getElementById("signUpForm").classList.add("hidden");
            document.getElementById("showSignUpPass").checked = false; // Reset show password checkbox
            document.getElementById("showLoginPass").checked = false; // Reset show password checkbox
            loginPasswordField.type = 'password'; // Reset field password type
        }

        // Function untuk menampilkan Sign Up Form dan menyembunyikan Login Form
        function showSignUpForm() {
            document.getElementById("loginForm").classList.add("hidden");
            document.getElementById("signUpForm").classList.remove("hidden");
            document.getElementById("showSignUpPass").checked = false; // Reset show password checkbox
            document.getElementById("showLoginPass").checked = false; // Reset show password checkbox
            loginPasswordField.type = 'password'; // Reset field password type
        }
    </script>
</body>

</html>