@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card padding">
            <header><h2>Mi carrito de compras</h2></header>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <products-shopping></products-shopping>
                    </div>
                    <div class="col-12 col-md-6 payments">
                        <p>Paga tu total facilmente con cualquiera de estos metodos, a traves de PayPal</p>
                        <img src="/images/cards.png" alt="" width="120">
                        <img src="/images/paypal.png" alt="" width="120">
                        <div><a href="/pagar" class="btn btn-primary">Proceder al pago</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection