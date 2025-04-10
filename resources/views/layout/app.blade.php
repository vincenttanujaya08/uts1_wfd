<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-4xl font-bold text-center">Library Management System</h1>
    </header>

    <!-- Main Content -->
    <main class="p-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white p-4 mt-6 text-center">
        &copy; 2025 My Laravel App
    </footer>
</body>

</html>