<div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100 m-5">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi pe-none me-2" xmlns="http://www.w3.org/2000/svg" height="40" width="40"><path d="M5 30v-2.792h30V30Zm0-8.625v-2.75h30v2.75Zm0-8.583V10h30v2.792Z"/></svg>
        <span class="fs-4">Sidebar</span>
    </a>
</div>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100 position-fixed">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi pe-none me-2" xmlns="http://www.w3.org/2000/svg" height="40" width="40"><path d="M5 30v-2.792h30V30Zm0-8.625v-2.75h30v2.75Zm0-8.583V10h30v2.792Z"/></svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{route('workload')}}" class="nav-link  @if($page_name == 'workload') active @else link-dark @endif ">
                    <svg class="bi pe-none me-2" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M3 21v-2l2-2v4Zm4 0v-6l2-2v8Zm4 0v-8l2 2.025V21Zm4 0v-5.975l2-2V21Zm4 0V11l2-2v12ZM3 15.825V13l7-7 4 4 7-7v2.825l-7 7-4-4Z"/></svg>
                    Навантаженість
                </a>
            </li>
            <li>
                <a href="{{route('course_list')}}" class="nav-link @if($page_name == 'course_list') active @else link-dark @endif">
                    <svg class="bi pe-none me-2" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M3 20v-1h2v-.5H4v-1h1V17H3v-1h3v4Zm5-1v-2h13v2Zm-5-5v-.9L4.8 11H3v-1h3v.9L4.2 13H6v1Zm5-1v-2h13v2ZM4 8V5H3V4h2v4Zm4-1V5h13v2Z"/></svg>
                    Список заннять
                </a>
            </li>
            <li>
                <a href="{{route('curriculum')}}" class="nav-link @if($page_name == 'curriculum') active @else link-dark @endif">
                    <svg class="bi pe-none me-2" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M6 22q-1.25 0-2.125-.875T3 19v-3h3V2l1.5 1.5L9 2l1.5 1.5L12 2l1.5 1.5L15 2l1.5 1.5L18 2l1.5 1.5L21 2v17q0 1.25-.875 2.125T18 22Zm12-2q.425 0 .712-.288Q19 19.425 19 19V5H8v11h9v3q0 .425.288.712.287.288.712.288ZM9 9V7h6v2Zm0 3v-2h6v2Zm8-3q-.425 0-.712-.288Q16 8.425 16 8t.288-.713Q16.575 7 17 7t.712.287Q18 7.575 18 8t-.288.712Q17.425 9 17 9Zm0 3q-.425 0-.712-.288Q16 11.425 16 11t.288-.713Q16.575 10 17 10t.712.287Q18 10.575 18 11t-.288.712Q17.425 12 17 12ZM6 20h9v-2H5v1q0 .425.287.712Q5.575 20 6 20Zm-1 0v-2 2Z"/></svg>
                    Учбовий план
                </a>
            </li>
            <li>
                <a href="{{route('curriculum_planning')}}" class="nav-link @if($page_name == 'curriculum_planning') active @else link-dark @endif">
                    <svg class="bi pe-none me-2" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M15 22v-2h4V10H5v4H3V6q0-.825.587-1.412Q4.175 4 5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588Q21 5.175 21 6v14q0 .825-.587 1.413Q19.825 22 19 22Zm-7 2-1.4-1.4L9.175 20H1v-2h8.175L6.6 15.4 8 14l5 5ZM5 8h14V6H5Zm0 0V6v2Z"/></svg>
                    Планування заннять
                </a>
            </li>
            <li>
                <a href="{{route('professor_list')}}" class="nav-link @if($page_name == 'professor_list') active @else link-dark @endif">
                    <svg class="bi pe-none me-2" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M1 20v-2.8q0-.85.438-1.563.437-.712 1.162-1.087 1.55-.775 3.15-1.163Q7.35 13 9 13t3.25.387q1.6.388 3.15 1.163.725.375 1.162 1.087Q17 16.35 17 17.2V20Zm18 0v-3q0-1.1-.612-2.113-.613-1.012-1.738-1.737 1.275.15 2.4.512 1.125.363 2.1.888.9.5 1.375 1.112Q23 16.275 23 17v3ZM9 12q-1.65 0-2.825-1.175Q5 9.65 5 8q0-1.65 1.175-2.825Q7.35 4 9 4q1.65 0 2.825 1.175Q13 6.35 13 8q0 1.65-1.175 2.825Q10.65 12 9 12Zm10-4q0 1.65-1.175 2.825Q16.65 12 15 12q-.275 0-.7-.062-.425-.063-.7-.138.675-.8 1.037-1.775Q15 9.05 15 8q0-1.05-.363-2.025Q14.275 5 13.6 4.2q.35-.125.7-.163Q14.65 4 15 4q1.65 0 2.825 1.175Q19 6.35 19 8ZM3 18h12v-.8q0-.275-.137-.5-.138-.225-.363-.35-1.35-.675-2.725-1.013Q10.4 15 9 15t-2.775.337Q4.85 15.675 3.5 16.35q-.225.125-.362.35-.138.225-.138.5Zm6-8q.825 0 1.413-.588Q11 8.825 11 8t-.587-1.412Q9.825 6 9 6q-.825 0-1.412.588Q7 7.175 7 8t.588 1.412Q8.175 10 9 10Zm0 8ZM9 8Z"/></svg>
                    Список викладачів
                </a>
            </li>
            <li>
                <a href="{{ route('add_users') }}" class="nav-link @if($page_name == 'add_users') active @else link-dark @endif">
                    <svg class="bi pe-none me-2" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M19 14q-.425 0-.712-.288Q18 13.425 18 13v-2h-2q-.425 0-.712-.288Q15 10.425 15 10t.288-.713Q15.575 9 16 9h2V7q0-.425.288-.713Q18.575 6 19 6t.712.287Q20 6.575 20 7v2h2q.425 0 .712.287Q23 9.575 23 10t-.288.712Q22.425 11 22 11h-2v2q0 .425-.288.712Q19.425 14 19 14ZM9 12q-1.65 0-2.825-1.175Q5 9.65 5 8q0-1.65 1.175-2.825Q7.35 4 9 4q1.65 0 2.825 1.175Q13 6.35 13 8q0 1.65-1.175 2.825Q10.65 12 9 12Zm-7 8q-.425 0-.712-.288Q1 19.425 1 19v-1.8q0-.85.438-1.563.437-.712 1.162-1.087 1.55-.775 3.15-1.163Q7.35 13 9 13t3.25.387q1.6.388 3.15 1.163.725.375 1.162 1.087Q17 16.35 17 17.2V19q0 .425-.288.712Q16.425 20 16 20Zm1-2h12v-.8q0-.275-.137-.5-.138-.225-.363-.35-1.35-.675-2.725-1.013Q10.4 15 9 15t-2.775.337Q4.85 15.675 3.5 16.35q-.225.125-.362.35-.138.225-.138.5Zm6-8q.825 0 1.413-.588Q11 8.825 11 8t-.587-1.412Q9.825 6 9 6q-.825 0-1.412.588Q7 7.175 7 8t.588 1.412Q8.175 10 9 10Zm0-2Zm0 7Z"/></svg>
                    Додати користувачів
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <svg class="rounded-circle me-2" xmlns="http://www.w3.org/2000/svg" height="40" width="40"><path d="M20 19.958q-2.75 0-4.562-1.812-1.813-1.813-1.813-4.563t1.813-4.562Q17.25 7.208 20 7.208t4.562 1.813q1.813 1.812 1.813 4.562t-1.813 4.563Q22.75 19.958 20 19.958ZM6.667 33.333v-4.166q0-1.542.77-2.688.771-1.146 2.021-1.729 2.709-1.25 5.313-1.896 2.604-.646 5.229-.646t5.208.646q2.584.646 5.334 1.896 1.25.625 2.02 1.75.771 1.125.771 2.667v4.166Zm2.791-2.791h21.084v-1.375q0-.584-.334-1.125-.333-.542-.833-.792-2.542-1.25-4.771-1.75T20 25q-2.375 0-4.625.5t-4.75 1.75q-.542.25-.854.792-.313.541-.313 1.125ZM20 17.208q1.542 0 2.583-1.041 1.042-1.042 1.042-2.584 0-1.541-1.042-2.583Q21.542 9.958 20 9.958q-1.542 0-2.583 1.042-1.042 1.042-1.042 2.583 0 1.542 1.042 2.584 1.041 1.041 2.583 1.041Zm0-3.625Zm0 16.959Z"/></svg>
{{--                <img src="https://github.com/mdo.png" alt="" class="rounded-circle me-2" width="32" height="32">--}}
                <strong>User Name</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" style="">
                <li><a class="dropdown-item" href="#">add later</a></li>
                <li><a class="dropdown-item" href="#">add later</a></li>
                <li><a class="dropdown-item" href="{{ route('user_profile') }}">Особистий профіль</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Вихід</a></li>
            </ul>
        </div>
    </div>

