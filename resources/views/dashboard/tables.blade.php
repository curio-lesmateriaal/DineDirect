<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <title>DineDirect Dashboard</title>

</head>
<body class="bg-gray-100">

    <!-- Menu Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6 text-center">
            <h1 class="text-4xl font-bold text-gray-800">DineDirect Dashboard</h1>
            <p class="text-gray-600">Order delicious food & drinks, and enjoy your meal!</p>
        </div>
        {{-- logout --}}
        <div class="container mx-auto px-4 py-6 text-right">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Logout</button>
            </form>
        </div>
    </header>
    <div class="mx-auto w-2/3">
        <h1 class="text-2xl">Tafelbeheer</h1>
        <div class="tables mt-4 grid grid-cols-4 gap-8">
            @foreach($tables as $table)
                <div class="table bg-gray-200 p-4 shadow-lg">
                    <h2 class="text-xl font-bold">Tafel #{{ $table->id }}</h2>
                    {!! QrCode::size(100)->generate(url('table/' . $table->id)) !!}
                    <p class="mt-5 font-bold uppercase text-gray-800 text-sm">Aantal stoelen: {{$table->capacity}}</p>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
