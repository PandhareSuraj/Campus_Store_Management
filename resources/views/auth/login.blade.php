<!DOCTYPE html>
<html>
<head>
    <title>Login - Campus Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-pink-100 via-purple-100 to-blue-100 min-h-screen flex items-center justify-center">

<div class="bg-white/60 backdrop-blur-lg shadow-2xl rounded-3xl p-10 w-96 border border-purple-200">

    <h2 class="text-3xl font-bold text-center text-purple-600 mb-6">
        Campus Store Login
    </h2>

    <form>

        <!-- Name -->
        <div class="mb-4">
            <label class="block text-purple-700 font-semibold mb-1">Name</label>
            <input type="text" 
                   class="w-full px-4 py-2 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-purple-300 bg-white/70">
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label class="block text-purple-700 font-semibold mb-1">Email</label>
            <input type="email" 
                   class="w-full px-4 py-2 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-purple-300 bg-white/70">
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label class="block text-purple-700 font-semibold mb-1">Password</label>
            <input type="password" 
                   class="w-full px-4 py-2 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-purple-300 bg-white/70">
        </div>

        <!-- Button -->
        <button type="submit"
                class="w-full bg-gradient-to-r from-purple-400 to-pink-400 text-white font-semibold py-2 rounded-xl shadow-md hover:scale-105 transition duration-300">
            Login
        </button>

    </form>

    <p class="text-center text-sm text-purple-500 mt-6">
        © 2026 Campus Store
    </p>

</div>

</body>
</html>