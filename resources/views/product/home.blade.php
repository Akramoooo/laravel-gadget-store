@extends('layouts.mainLayout')

@section('title', 'Товар')

@section('content')

<section>
    <div class="prod-panel-container">
        <div class="add-prod-container">
            <a href="{{ route('product.create') }}">Add Product</a>
        </div>
        <div class="prod_filter_btn">
            <a href="#">Фильтр &darr;</a>
            <div class="filter_list">
                <ul>
                    @foreach($categories as $category)
                    <li class="filter-btn" data-order="{{ $category->title }}"><span>{{ $category->title }}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        @foreach($products as $product)
        <div class="card"><img src="{{ $product->image && file_exists(public_path('prod_images/' . $product->image)) ? asset('prod_images/' . $product->image) : $product->image }}"></a>
            <a href="">
                <p>Цена: {{ $product->price }}</p>
                <p><a href="#">Подробнее...</a></p>
                <div class="product_btns" style="display: flex; flex-direction:row;">
                    <button class="in_cart" value="{{ $product->id }}">В корзину</button>
                    <button class="buy">Купить</button>
                </div>
        </div>
        @endforeach
    </div>
</section>


<div>
    {{ $products->links('vendor.pagination.bootstrap-5') }}
</div>
@endsection

<style>
    .product_btns>button {
        border: 1px solid black;
        text-decoration: none;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-radius: 3px;
        margin-inline: 10px;
        cursor: pointer;
        padding: 10px;
    }


    .in_cart {
        background-color: red;
        color: black;
    }

    .buy {
        background-color: rgb(21, 255, 0);
        color: black;
    }
</style>

@section('includes')

<script>
    $(document).ready(function() {
        $('.in_cart').click(function() {
            var elProduct = $(this).val();
            $(this).prop('disabled', true);
            var buttonElement = $(this);
            $.ajax({
                url: "{{ route('cart.addProd', ':elProduct') }}".replace(':elProduct', elProduct),
                method: 'get',
                data: {
                    elProduct: elProduct
                },
                success: function() {
                    buttonElement.text('Добавлено');
                }
            });
        })
    });
</script>

@endsection