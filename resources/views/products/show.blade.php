@extends('layout')
@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <!-- Product details -->
            <div class="lg:max-w-lg lg:self-end">
                <nav aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center space-x-2">
                        <li>
                            <div class="flex items-center text-sm">
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Products</a>

                                <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    aria-hidden="true" class="ml-2 h-5 w-5 flex-shrink-0 text-gray-300">
                                    <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                </svg>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="mt-4">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $product->name }}</h1>
                </div>

                <section aria-labelledby="information-heading" class="mt-4">
                    <h2 id="information-heading" class="sr-only">Product information</h2>

                    <div class="flex items-center">
                        <p class="text-lg text-gray-900 sm:text-xl">{{ $product->formatted_amount() }}</p>

                    </div>

                    <div class="mt-4 space-y-6">
                        <p id="desc-text" class="text-base text-gray-500">{{ $product->information }}</p>
                    </div>

                    <div class="mt-6 flex items-center">
                        <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="ml-2 text-sm text-gray-500"> {{ $product->quantity }} In stock and ready to ship</p>
                    </div>
                </section>
            </div>

            <!-- Product image -->
            <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg">
                    <img src="{{ $product->imageUrl }}"
                        alt="Model wearing light green backpack with black canvas straps and front zipper pouch."
                        class="h-full w-full object-cover object-center">
                </div>
            </div>


            <div class="mt-10">
                <form method="post" action="/cart" class="flex flex-row">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}" />
                    <div class="product__details__quantity ">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="1" name="quantity">
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Add
                        to Cart</button>
                </form>

            </div>
            <div class="mt-6 text-center">
                <a href="#" class="group inline-flex text-base font-medium">
                    <svg class="mr-2 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                    <span class="text-gray-500 hover:text-gray-700">3 months Warranty</span>
                </a>
            </div>
            </form>
            </section>
        </div>
    </div>
    </div>
@endsection
