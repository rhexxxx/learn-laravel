<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

$test = false;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
}
