<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-cover h-screen flex items-center justify-center" style="background-image: url('/img/bglogin.png')">

    <div class="bg-white p-8 rounded-3xl shadow-lg w-96">
        <div class="flex flex-col items-center">
            <img src="/img/logosimko.png" alt="Background" class="w-[50px] h-[50px] mb-3">
            <h1 class="text-2xl font-bold mb-2">Masuk</h1>
            <p class="text-gray-600 mb-5">Selamat Datang! Silahkan masukkan data</p>
        </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">User Id</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" required class="mt-1 block w-full px-3 py-2 border border-gray-400 rounded-xl shadow-sm focus:outline-none focus:ring focus:ring-blue-300" >
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                    <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-400 rounded-xl shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-700">Masuk</button>
            </form>

    </div>


</body>
</html>
