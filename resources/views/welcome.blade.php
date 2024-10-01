<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <title>DineDirect!</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-800">DineDirect!</h1>
            <p class="text-gray-600">Order food & drinks with just a QR code</p>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold mb-4">Welcome to DineDirect!</h2>
                <p class="text-lg mb-8">Scan, Order, Enjoy. Experience hassle-free dining.</p>
                <a href="#features" class="bg-yellow-500 text-white font-bold py-3 px-6 rounded-full hover:bg-yellow-600 transition duration-300">How It Works</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-12 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Why DineDirect?</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://img.icons8.com/ios-filled/50/000000/qr-code.png" alt="QR Code" class="mx-auto mb-4">
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Simple QR Scanning</h4>
                    <p class="text-gray-600">Scan the code at your table to access the menu instantly.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://img.icons8.com/ios-filled/50/000000/restaurant.png" alt="Order Food" class="mx-auto mb-4">
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Easy Ordering</h4>
                    <p class="text-gray-600">Place your order directly from your phone and skip the wait.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://img.icons8.com/ios-filled/50/000000/waiter.png" alt="Waiter" class="mx-auto mb-4">
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Contactless Service</h4>
                    <p class="text-gray-600">Enjoy your meal while maintaining safe, contactless interactions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-12 bg-yellow-500">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold text-white mb-6">Get Started with DineDirect Today!</h3>
            <p class="text-lg text-white mb-8">Join thousands of users who are enjoying hassle-free dining.</p>
            <a href="#" class="bg-white text-yellow-500 font-bold py-3 px-6 rounded-full hover:bg-gray-200 transition duration-300">Download the App</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-400">
            <p>&copy; 2024 DineDirect. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>
