<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buchet Laravel - Community</title>
    <!-- <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="text-2xl md:text-3xl lg:text-4xl font-bold">
            로고이미지
        </a>
        <!-- Navigation Links -->
        <nav class="hidden md:flex">
            <ul class="flex space-x-4">
                <li><a href="{{ route('web.home') }}" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">About</a></li>
                <li><a href="#" class="hover:text-gray-300">Services</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            </ul>
        </nav>
        <!-- Mobile Menu Button -->
        <button class="md:hidden">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
    <!-- Mobile Menu (hidden by default) -->
    <nav class="md:hidden bg-gray-900 py-2">
        <ul class="flex flex-col items-center space-y-2">
            <li><a href="#" class="text-gray-300">Home</a></li>
            <li><a href="#" class="text-gray-300">About</a></li>
            <li><a href="#" class="text-gray-300">Services</a></li>
            <li><a href="#" class="text-gray-300">Contact</a></li>
        </ul>
    </nav>
</header>