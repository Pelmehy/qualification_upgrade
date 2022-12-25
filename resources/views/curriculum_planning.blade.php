@extends('layouts.app')

@section('title-block')
    Планування
@endsection

@section('page-name')
    @php
        $page_name = 'curriculum_planning'
    @endphp
@endsection

@section('content')
    <div class="d-flex flex-column p-3 bg-light h-100 w-100">
        <form action="" class="row">
            <div class="form-group col-md-3">
                <label for="inputState">Спеціальність</label>
                <select id="inputState" class="form-control">
                    <option selected>Обрати</option>
                    <option>...</option>
                </select>
            </div>
        </form>

        <hr class="mt-2">
        <form>
            <div class="form-row row d-flex mt-2">
                <div class="form-group col-md-3">
                    <label for="inputCity">Викладач</label>
                    <input type="text" class="form-control" id="professor_name" placeholder="ПІБ">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Предмет</label>
                    <select id="inputState" class="form-control">
                        <option selected>Обрати</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="typeNumber">Лекції/год</label>
                    <input type="number" id="typeNumber" class="form-control" />
                </div>
                <div class="form-group col-md-2">
                    <label for="typeNumber">Лабораторні/год</label>
                    <input type="number" id="typeNumber" class="form-control" />
                </div>
                <div class="form-group col-md-2">
                    <label for="typeNumber">Практика/год</label>
                    <input type="number" id="typeNumber" class="form-control" />
                </div>
            </div>
            <div class="form-row row d-flex mt-5">
                <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-success col-md-2 w-100">Оновити</button>
                </div>
                <div class="form-group col-md-3">
                    <a href="javascript:void(0)" class="btn btn-outline-success">Додати</a>
                </div>
            </div>
        </form>
    </div>

    <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
        <a class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
            <span class="fs-5 fw-semibold">Викладачі</span>
        </a>
        <div class="list-group list-group-flush border-bottom scrollarea">
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">Іванов Іван Іванов</strong>
                    <small>Історія</small>
                </div>
                <div class="col-10 mb-1 small"><span class="fw-semibold">Предмет: </span>Історія</div>
                <div class="col-10 mb-1 small"><span class="fw-semibold">Поточне навантаження: </span>48 год</div>
                <div class="col-10 mb-1 small"><span class="fw-semibold">Лекції: </span>12 год</div>
                <div class="col-10 mb-1 small"><span class="fw-semibold">Лабораторні: </span>18 год</div>
                <div class="col-10 mb-1 small"><span class="fw-semibold">Практика: </span>18 год</div>
                <div class="col-10 mb-1 small"><span class="fw-semibold">Вільно: </span>112 год</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>

            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">List group item heading</strong>
                    <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
        </div>
    </div>
@endsection
