@extends('layouts.app')

@section('title-block')
    Профіль користувача
@endsection

@section('page-name')
    @php
        $page_name = ' '
    @endphp
@endsection

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3">
                <div class="author-card-profile row p-4">
                    @if(is_null($professor->avatar))
                        <div class="author-card-avatar col">
                            <svg class="bd-placeholder-img rounded-circle default-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" height="96" width="96"><path d="M11.25 35.2q3.15-2.15 6.2-3.3 3.05-1.15 6.55-1.15 3.55 0 6.6 1.15t6.25 3.3q2.2-2.7 3.125-5.425Q40.9 27.05 40.9 24q0-7.2-4.85-12.05Q31.2 7.1 24 7.1q-7.2 0-12.025 4.85T7.15 24q0 3.05.925 5.775Q9 32.5 11.25 35.2ZM24 25.45q-2.85 0-4.825-1.975T17.2 18.65q0-2.9 1.975-4.85Q21.15 11.85 24 11.85q2.9 0 4.85 1.975Q30.8 15.8 30.8 18.65t-1.975 4.825Q26.85 25.45 24 25.45Zm0 18.3q-4.05 0-7.65-1.575-3.6-1.575-6.275-4.25Q7.4 35.25 5.825 31.65 4.25 28.05 4.25 24q0-4.05 1.575-7.65 1.575-3.6 4.25-6.3 2.675-2.7 6.275-4.25 3.6-1.55 7.65-1.55 4.05 0 7.65 1.575 3.6 1.575 6.3 4.25 2.7 2.675 4.25 6.275 1.55 3.6 1.55 7.65 0 4.05-1.575 7.65-1.575 3.6-4.25 6.275-2.675 2.675-6.275 4.25-3.6 1.575-7.65 1.575Zm0-2.9q2.75 0 5.325-.775T34.5 37.3q-2.6-1.8-5.2-2.75T24 33.6q-2.65 0-5.275.925Q16.1 35.45 13.5 37.3q2.6 2 5.175 2.775 2.575.775 5.325.775Zm0-18.3q1.75 0 2.85-1.1t1.1-2.8q0-1.75-1.1-2.85T24 14.7q-1.7 0-2.8 1.1-1.1 1.1-1.1 2.85 0 1.7 1.1 2.8 1.1 1.1 2.8 1.1Zm0-3.9Zm0 18.6Z"/></svg>
                            <div class="auto-sizing"></div>
                        </div>
                    @else
                        <div class="author-card-avatar col">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Іванов Іван Іванов">
                            <div class="auto-sizing"></div>
                        </div>
                    @endif

                    <div class="author-card-details col">
                        <h5 class="author-card-name text-lg">{{$professor->user->name}}</h5>
                        <span class="author-card-position">
                                Спеціальність: {{$professor->specialty->name}} <br>
                                Предмет: Історія <br>
                                Поточне навантаження: 48 год <br>
                                Лекції: 12 год <br>
                                Лабораторні: 18 год <br>
                                Практика: 18 год <br>
                                Вільно: 112 год
                            </span>
                    </div>
                </div>
                <div class="row">
                    <p class="p4">{{$professor->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
