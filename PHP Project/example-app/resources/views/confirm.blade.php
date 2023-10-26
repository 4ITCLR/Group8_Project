@extends('layouts.app')

@section('title', 'Confirmation')

@php
$total = 0;
foreach ($cart->Carts as $camera) {
    $total += $camera->Price;
}
@endphp

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="invoice">
            <!-- begin invoice-company -->
            Analogue Mafia
            <!-- end invoice-company -->
            <!-- begin invoice-header -->
            @foreach ($cart->Customers as $customer)
                <div class="invoice-to">
                    <small>to</small>
                    <address class="m-t-5 m-b-5">
                        <strong class="text-inverse">{{ $customer->FullName }}</strong><br>
                        {{ $customer->Address }}<br>
                        {{ $customer->Number }}<br>
                        {{ $customer->Email }}<br>
                        {{ $customer->Instagram_Handle }}
                    </address>
                </div>
            @endforeach
            <div class="invoice-date">
                <small>Invoice</small>
                <div class="date text-inverse m-t-5">{{ date('F j, Y') }}</div>
            </div>
        </div>
        <!-- end invoice-header -->
        <!-- begin invoice-content -->
        <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
                <table class="table table-invoice">
                    <thead>
                        <tr>
                            <th>ITEM NAME</th>
                            <th class="text-center" width="10%">ID</th>
                            <th class="text-right" width="20%">PRICE</th>
                        </tr>
                    </thead>
                    @foreach ($cart->Carts as $camera)
                        <tbody>
                            <tr>
                                <td>
                                    <span class="text-inverse">{{ $camera->Name }}</span><br>
                                    <small></small>
                                </td>
                                <td class="text-center">{{ $camera->CameraId }}</td>
                                <td class="text-right">₱{{ $camera->Price }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
                @if ($total != 0)
                    <div class="invoice-price-right">
                        <small>TOTAL</small> <span class="f-w-600">₱{{ $total }}</span>
                    </div>
                @endif
            </div>
            <!-- end invoice-price -->
        </div>
        <!-- end invoice-content -->
        <!-- begin invoice-note -->
        <div class="invoice-note">
            * Make all cheques payable to Analogue Mafia<br>
            * Payment is due within 30 days<br>
            * If you have any questions concerning this invoice, contact IG: Analogue Mafia
        </div>
        <!-- end invoice-note -->

        <form>
            <button class="btn2 btn-danger" type="button" onclick="location.href='{{ route('camera.DisplayPageCart') }}'">Something is Wrong</button>
            <button class="btn2 btn-primary" type="submit" formaction="{{ route('camera.receipt', 'save') }}">Checkout</button>
        </form>
    </div>
</div>
@endsection
