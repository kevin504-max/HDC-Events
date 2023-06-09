<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    protected $casts = ["items" => "array"];

    protected $dates = ["data"];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
