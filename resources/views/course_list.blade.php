@extends('layouts.app')

@section('title-block')
    Список заннять
@endsection

@section('page-name')
    @php
        $page_name = 'course_list'
    @endphp
@endsection

@section('content')
    <div class="d-flex flex-column p-3 bg-light h-100 w-100">
        <form>
            @csrf
            <div class="form-row row d-flex">
                <div class="form-group col-md-3">
                    <label for="inputCity">Викладач</label>
                    <input type="text" class="form-control" id="professor_name" placeholder="ПІБ">
                </div>
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
                <div class="form-group col-md-3">
                    <br>
                    <button type="submit" class="btn btn-success col-md-2 w-100">Друк</button>
                </div>
            </div>
        </form>

        <hr class="mt-3">
        <table class="table table-bordered mt-2">
            <thead>
            <tr>
                <th scope="col">Викладач</th>
                <th scope="col">Спеціальність</th>
                <th scope="col">Предмет</th>
                <th scope="col">Лекц/год</th>
                <th scope="col">Лаб/год</th>
                <th scope="col">Практ/год</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Іванов Іван Іванов</td>
                <td>АПЕПС</td>
                <td>Історія</td>
                <td>6</td>
                <td>9</td>
                <td>9</td>
            </tr>
            <tr>
                <td>Іванов Іван Іванов</td>
                <td>СУБД</td>
                <td>Історія</td>
                <td>6</td>
                <td>9</td>
                <td>9</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
