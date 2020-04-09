@extends('layouts.app');

@section('content')
<div class="container">
    <products-component></products-component>
    <div class="mt-2 d-flex justify-content-center">
        {{$products->links()}}
    </div>
</div>
@endsection