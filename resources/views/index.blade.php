<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dinner Time</title>
    <link rel="stylesheet" href="{{ mix('css/styles.css') }}">
</head>

    <body class="bg-gray-100 text-gray-900 font-sans flex flex-col min-h-screen">

{{-- HEADER --}}
        <header class="py-4 bg-blue-500">
            <div class="container mx-auto flex items-center justify-between">
                <h1 class="text-2xl font-bold text-white">🍽 Dinner Time</h1>
            </div>
        </header>

{{-- SECTION --}}
        <section class="flex-grow container mx-auto flex flex-col justify-center items-center mb-8">
            <div class="hero text-center">
                <h1 class="text-3xl font-bold mb-4">Where would you like to have dinner tonight?</h1>
                <br>
                <p class="text-lg mb-8">Explore a variety of dining options and make your decision!</p>
                <br>
                <br>
                <a href="{{ url('/decide') }}" class="text-blue-500 hover:underline transition">Find Out Now</a>
            </div>
        </section>

    </body>
</html>







