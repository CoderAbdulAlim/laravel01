<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Welcome to Products World!
    </h1>
    <div class="container mx-auto">
        <header class="flex items-center justify-between border-b py-6">
            <div class="flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>

                <h1>Product CRUD</h1>

            </div>
            <a href="{{route('products.index')}}">Back</a>
        </header>

        <main class="py-6">
            <h1 class="text-center font-bold text-2x1 mb-6">Product Create</h1>
            <form action="{{ route('products.store') }}" method="POST" class="max-w-2x1 mx-auto border rounded-lg p-6">
                @csrf
                <div>
                    <label for="title" class="font-bold">Product Title</label>
                    <input type="text" name="title" class="block w-full border py-2 px-4 rounded-lg mt-2">
                    @error('title')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="price" class="font-bold">Product Price</label>
                    <input type="text" name="price" class="block w-full border py-2 px-4 rounded-lg mt-2">
                    @error('price')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded-lg">Create Product</button>
                </div>
            </form>
    </div>
    </main>
    </div>
</body>

</html>