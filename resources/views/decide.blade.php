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
        <section class="flex-grow container mx-auto flex flex-col justify-center items-center mt-8 text-center">
            <div class="decision-card bg-white p-14 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="result-windowp-12 rounded-lg p-4">
                    <p class="text-xl mb-4">Tonight, let's go to:</p>
                    <br>
                    <p class="text-5xl font-bold bg-blue-500 pt-5 m-5 text-center">{{ $randomOption->name }}</p>
                    <br>
                    <br>
                </div>
                <a href="{{ url('/') }}">Back to Options</a>
            </div>
        </section>
    </body>
</html>







