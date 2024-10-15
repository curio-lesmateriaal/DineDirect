<div>

    <!-- Menu Section -->
    <section class="container mx-auto px-4 py-12">
        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-2" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('message') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a1 1 0 011.415 0l.707.707a1 1 0 010 1.415L11.415 12l5.045 5.045a1 1 0 01-1.415 1.415L10 13.415l-5.045 5.045a1 1 0 01-1.415-1.415L8.585 12 3.54 6.955a1 1 0 011.415-1.415L10 10.585l4.348-4.933z"/></svg>
                </span>
            </div>
        @endif


        @if(!empty($order))
            <div class="order bg-white shadow-md rounded-lg p-6 my-4 max-w-lg mx-auto">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Uw Bestelling</h1>
                <ul class="space-y-4">
                    @foreach($order as $product)
                        <li class="bg-gray-50 border rounded-lg p-4 flex items-center justify-between">
                            <div>
                                <p class="text-lg font-semibold text-gray-700">{{ $product['name'] }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-gray-500">Aantal: <span class="font-bold">{{ $product['amount'] }}</span></p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div>
                    <p class="text-xl text-center font-bold mt-6">Totaal: €{{ $this->getOrderPrice() }}</p>
                </div>
                <!-- Add the "Bestelling Plaatsen" button -->
                <div class="mt-6 text-center">
                    <button wire:click="placeOrder" class="bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
                        Bestelling Plaatsen
                    </button>
                </div>
            </div>
        @endif


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
                                        <button wire:click="removeProduct( {{$product}} )" class="bg-gray-500 m-2 text-gray-200 px-4 py-2 rounded-l" >-</button>
                                        <button wire:click="addProduct( {{$product}} )" class="bg-gray-500 m-2 text-gray-200 px-4 py-2 rounded-r">+</button>
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
                                        <button wire:click="removeProduct( {{$product}} )" class="bg-gray-500 m-2 text-gray-200 px-4 py-2 rounded-l">-</button>
                                        <button class="bg-gray-500 m-2 text-gray-200 px-4 py-2 rounded-r" wire:click="addProduct( {{$product}} )">+</button>
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
