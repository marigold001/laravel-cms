<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $guarded = [];

//    A submission belongs to one Contest
    public function contest_id()
    {
        return $this->hasOne(Contest::class);
    }

}
