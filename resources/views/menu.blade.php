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

    <!-- Menu Section -->
    <section class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <!-- Drinks Section -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Drinks</h2>

                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    <h3 class="text-2xl font-semibold text-yellow-600 mb-4">Cocktails</h3>

                    <div class="flex justify-between items-center mb-2">
                        <span>Margarita</span>
                        <span class="text-gray-600">$8</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('margarita', -1)">-</button>
                            <span id="margarita" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('margarita', 1)">+</button>
                        </div>
                    </div>

                    <!-- Other drinks... -->
                </div>
            </div>

            <!-- Food Section -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Foods</h2>

                <!-- Starters -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    <h3 class="text-2xl font-semibold text-yellow-600 mb-4">Starters</h3>

                    <div class="flex justify-between items-center mb-2">
                        <span>Garlic Bread</span>
                        <span class="text-gray-600">$5</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('garlic_bread', -1)">-</button>
                            <span id="garlic_bread" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('garlic_bread', 1)">+</button>
                        </div>
                    </div>

                    <!-- Other foods... -->
                </div>
            </div>
        </div>

        <!-- Order Button -->
        <div class="text-center mt-8">
            <button id="placeOrder" class="bg-green-500 text-white font-bold py-4 px-8 rounded hover:bg-green-600 transition duration-300">
                Place Order
            </button>
        </div>
    </section>

    <!-- Popup Modal -->
    <div id="popup" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center" style="display: none;">
        <div class="bg-white p-8 w-2/4 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Bevestig uw bestelling</h2>
            <p class="text-gray-700 mb-6"></p>
            <div class="flex justify-between">
                <button class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600 transition duration-300">
                    Order
                </button>
                <button id="closePopup" class="bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-600 transition duration-300">
                    Close
                </button>
            </div>
        </div>
    </div>

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
