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
