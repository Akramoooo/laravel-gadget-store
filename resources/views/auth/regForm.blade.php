@extends('layouts.mainLayout')

@section('title', 'Регистрация')

@section('content')

<div class="create-prod-container">

    <form action="{{ route('register') }}" method="POST">
        @csrf
        @if($errors->any())
        <div class="error-container">
            {{ $errors->first() }}
        </div>
        @endif
        <div>
            <h3>Registration</h3>
        </div>
        <div>
            <label for="">Your name <span>*</span> </label>
            <input type="text" name="name" value="{{ old('prod_name') }}">
        </div>
        <div>
            <label for="">Email <span>*</span> </label>
            <input type="email" name="email" value="{{ old('price') }}">
        </div>
        <div>
            <label for="">Password <span>*</span> </label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="">Confirm <span>*</span> </label>
            <input type="password" name="password_confirmation">
        </div>
        <div class="prod-create-btn">
            <button type="submit">Sign in</button>
        </div>
    </form>
</div>

@endsection

<style>

.create-prod-container>form{
    border: 1px solid black;
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    box-shadow: 5px 7px 19px 0px #000;
}
</style>