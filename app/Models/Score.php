<?php

namespace App\Models;

use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'scores';
}
