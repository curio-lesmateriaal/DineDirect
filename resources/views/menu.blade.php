<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <title>Menu Card</title>
    <style>
        /* Ensure the minus button doesn't decrease the count below 1 */
        .decrease:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Menu Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6 text-center">
            <h1 class="text-4xl font-bold text-gray-800">DineDirect Menu</h1>
            <p class="text-gray-600">Order delicious food & drinks, and enjoy your meal!</p>
        </div>
    </header>
    @livewire('menu-card')
    <!-- Footer -->
    <footer class="bg-gray-800 py-6 mt-12">
        <div class="container mx-auto text-center text-gray-400">
            <p>&copy; 2024 DineDirect. All Rights Reserved.</p>
        </div>
    </footer>
    <script>
        // Function to handle quantity changes
        function changeQuantity(id, amount) {
            const quantityElement = document.getElementById(id);
            let currentQuantity = parseInt(quantityElement.innerText);

            currentQuantity += amount;
            if (currentQuantity < 0) {
                currentQuantity = 0;
            }

            quantityElement.innerText = currentQuantity;
        }

        document.getElementById('placeOrder').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'flex';
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });
    </script>
</body>
</html>
