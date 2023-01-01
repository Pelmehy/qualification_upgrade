<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
//    use HasFactory;

    public static function get_all()
    {
        return Professor::all();
    }

    public static function get($id)
    {
        return Professor::where('id', $id)->first();
    }

    public static function get_ids()
    {
        return Professor::pluck('id');
    }

    public static function get_by_name($name)
    {
        return Professor::select('professors.id')
            ->leftJoin('users', 'users.id', '=', 'professors.user_id')
            ->where('users.user_type', 2)
            ->where('users.name', 'like', "%$name%")
            ->pluck('professors.id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function specialty()
    {
        return $this->belongsTo('App\Models\Specialty');
    }
}
