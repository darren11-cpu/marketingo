<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Agency</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }

        html{
            scroll-behavior:smooth;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

</body>
</html>