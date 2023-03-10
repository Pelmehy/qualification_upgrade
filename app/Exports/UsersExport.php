<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    public function __construct($users)
    {
        $this->users = $users;
    }

    public function View(): View
    {
        return view(
            'exports.passwords',
            [
                'users' => $this->users,
            ]
        );
    }
}
