@extends('layouts.mainLayout')
@section('title', 'Профиль')



@section('content')

<div class="main-profile-container">
    <div class="pre-profile-container">
        <div class="prof-img">
            <img src="{{ asset('avatars/' . $user->avatar) }}" alt="аватар">
        </div>
        <div class="prof-info">
            <p>{{ $user->name }}</p>
            <p>Активный</p>
            <p>{{ $user->role }}</p>
        </div>
    </div>
</div>
<div class="logout-btn">
    <button><a href="{{ route('profile.logOut') }}">Выйти</a></button>
</div>


@endsection





@section('includes')

<script>
    $(document).ready(function(){
        $('.prof-img').click(function(){
            var elPhoto = $(this).val();
            console.log('лох');
        });
    });
</script>

@endsection