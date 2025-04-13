{{-- LAYOUT SITO --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keylio</title>

    {{-- FAVICON CUSTOM  --}}

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    {{-- GOOGLE FONTS  --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan&family=Spectral+SC:wght@800&display=swap" rel="stylesheet">

    {{-- BOOTSTRAP ICONS --}}
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    {{-- VITE CSS/JS  --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar/>
    {{ $slot }}
    <x-footer/>
</body>
</html>