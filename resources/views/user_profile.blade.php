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
                        <div class="author-card-avatar col">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Іванов Іван Іванов">
                            <div class="auto-sizing"></div>
                        </div>
                        <div class="author-card-details col">
                            <h5 class="author-card-name text-lg">Іванов Іван Іванов</h5>
                            <span class="author-card-position">
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
                        <p class="p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Profile Settings-->
            <div class="col pb-5">
                <form class="row">
                    <hr class="m-2">
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="account-email">E-mail Address</label>
                            <input class="form-control" type="email" id="account-email" value="example@example.com" disabled="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="account-phone">Номер телефону</label>
                            <input class="form-control" type="text" id="account-phone" value="+380999999999" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="comment">Біо:</label>
                        <textarea class="form-control" rows="4" id="comment"></textarea>
                    </div>
                    <hr class="m-2 col-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-pass">Новий пароль</label>
                            <input class="form-control" type="password" id="account-pass">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">Підтвердіть пароль</label>
                            <input class="form-control" type="password" id="account-confirm-pass">
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <button class="btn btn-style-1 btn-primary" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Оновити профіль</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
