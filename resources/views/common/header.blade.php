<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ env('APP_TITLE') }}
    </title>
    <!-- <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="bg-gray-800 py-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- 로고 -->
        <div class="text-white text-2xl font-semibold">
            Your Logo
        </div>

        <!-- 검색바 -->
        <div class="flex justify-center items-center">
            <input type="text" placeholder="Search"
                   class="px-4 py-2 border border-gray-600 rounded-md
                          bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:border-blue-500">
            <button type="button" class="ml-4 text-white text-sm px-4 py-2 border border-white rounded-md
                          hover:bg-white hover:text-gray-800 focus:outline-none focus:bg-white focus:text-gray-800">검색</button>
        </div>

        <!-- 로그인, 회원가입 버튼 -->
        <div>
            <button type="button" class="text-white text-sm px-4 py-2 border border-white rounded-md
                          hover:bg-white hover:text-gray-800 focus:outline-none focus:bg-white focus:text-gray-800">
                Sign In
            </button>
            <button type="button" class="text-white text-sm px-4 py-2 border border-white rounded-md
                          hover:bg-white hover:text-gray-800 focus:outline-none focus:bg-white focus:text-gray-800">
                Sign Up
            </button>
        </div>
    </div>
</header>

