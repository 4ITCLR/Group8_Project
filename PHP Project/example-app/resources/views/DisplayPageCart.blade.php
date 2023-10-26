@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
<link rel="stylesheet" href="{{ asset('css/DisplayCart.css') }}">
<script src="{{ asset('js/DisplayCart.js') }}"></script>

<main>
    <div class="basket">
        <div class="basket-labels">
            <ul>
                <li class="item item-heading">Item</li>
                <li class="price">Price</li>
            </ul>
        </div>

        @php
            $total = 0;
        @endphp

        @if ($Model)
            @foreach ($Model as $camera)
                @php
                    $total += $camera->Price;
                @endphp
                <div class="basket-product">
                    <div class="item">
                        <div class="product-image">
                            <img src="data:image;base64,{{ base64_encode($camera->CamPic) }}" alt="Placeholder Image" class="product-frame">
                        </div>
                        <div class="product-details">
                            <h1><strong>{{ $camera->Name }}</h1>
                            <p>{{ $camera->CameraId }}</p>
                        </div>
                    </div>
                    <div class="price">{{ $camera->Price }}</div>
                    <div class="remove">
                        <a href="{{ route('camera.DeleteCart', $camera->CameraId) }}">Remove</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <aside>
        <div class="summary">
            <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
            @if ($total > 0)
                <div class="summary-total">
                    <div class="total-title">Total</div>
                    <div class="total-value final-value" id="basket-total">{{ $total }}</div>
                </div>
            @endif
            <div class="summary-checkout">
                @if ($total > 0)
                    <form action="{{ route('camera.Customer_Info') }}" method="post">
                        @csrf
                        <button type="submit" class="checkout-cta">Checkout</button>
                    </form>
                @endif
            </div>
        </div>
    </aside>
</main>
@endsection
