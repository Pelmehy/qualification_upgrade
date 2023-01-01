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
        <form method="POST" action="{{route('filter_or_print', [$specialty_id])}}">
            @csrf
            <div class="form-row row d-flex">
                <div class="form-group col-md-3">
                    <label for="inputCity">Викладач</label>
                    <input type="text" class="form-control" id="professor_name" name="professor_name" placeholder="ПІБ" value="{{$professor_name}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="input_specialty">Спеціальність</label>
                    <select id="input_specialty" name="input_specialty" class="form-control">
                        <option value="0" @if($specialty_id == 0) selected @endif>Обрати</option>
                        @foreach($specialties as $specialty)
                            <option value="{{$specialty->id}}" @if($specialty_id == $specialty->id) selected @endif>{{$specialty->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <br>
{{--                    <input type="submit" value="Пошук" class="btn btn-success col-md-2 w-100">--}}
                    <button type="submit" name="action" value="filter" class="btn btn-success col-md-2 w-100">Пошук</button>
                </div>
                <div class="form-group col-md-3">
                    <br>
{{--                    <input type="submit" value="Друк" class="btn btn-success col-md-2 w-100">--}}
                    <button type="submit" name="action" value="download" class="btn btn-success col-md-2 w-100">Друк</button>
                </div>
            </div>
        </form>

        <hr class="mt-3">
        @foreach($curriculums as $curriculum_group)
            <table class="table table-bordered mt-2">
                <thead>
                <tr>
                    <th colspan="5">{{$curriculum_group->specialty_name}}</th>
                </tr>
                <tr>
                    <th scope="col">Викладач</th>
                    <th scope="col">Предмет</th>
                    <th scope="col">Лекц/год</th>
                    <th scope="col">Лаб/год</th>
                    <th scope="col">Практ/год</th>
                </tr>
                </thead>
                <tbody>
                @foreach($curriculum_group->curriculums as $curriculum)
                    <tr>
                        <td>{{$curriculum->professor->user->name}}</td>
                        <td>{{$curriculum->subject->name}}</td>
                        <td>{{$curriculum->lecture_hours}}</td>
                        <td>{{$curriculum->lab_hours}}</td>
                        <td>{{$curriculum->pract_hours}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        @endforeach
    </div>
@endsection
