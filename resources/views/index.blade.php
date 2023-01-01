@extends('layouts.app')

@section('title-block')
    Навантаженність
@endsection

@section('page-name')
    @php
        $page_name = 'workload'
    @endphp
@endsection

@section('content')
    <div class="d-flex flex-column p-3 bg-light w-100">
        <form method="POST" action="{{ route('post_workload') }}">
            @csrf
            <div class="form-row row d-flex">
                <div class="form-group col-md-3">
                    <label for="">Викладач</label>
                    <input type="text" class="form-control" id="professor_name" name="professor_name" placeholder="ПІБ" value="{{$professor_name}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Спеціальність</label>
                    <select id="specialty" name="specialty" class="form-control">
                        <option value="0" @if($specialty_id == 0) selected @endif>Обрати</option>
                        @foreach($specialties as $specialty)
                            <option value="{{$specialty->id}}" @if($specialty_id == $specialty->id) selected @endif>{{$specialty->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Предмет</label>
                    <select id="subject" name="subject" class="form-control">
                        <option value="0" @if($subject_id == 0) selected @endif>Обрати</option>
                        @foreach($subjects as $subject)
                            <option value="{{$subject->id}}" @if($subject_id == $subject->id) selected @endif>{{$subject->name}}</option>
                        @endforeach
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
                <th scope="col">Викладач</th>
                <th scope="col">Спеціальність</th>
                <th scope="col">Предмет</th>
                <th scope="col">Лекц/год</th>
                <th scope="col">Лаб/год</th>
                <th scope="col">Практ/год</th>
                <th scope="col">Сум/год</th>
            </tr>
            </thead>
            <tbody>
            @foreach($workloads as $workload)
                @foreach($workload->workload_one as $workload_element)
                    <tr>
                        <td>{{$workload_element->professor->user->name}}</td>
                        <td>{{$workload_element->specialty->name}}</td>
                        <td>{{$workload_element->subject->name}}</td>
                        <td>{{$workload_element->lecture_hours}}</td>
                        <td>{{$workload_element->lab_hours}}</td>
                        <td>{{$workload_element->pract_hours}}</td>
                        <td>{{$workload_element->lecture_hours + $workload_element->lab_hours + $workload_element->pract_hours}}</td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="3">Спільна навантаженість</th>
                    <td>{{$workload->workload_sum->lecture_hours}}</td>
                    <td>{{$workload->workload_sum->lab_hours}}</td>
                    <td>{{$workload->workload_sum->pract_hours}}</td>
                    <td>{{$workload->workload_sum->lecture_hours + $workload->workload_sum->lab_hours + $workload->workload_sum->pract_hours}}</td>
                </tr>
                @if(count($workloads) > 1)
                    <tr>
                        <th colspan="7"><br></th>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
