@extends('layout')

@section('content')
    <div class="bg-gray-50">
        <div class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Checkout</h2>

            <form action={{ route('checkout.store') }} method="post" class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
                @csrf
                <div>
                    <div>
                        <h2 class="text-lg font-medium text-gray-900">Contact information</h2>

                        <div class="sm:col-span-2">
                            <div class="mt-1" @if ($errors->has('email')) invalid @endif">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address </label>
                                <input type="text" name="email" value="{{ old('email') }}"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <small> {{ $errors->first('email') }}</small>

                            </div>
                        </div>
                    </div>

                    <div class="mt-10 border-t border-gray-200 pt-10">
                        <h2 class="text-lg font-medium text-gray-900">Shipping information</h2>

                        <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                            <div>
                                <div class="mt-1" @if ($errors->has('first_name')) invalid @endif">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">First
                                        name</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <small> {{ $errors->first('first_name') }}</small>

                                </div>
                            </div>

                            <div>
                                <div class="mt-1" @if ($errors->has('last_name')) invalid @endif">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <small> {{ $errors->first('last_name') }}</small>

                                </div>

                            </div>

                            <div class="sm:col-span-2">
                                <div class="mt-1" @if ($errors->has('address')) invalid @endif">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Address </label>
                                    <input type="text" name="address" value="{{ old('address') }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <small> {{ $errors->first('address') }}</small>

                                </div>
                            </div>


                            <div class="sm:col-span-2">
                                <div class="mt-1" @if ($errors->has('district')) invalid @endif">
                                    <label for="district" class="block text-sm font-medium text-gray-700">District </label>
                                    <input type="text" name="district" value="{{ old('district') }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <small> {{ $errors->first('district') }}</small>

                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="mt-1" @if ($errors->has('country')) invalid @endif">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Country </label>
                                    <input type="text" name="country" value="{{ old('country') }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <small> {{ $errors->first('country') }}</small>

                                </div>
                            </div>

                            <div>
                                <div class="mt-1" @if ($errors->has('province')) invalid @endif">
                                    <label for="province" class="block text-sm font-medium text-gray-700">Province </label>
                                    <input type="text" name="province" value="{{ old('province') }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <small> {{ $errors->first('province') }}</small>

                                </div>
                            </div>

                            <div>
                                <div class="mt-1" @if ($errors->has('zip')) invalid @endif">
                                    <label for="zip" class="block text-sm font-medium text-gray-700">Zip Code</label>
                                    <input type="text" name="zip" value="{{ old('zip') }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <small> {{ $errors->first('zip') }}</small>

                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <div class="mt-1" @if ($errors->has('phone')) invalid @endif">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone </label>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <small> {{ $errors->first('phone') }}</small>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Payment -->
                    <div class="mt-10 border-t border-gray-200 pt-10">
                        <h2 class="text-lg font-medium text-gray-900">Payment</h2>

                        <fieldset class="mt-4">
                            <legend class="sr-only">Payment type</legend>
                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                <div class="checkout__input__checkbox">
                                    <label for="khalti">
                                        Khalti
                                        <input type="radio" id="khalti" name="payment_gateway" value="khalti"
                                            @if (old('payment_gateway') == 'khalti') checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                {{-- <div class="flex items-center">
                                    <input type="radio" id="khalti" name="payment_gateway" value="khalti"
                                        @if (old('payment_gateway') == 'khalti') checked @endif
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="khalti" class="ml-3 block text-sm font-medium text-gray-700">Khalti
                                    </label>
                                </div> --}}
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0">
                    <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

                    <div class="mt-4 rounded-lg border border-gray-200 bg-white shadow-sm">
                        <h3 class="sr-only">Items in your cart</h3>
                        <ul role="list" class="divide-y divide-gray-200">
                            @foreach ($items as $item)
                                <li class="flex py-6 px-4 sm:px-6">
                                    <div class="flex-shrink-0">
                                        <img src="{{ head($item->getExtraInfo()) }}"
                                            alt="Front of men&#039;s Basic Tee in black." class="w-20 rounded-md">
                                    </div>

                                    <div class="ml-6 flex flex-1 flex-col">
                                        <div class="flex">
                                            <div class="min-w-0 flex-1">
                                                <h4 class="text-sm">
                                                    <a href="#"
                                                        class="font-medium text-gray-700 hover:text-gray-800">{{ $item->getTitle() }}</a>
                                                </h4>

                                            </div>

                                            <div class="ml-4 flow-root flex-shrink-0">
                                                <button type="button"
                                                    class="-m-2.5 flex items-center justify-center bg-white p-2.5 text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">Remove</span>
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="flex flex-1 items-end justify-between pt-2">
                                            <p class="mt-1 text-sm font-medium text-gray-900">
                                                RS {{ $item->getPrice() * $item->getQuantity() }}</p>

                                            <div class="ml-4">
                                                <label for="quantity" class="sr-only">Quantity</label>
                                                <p class="mt-1 text-sm font-medium text-gray-900">
                                                    {{ $item->getQuantity() }}</p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <dl class="space-y-6 border-t border-gray-200 py-6 px-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <dt class="text-sm">Subtotal</dt>
                                <dd class="text-sm font-medium text-gray-900">{{ $subTotal }}</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-sm">Shipping</dt>
                                <dd class="text-sm font-medium text-gray-900">RS 0.00</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-sm">Taxes</dt>
                                <dd class="text-sm font-medium text-gray-900">RS 0.00</dd>
                            </div>
                            <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                                <dt class="text-base font-medium">Total</dt>
                                <dd class="text-base font-medium text-gray-900">{{ $total }}</dd>
                            </div>
                        </dl>

                        <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                            <button type="submit"
                                class="w-full rounded-md border border-transparent bg-indigo-600 py-3 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Confirm
                                order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
