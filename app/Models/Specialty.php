<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    public static function get_all()
    {
        return Specialty::all();
    }

    public static function get($id)
    {
        return Specialty::where('id', $id)->first();
    }
}
