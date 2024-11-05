<div class="mt-8 w-2/3 mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <!-- Example Order -->
    @foreach($orders as $order)
    <div style="min-height: 300px"  class="@if($order->status == 'served') bg-green-300 @else bg-yellow-500 @endif p-5 rounded-lg shadow-lg transform rotate-2">
        <i>Ingekomen op: {{Date('d-m-Y h:m', strtotime($order->created_at))}}</i>
        <h2 class="text-xl font-bold">Order #{{ $order->id }}</h2>
        <ul class="mt-3 text-gray-700">
            @foreach($order->products as $product)
                <li>{{$product->pivot->quantity}}x {{$product->name}}</li>
            @endforeach
        </ul>
        <p class="mt-5 font-bold uppercase text-gray-800 text-sm">Tafel {{$order->table_id}}</p>
        @if($order->status == 'served')
            <button class="absolute bottom-2 text-gray-800 text-2xl  text-white font-bold py-2 px-4 rounded"> ✅ Geserveerd</button>

        @else
            <button wire:click="setAsReady({{$order->id}})" class="bg-green-500 absolute bottom-2 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Klaar voor service</button>

        @endif

    </div>
    @endforeach

</div>
