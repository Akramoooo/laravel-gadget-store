@extends('layouts.mainLayout')

@section('title', 'Корзина')

@section('content')
<div class="main-cart-container">
    @if(!empty($products))
    @foreach($products as $product)
    <div class="cart-container">
        <div class="cart-info">
            <div class="oneProdCart">
                <img src="{{ $product->image && file_exists(public_path('prod_images/' . $product->image)) ? asset('prod_images/' . $product->image) : $product->image }}" alt="">
                <div class="cart-prod-info">
                    <span>Цена: {{ $product->price }}</span>
                    <span>{{ $product->description }}</span>
                    <div class="cart-btns">
                        <button class="del" value="{{ $product->id }}">Убрать</button>
                        <button class="buy">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div style="text-align: center;">
        <h3>Извините, но вы не добавляли товар в корзину</h3>
    </div>
    @endif

</div>

@endsection

@section('includes')

<script>
    $(document).ready(function() {
        $('.del').click(function() {
            var delElement = $(this).val();
            var amountEl = $('.amount').text();
            var product = $(this).closest('.cart-container')
            $.ajax({
                url: "{{ route('cart.delProd', ':delElement') }}".replace(':delElement', delElement),
                method: 'get',
                data: {
                    delElement: delElement
                },
                success: function() {
                    product.remove();
                }
            });
        });
    });
</script>

@endsection