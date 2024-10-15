<div>

    <!-- Menu Section -->
    <section class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <!-- Drinks Section -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Drinks</h2>
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    @foreach($drinkCategories as $category)
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">{{$category->name}}</h3>
                        @foreach($category->products as $product)
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h4 class="text-xl font-bold">{{$product->name}}</h4>
                                    <p class="text-gray-600">{{$product->description}}</p>
                                </div>
                                <div>
                                    {{-- + and - buttons --}}
                                    <div class="flex items">
                                        <span  class="bg-gray-500 m-2 text-gray-200 px-4 py-2">{{$product->price}}</span>
                                        <button wire:click="removeProduct" class="bg-gray-500 m-2 text-gray-200 px-4 py-2 rounded-l" >-</button>
                                        <button wire:click="addProduct" class="bg-gray-500 m-2 text-gray-200 px-4 py-2 rounded-r">+</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            <!-- Food Section -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Foods</h2>
                <!-- Starters -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    @foreach($foodCategories as $category)
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">{{$category->name}}</h3>
                        @foreach($category->products as $product)
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h4 class="text-xl font-bold">{{$product->name}}</h4>
                                    <p class="text-gray-600">{{$product->description}}</p>
                                </div>
                                <div>
                                    {{-- + and - buttons --}}
                                    <div class="flex items">
                                        <span class="bg-gray-500 m-2 text-gray-200 px-4 py-2">{{$product->price}}</span>
                                        <button class="bg-gray-500 m-2 text-gray-200 px-4 py-2 rounded-l" wire:click="decreaseQuantity({{$product->id}})">-</button>
                                        <button class="bg-gray-500 m-2 text-gray-200 px-4 py-2 rounded-r" wire:click="increaseQuantity({{$product->id}})">+</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
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

</div>
