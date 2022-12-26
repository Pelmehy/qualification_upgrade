<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\Professor;
use App\Models\Specialty;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserProfileController extends Controller
{
    public function user_profile()
    {
        return view('user_profile');
    }

    public function add_users()
    {
        $subjects = Subject::get_all();
        $specialties = Specialty::get_all();

//        dd($subjects, $specialties);
        return view(
            'add_users',
            [
                'subjects' => $subjects,
                'specialties' => $specialties,
            ]
        );
    }

    public function save_users(Request $request)
    {
        $count = $request->input('val');
        $temp = [];

        $specialty_id = $request->input('textSelect');
        if ($specialty_id == 'customOption' || is_null($specialty_id)) {
            $specialty = new Specialty();

            $specialty->name = $request->input('form-12');
            $specialty->save();

            $specialty_id = $specialty->id;
        }

        for ($i = 0; $i < $count; $i++){
            $password = $request->input('password-'.$i);

            $user = new User();
            $user->user_type = 2;
            $user->name = $request->input('name-'.$i);
            $user->email = $request->input('email-'.$i);
            $user->password = $request->input('password-'.$i);
            $user->password =  Hash::make($password);
            $user->save();

            $user->password = $password;
            $temp[$i] = $user;


            $professor = new Professor();
            $professor->user_id = $user->id;
            $professor->specialty_id = $specialty_id;
            $professor->save();
        }

        return Excel::download(new UsersExport($temp), 'users.xlsx');
    }

}
