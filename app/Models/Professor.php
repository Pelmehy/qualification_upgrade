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

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function specialty()
    {
        return $this->belongsTo('App\Models\Specialty');
    }
}
