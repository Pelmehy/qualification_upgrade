@extends('layouts.app')

@section('title-block')
    Додати користувачів
@endsection

@section('page-name')
    @php
        $page_name = 'add_users'
    @endphp
@endsection

@section('content')
    <script src="/js/add_users.js"></script>
    <div class="container center mt-5">
        <div class="row g-5">
            <form action="{{ route('save_users') }}" method="post" class="needs-validation" novalidate="">
                @csrf
                <div class="row text-center">
                    <div class="col">
                        <div id="textSelectdiv">
                            <select id="textSelect" name="textSelect" class="select form-control" style="display: inline;" onchange="showInput('textSelect', 'form12', 'inputDiv', 'textSelectdiv')">
                                <option selected>Спеціальність</option>
                                @foreach($specialties as $specialty)
                                    <option value="{{$specialty->id}}">{{$specialty->name}}</option>
                                @endforeach
                                <option value="customOption">Інше</option>
                            </select>
                        </div>
                        <div id="inputDiv" class="form-outline disaplayInput">
                            <input placeholder="Ведіть назву" type="text" id="form12" name="form-12" class="form-control" style="display: none;" onblur="hideInput('textSelect', 'form12', 'inputDiv', 'textSelectdiv')" disabled />
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <input type="value" name="val" id="val" class="form-control" placeholder="Кількість студентів" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col">
                        <a id="user_count" class="btn btn-success">Підтвердити</a>
                    </div>
                </div>

                <div class="row reg-form"></div>

                <div class="add_students hidden" id="form-btn">
                    <button type="submit" class="btn btn-success std-btn">Підтвердити</button>
                    <button type="button" id="get_pass" class="btn btn-success std-btn">Генерувати паролі</button>
                </div>
            </form>
        </div>
        <div class="" style="min-height: 85px;"></div>
    </div>

    <script>
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

        $(document).ready(function () {
            var count = document.getElementById('val');
            var btn_submit = document.getElementById('user_count');

            btn_submit.addEventListener('click',(event) => {
                form_gen(count.value);
            });

            function form_gen(count){
                const form = document.querySelector(".reg-form");

                let users_form = "";

                if (count > 0) {
                    for (let x = 0; x < count; x++) {
                        users_form += `
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="text" name="name-${x}" id="name-${x}" class="form-control" placeholder="ПІБ" aria-label="Username">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="text" name="email-${x}" id="email-${x}" class="form-control" placeholder="email">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="password" name="password-${x}" id="password-${x}" class="form-control" placeholder="password" aria-label="Username">
                                    </div>
                                </div>
                            </div>
                        `;
                    }

                    form.innerHTML = users_form;
                    $('#form-btn').removeClass('hidden')
                } else {
                    form.innerHTML = users_form;
                    $('#form-btn').addClass('hidden')
                }
            }
        });
    </script>
@endsection
