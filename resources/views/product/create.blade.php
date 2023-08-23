@extends('layouts.mainLayout')

@section('title', 'Add Product')


@section('content')

<div class="create-prod-container">

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($errors->any())
        <div class="error-container">
            {{ $errors->first() }}
        </div>
        @endif
        <div>
            <h3>Add product</h3>
        </div>
        <div>
            <label for="">Product name <span>*</span> </label>
            <input type="text" name="prod_name" placeholder="product name..." value="{{ old('prod_name') }}">
        </div>
        <div>
            <label for="">Price <span>*</span> </label>
            <input type="number" min="0" name="price" placeholder="product price..." value="{{ old('price') }}">
        </div>
        <div>
            <label for="">Description <span>*</span> </label>
            <textarea name="description" cols="22" rows="5" placeholder="description">{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="">Image <span>*</span> </label>
            <input type="file" name="image"">
        </div>
        <div>
            <label for="">Category <span>*</span> </label>
            <select id=" category" name="category_id">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
            </select>
        </div>
        <div class="prod-create-btn">
            <button type="submit">Create</button>
        </div>
    </form>
</div>

@endsection