<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!--  FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- DEVICON CDN -->
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    <!-- CUSTOMIZE CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CUSTOMIZE JS -->
    <link rel="stylesheet" href="{{ asset('js/global.js') }}">

</head>

<body class="bg-gray-50 text-gray-800 pt-0">

    {{ $slot }}

</body>
</html>