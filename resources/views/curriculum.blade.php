@extends('layouts.app')

@section('title-block')
    Навантаженність
@endsection

@section('page-name')
    @php
        $page_name = 'curriculum'
    @endphp
@endsection

@section('content')
    <div class="d-flex flex-column p-3 bg-light h-100 w-100">
        <form>
            <div class="form-row row d-flex">
                <div class="form-group col-md-3">
                    <label for="inputState">Спеціальність</label>
                    <select id="inputState" class="form-control">
                        <option selected>Обрати</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <br>
                    <button type="submit" class="btn btn-success col-md-2 w-100">Пошук</button>
                </div>
            </div>
        </form>

        <hr class="mt-3">
        <table class="table table-bordered mt-2">
            <thead>
            <tr>
                <th scope="col">Предмет</th>
                <th scope="col">Викладач</th>
                <th scope="col">Лекц/год</th>
                <th scope="col">Лаб/год</th>
                <th scope="col">Практ/год</th>
                <th scope="col">Сум/год</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Історія</td>
                <td>Іванов Іван Іванов</td>
                <td>6</td>
                <td>9</td>
                <td>9</td>
                <td>24</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
