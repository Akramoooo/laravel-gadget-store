@extends('layouts.mainLayout')

@section('title', 'Корзина')

@section('content')
@foreach($products as $product)

<div class="cart-container">
    <div class="cart-info">
        <div class="oneProdCart">
            <img src="{{ $product->image && file_exists(public_path('prod_images/' . $product->image)) ? asset('prod_images/' . $product->image) : $product->image }}" alt="">
            <div class="cart-prod-info">
                <span>Цена: {{ $product->price }}</span>
                <span>{{ $product->description }}</span>
                <div class="cart-btns">
                    <a href="#" class="del">Убрать</a>
                    <a href="#" class="buy">Купить</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection