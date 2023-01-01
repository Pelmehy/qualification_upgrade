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
    <script src="js/curriculum_planning.js"></script>
    <form action="{{ route('curriculum_post') }}" method="POST" class="w-100">
        @csrf
        <input type="hidden" id="val" name="val" value="0">

        <div class="d-flex flex-column p-3 bg-light h-100 w-100">
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="inputState">Спеціальність</label>
                    <select id="inputSpecialty" name="inputSpecialty" class="form-control">
                        <option selected>Обрати</option>
                        @foreach($specialties as $specialty)
                            <option value="{{$specialty->id}}">{{$specialty->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <hr class="mt-2">
                <div class="form-row row d-flex mt-2" id="curriculum-rows">
                    <div class="form-row row d-flex mt-2" id="professor-0">

                    </div>
                </div>
                <div class="form-row row d-flex mt-5">
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-success col-md-2 w-100">Оновити</button>
                    </div>
                    <div class="form-group col-md-3">
                        <a href="javascript:void(0)" id="add-button" class="btn btn-outline-success" onclick="add()">Додати</a>
                    </div>
                </div>
        </div>
    </form>
    <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 300px;">
        <a class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
            <span class="fs-5 fw-semibold">Викладачі</span>
        </a>

        <div class="list-group list-group-flush border-bottom scrollarea">
            @foreach($professors as $professor)
                <a href="javascript:void(0)" class="list-group-item list-group-item-action py-3 lh-sm draggable" aria-current="true" id="professor-{{$professor->id}}" name="{{$professor->user->name}},{{$professor->id}}">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">{{$professor->user->name}}</strong>
                        <small>Історія</small>
                    </div>
                    <div class="col-10 mb-1 small"><span class="fw-semibold">Спеціальність: </span>{{$professor->specialty->name}}</div>
                    <div class="col-10 mb-1 small"><span class="fw-semibold">Поточне навантаження: </span>48 год</div>
                    <div class="col-10 mb-1 small"><span class="fw-semibold">Лекції: </span>12 год</div>
                    <div class="col-10 mb-1 small"><span class="fw-semibold">Лабораторні: </span>18 год</div>
                    <div class="col-10 mb-1 small"><span class="fw-semibold">Практика: </span>18 год</div>
                    <div class="col-10 mb-1 small"><span class="fw-semibold">Вільно: </span>112 год</div>
                </a>
            @endforeach
        </div>
    </div>

    <script>
        $(document).ready({

        })
        let count = 1;

        function showInput(select_value_id, input_other_id, div_input_id, select_div_id) {
            const SelectValue = document.getElementById(select_value_id);
            const inputOther = document.getElementById(input_other_id);
            const divInput = document.getElementById(div_input_id);
            const selectDiv = document.getElementById(select_div_id);

            console.log(SelectValue);
            console.log(inputOther);
            console.log(divInput);
            console.log(selectDiv);

            if (SelectValue.value === 'customOption') {
                inputOther.style.display='inline';
                inputOther.removeAttribute('disabled');
                divInput.classList.remove('disaplayInput');
                selectDiv.style.display='none';
                inputOther.focus();
                SelectValue.disabled = 'true';
            }
        }

        function hideInput(select_value_id, input_other_id, div_input_id, select_div_id){
            const inputOther = document.getElementById(input_other_id);
            const divInput = document.getElementById(div_input_id);
            const selectDiv = document.getElementById(select_div_id);
            const mySelect = $('#' + select_value_id);

            if (inputOther !== null && inputOther.value === "")
            {
                console.log(inputOther);
                inputOther.style.display='none';
                inputOther.setAttribute('disabled', '');
                selectDiv.style.display='inline';
                mySelect.removeAttr('disabled');
                divInput.classList.add('disaplayInput');
            }
        }

        function add()
        {
            $('#curriculum-rows').append(
                `
            <div class="form-row row d-flex mt-2" id="professor-${count}">
                <div class="form-group col-md-3 droppable" id="droppable">
                    <label for="inputCity">Викладач</label>
                    <input type="text" class="form-control" id="professorName" name="professor_name-${count}" placeholder="ПІБ" disabled>
                    <input type="hidden" id="professorId" name="professorId-${count}" value="0">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Предмет</label>
                    <div id="textSelectdiv-${count}">
                        <select id="textSelect-${count}" name="textSelect-${count}" class="select form-control" style="display: inline;" onchange="showInput('textSelect-${count}', 'form12-${count}', 'inputDiv-${count}', 'textSelectdiv-${count}')">
                            <option selected>Предмет</option>
                            @foreach($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                            <option value="customOption">Інше</option>
                    </select>
                </div>
                <div id="inputDiv-${count}" class="form-outline disaplayInput">
                                <input placeholder="Ведіть назву" type="text" id="form12-${count}" name="form-12-${count}" class="form-control" style="display: none;" onblur="hideInput('textSelect-${count}', 'form12-${count}', 'inputDiv-${count}', 'textSelectdiv-${count}')" disabled />
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="typeNumber">Лекції/год</label>
                            <input type="number" id="Lectures-${count}" name="Lectures-${count}" class="form-control" />
                        </div>
                        <div class="form-group col-md-2">
                            <label for="typeNumber">Лабораторні/год</label>
                            <input type="number" id="lab-${count}" name="lab-${count}" class="form-control" />
                        </div>
                        <div class="form-group col-md-2">
                            <label for="typeNumber">Практика/год</label>
                            <input type="number" id="pract-${count}" name="pract-${count}" class="form-control" />
                        </div>
                        <div class="form-group col-md-1">
                            <br>
                            <a href="javascript:void(0)" class="btn btn-danger" onclick="remove('professor-${count}')">X</a>
                        </div>
                `
            );

            count += 1;
            $('#val').val(count)
        }

        function remove(div_id)
        {
            $('#'+div_id).remove();
            count -= 1;
            $('#val').val(count)
        }
    </script>
@endsection
