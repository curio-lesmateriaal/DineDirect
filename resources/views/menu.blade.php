<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
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

                    <div class="flex justify-between items-center mb-2">
                        <span>Mojito</span>
                        <span class="text-gray-600">$9</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('mojito', -1)">-</button>
                            <span id="mojito" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('mojito', 1)">+</button>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <span>Cosmopolitan</span>
                        <span class="text-gray-600">$10</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('cosmopolitan', -1)">-</button>
                            <span id="cosmopolitan" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('cosmopolitan', 1)">+</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    <h3 class="text-2xl font-semibold text-yellow-600 mb-4">Soft Drinks</h3>

                    <div class="flex justify-between items-center mb-2">
                        <span>Coca-Cola</span>
                        <span class="text-gray-600">$3</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('coke', -1)">-</button>
                            <span id="coke" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('coke', 1)">+</button>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <span>Sprite</span>
                        <span class="text-gray-600">$3</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('sprite', -1)">-</button>
                            <span id="sprite" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('sprite', 1)">+</button>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <span>Orange Juice</span>
                        <span class="text-gray-600">$4</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('oj', -1)">-</button>
                            <span id="oj" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('oj', 1)">+</button>
                        </div>
                    </div>
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

                    <div class="flex justify-between items-center mb-2">
                        <span>Bruschetta</span>
                        <span class="text-gray-600">$7</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('bruschetta', -1)">-</button>
                            <span id="bruschetta" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('bruschetta', 1)">+</button>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <span>Caesar Salad</span>
                        <span class="text-gray-600">$8</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('caesar', -1)">-</button>
                            <span id="caesar" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('caesar', 1)">+</button>
                        </div>
                    </div>
                </div>

                <!-- Main Courses -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    <h3 class="text-2xl font-semibold text-yellow-600 mb-4">Main</h3>

                    <div class="flex justify-between items-center mb-2">
                        <span>Grilled Salmon</span>
                        <span class="text-gray-600">$18</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('salmon', -1)">-</button>
                            <span id="salmon" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('salmon', 1)">+</button>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <span>Spaghetti Carbonara</span>
                        <span class="text-gray-600">$14</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('carbonara', -1)">-</button>
                            <span id="carbonara" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('carbonara', 1)">+</button>
                        </div>
                    </div>
                </div>

                <!-- Desserts -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    <h3 class="text-2xl font-semibold text-yellow-600 mb-4">Desserts</h3>

                    <div class="flex justify-between items-center mb-2">
                        <span>Chocolate Cake</span>
                        <span class="text-gray-600">$6</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('choco_cake', -1)">-</button>
                            <span id="choco_cake" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('choco_cake', 1)">+</button>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <span>Cheesecake</span>
                        <span class="text-gray-600">$7</span>
                        <div class="flex items-center">
                            <button class="decrease bg-gray-300 text-gray-800 font-bold py-1 px-2 rounded-l" onclick="changeQuantity('cheesecake', -1)">-</button>
                            <span id="cheesecake" class="px-4">0</span>
                            <button class="bg-yellow-500 text-white font-bold py-1 px-2 rounded-r" onclick="changeQuantity('cheesecake', 1)">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Button -->
        <div class="text-center mt-8">
            <button class="bg-green-500 text-white font-bold py-4 px-8 rounded hover:bg-green-600 transition duration-300">
                Place Order
            </button>
        </div>
    </section>

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
    </script>
</body>
</html>
