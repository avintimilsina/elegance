@extends('layout')

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:px-0">
            <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h1>

            <form class="mt-12">
                <section aria-labelledby="cart-heading">
                    <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
                    <ul role="list" class="divide-y divide-gray-200 border-t border-b border-gray-200">
                        @foreach ($items as $hash => $item)
                            <li class="flex py-6">
                                <div class="flex-shrink-0">
                                    {{-- <img src="{{$item->getImageUrl()}}"
                                        alt="Front side of mint cotton t-shirt with wavey lines pattern."
                                        class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32"> --}}
                                </div>

                                <div class="ml-4 flex flex-1 flex-col sm:ml-6">
                                    <div>
                                        <div class="flex justify-between">
                                            <h4 class="text-sm">
                                                <a href="#"
                                                    class="font-medium text-gray-700 hover:text-gray-800">{{ $item->getTitle() }}</a>
                                            </h4>
                                            <p class="ml-4 text-sm font-medium text-gray-900">{{ $item->getPrice() }}</p>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex flex-1 items-end justify-between">
                                        <p class="flex items-center space-x-2 text-sm text-gray-700">
                                            <!-- Heroicon name: mini/check -->
                                            <svg class="h-5 w-5 flex-shrink-0 text-green-500"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>In stock {{ $item->getQuantity() }}</span>
                                        </p>
                                        <div class="ml-4">

                                            <form method="post" id="deleteForm-{{ $hash }}" action="/cart/remove">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="itemHash" value={{ $hash }} />
                                                <button type="submit"
                                                    class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                                    <span>Remove</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </section>

                <!-- Order summary -->
                <section aria-labelledby="summary-heading" class="mt-10">
                    <h2 id="summary-heading" class="sr-only">Order summary</h2>

                    <div>
                        <dl class="space-y-4">
                            <div class="flex items-center justify-between">
                                <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                                <dd class="ml-4 text-base font-medium text-gray-900">{{ $subTotal }}</dd>
                            </div>
                        </dl>
                        <p class="mt-1 text-sm text-gray-500">Shipping and taxes will be calculated at checkout.</p>
                    </div>

                    <div class="mt-10">
                        <a href="/checkout"
                            class="w-full rounded-md border border-transparent bg-indigo-600 py-3 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</a>
                    </div>

                    <div class="mt-6 text-center text-sm">
                        <p>
                            or
                            <a href="/products" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Continue Shopping
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </p>
                    </div>
                </section>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function deleteCart(hash) {
            let userConfirmation = confirm("Are you sure you want to delete this item ?")
            if (!userConfirmation) {
                return;
            }
            let form = $('#deleteForm-' + hash);
            form.submit();
        }
    </script>
@endsection
