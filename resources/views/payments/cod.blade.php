@extends('layout')

@section('content')
    <main class="bg-white px-4 pt-16 pb-24 sm:px-6 sm:pt-24 lg:px-8 lg:py-32">
        <div class="mx-auto max-w-3xl">
            <div class="max-w-xl">
                <h1 class="text-base font-medium text-indigo-600">Thank you!</h1>
                <p class="mt-2 text-4xl font-bold tracking-tight">It's on the way!</p>
                <p class="mt-2 text-base text-gray-500">Your order {{ session('orderId') }} has shipped and will be with you soon.</p>

                <dl class="mt-12 text-sm font-medium">
                    <dt class="text-gray-900">Tracking number</dt>
                    <dd class="mt-2 text-indigo-600">{{ session('orderId') }}</dd>
                </dl>
            </div>

            
        </div>
    </main>
@endsection
