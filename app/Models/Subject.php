<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public static function get_all()
    {
        return Subject::all();
    }

    public static function get($id)
    {
        return Subject::where('id', $id)->first();
    }
}
