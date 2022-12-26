@extends('layouts.app')

@section('title-block')
    Планування
@endsection

@section('page-name')
    @php
        $page_name = 'professor_list'
    @endphp
@endsection

@section('content')
    <div class="container marketing align-center">
        <div class="row d-flex justify-content-center mt-3">
            @foreach($professors as $professor)
                        <div class="col-lg-4 user-preview mb-4" align="center">
                            {{--                <svg class="bd-placeholder-img rounded-circle default-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" height="96" width="96"><path d="M12.4 35.45q2.75-1.8 5.5-2.875T24 31.5q3.35 0 6.1 1.075 2.75 1.075 5.55 2.875 2.1-2.2 3.375-5.1Q40.3 27.45 40.3 24q0-6.8-4.75-11.55Q30.8 7.7 24 7.7q-6.75 0-11.525 4.75T7.7 24q0 3.45 1.275 6.35 1.275 2.9 3.425 5.1ZM24 24.55q-2.4 0-4.025-1.625Q18.35 21.3 18.35 18.9q0-2.45 1.625-4.05 1.625-1.6 4.025-1.6 2.45 0 4.05 1.625 1.6 1.625 1.6 4.025 0 2.4-1.625 4.025Q26.4 24.55 24 24.55Zm0 16.85q-3.6 0-6.8-1.375Q14 38.65 11.675 36.3t-3.7-5.5Q6.6 27.65 6.6 24q0-3.6 1.375-6.775 1.375-3.175 3.725-5.55t5.5-3.725Q20.35 6.6 24 6.6q3.6 0 6.775 1.375 3.175 1.375 5.55 3.725t3.725 5.525Q41.4 20.4 41.4 24q0 3.6-1.375 6.8Q38.65 34 36.3 36.325t-5.525 3.7Q27.6 41.4 24 41.4Zm0-1.1q2.85 0 5.7-1.025t5-2.975q-2.15-1.7-4.875-2.7-2.725-1-5.825-1t-5.85.95q-2.75.95-4.8 2.75 2.15 1.95 4.975 2.975Q21.15 40.3 24 40.3Zm0-16.85q2 0 3.275-1.3t1.275-3.25q0-2-1.3-3.275T24 14.35q-1.95 0-3.25 1.3t-1.3 3.25q0 1.95 1.3 3.25t3.25 1.3Zm0-4.55Zm0 17.55Z"/></svg>--}}
                            <svg class="bd-placeholder-img rounded-circle default-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" height="96" width="96"><path d="M11.25 35.2q3.15-2.15 6.2-3.3 3.05-1.15 6.55-1.15 3.55 0 6.6 1.15t6.25 3.3q2.2-2.7 3.125-5.425Q40.9 27.05 40.9 24q0-7.2-4.85-12.05Q31.2 7.1 24 7.1q-7.2 0-12.025 4.85T7.15 24q0 3.05.925 5.775Q9 32.5 11.25 35.2ZM24 25.45q-2.85 0-4.825-1.975T17.2 18.65q0-2.9 1.975-4.85Q21.15 11.85 24 11.85q2.9 0 4.85 1.975Q30.8 15.8 30.8 18.65t-1.975 4.825Q26.85 25.45 24 25.45Zm0 18.3q-4.05 0-7.65-1.575-3.6-1.575-6.275-4.25Q7.4 35.25 5.825 31.65 4.25 28.05 4.25 24q0-4.05 1.575-7.65 1.575-3.6 4.25-6.3 2.675-2.7 6.275-4.25 3.6-1.55 7.65-1.55 4.05 0 7.65 1.575 3.6 1.575 6.3 4.25 2.7 2.675 4.25 6.275 1.55 3.6 1.55 7.65 0 4.05-1.575 7.65-1.575 3.6-4.25 6.275-2.675 2.675-6.275 4.25-3.6 1.575-7.65 1.575Zm0-2.9q2.75 0 5.325-.775T34.5 37.3q-2.6-1.8-5.2-2.75T24 33.6q-2.65 0-5.275.925Q16.1 35.45 13.5 37.3q2.6 2 5.175 2.775 2.575.775 5.325.775Zm0-18.3q1.75 0 2.85-1.1t1.1-2.8q0-1.75-1.1-2.85T24 14.7q-1.7 0-2.8 1.1-1.1 1.1-1.1 2.85 0 1.7 1.1 2.8 1.1 1.1 2.8 1.1Zm0-3.9Zm0 18.6Z"/></svg>
                            {{--                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>--}}

                            <h2 class="fw-normal">{{$professor->user->name}}</h2>
                            <p>
                                <span class="fw-semibold">Предмет: </span>{{$professor->specialty->name}}
                                <br>
                                <span class="fw-semibold">Поточне навантаження: </span>48 год
                            </p>
                            <p><a class="btn btn-secondary" href="{{ route('professor_info', [$professor->id]) }}">Детальніше »</a></p>
                        </div><!-- /.col-lg-4 -->
            @endforeach
        </div>
    </div>
@endsection
