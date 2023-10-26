@extends('layouts.app')

@section('title', 'Receipt')

@section('content')
<link rel="stylesheet" href="{{ asset('css/Receipt.css') }}">
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>

<div class="container">
    <div class="col-md-12">
        <div class="invoice">
            <!-- begin invoice-company -->
            <div class="invoice-company text-inverse f-w-600">
                <span class="pull-right hidden-print">
                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                </span>
                Analogue Mafia
            </div>
            <!-- end invoice-company -->
            <!-- begin invoice-header -->
            <div class="invoice-header">
                <div class="invoice-from">
                    <small>from</small>
                    <address class="m-t-5 m-b-5">
                        <strong class="text-inverse">Analogue Mafia</strong><br>
                        Antipolo Rizal<br>
                        IG: Analogue Mafia<br>
                    </address>
                </div>
                @foreach ($Model->Customers as $cust)
                <div class="invoice-to">
                    <small>to</small>
                    <address class="m-t-5 m-b-5">
                        <strong class="text-inverse">{{ $cust->FullName }}</strong><br>
                        {{ $cust->Address }}<br>
                        {{ $cust->Number }}<br>
                        {{ $cust->Email }}<br>
                        {{ $cust->Instagram_Handle }}
                    </address>
                </div>
                @endforeach
                <div class="invoice-date">
                    <small>Invoice</small>
                    <div class="date text-inverse m-t-5">
                        {{ now()->toDateString() }}
                    </div>
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
                        <tbody>
                            @foreach ($Model->Carts as $camera)
                            <tr>
                                <td>
                                    <span class="text-inverse">{{ $camera->Name }}</span><br>
                                    <small></small>
                                </td>
                                <td class="text-center">{{ $camera->CameraId }}</td>
                                <td class="text-right">₱{{ $camera->Price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
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
                * If you have any questions concerning this invoice, contact Analogue Mafia on IG
            </div>
            <!-- end invoice-note -->
            <!-- begin invoice-footer -->
            <div class="invoice-footer">
                <p class="text-center m-b-5 f-w-600">
                    THANK YOU FOR YOUR BUSINESS
                </p>
            </div>
            <!-- end invoice-footer -->
        </div>
    </div>
</div>
@endsection
