<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SpmbSubmission extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phone','school','notes','status'];
}
