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
                    <p><a href="#" class="in_cart">В корзину</a></p>
                    <p><a href="#" class="buy">Купить</a></p>
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
    .product_btns p {
        margin-inline: 10px;
    }

    .product_btns p>a {
        border: 1px solid black;
        text-decoration: none;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-radius: 3px;
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

