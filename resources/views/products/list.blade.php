@extends('layout')

@section('content')
    <main>
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="py-24 text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
                <p class="mx-auto mt-4 max-w-3xl text-base text-gray-500">Thoughtfully designed objects for the workspace,
                    home, and travel.</p>
            </div>

            <!-- Filters -->


            <!-- Product grid -->
            <section aria-labelledby="products-heading" class="mt-8">
                <h2 id="products-heading" class="sr-only">Products</h2>

                <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                    @foreach ($products as $product)
                        <a href="/product/{{$product->slug}}" class="group">
                            <div
                                class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg sm:aspect-w-2 sm:aspect-h-3">
                                <img src="{{ $product->imageUrl }}"
                                    alt="Person using a pen to cross a task off a productivity paper card."
                                    class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                            <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                                <h3>{{ $product->name }}</h3>
                                <p>{{ $product->formatted_amount() }}</p>
                            </div>
                            <p class="mt-1 text-sm italic text-gray-500">{{ $product->quantity }} items available</p>
                        </a>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection
