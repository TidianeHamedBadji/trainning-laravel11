<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body>
       <nav class="bg-gray-100 px-8 py-8 text-gray-700 flex items-center justify-between">
            <span class="front-bold text-2xl">Brand</span>
            <span>Hello, @yield( 'name')</span>
       </nav>
       <section class="p-12 mx-auto max-w-6xl  text-gray-800">
           @yield('content')
       </section>
</body>
</html>