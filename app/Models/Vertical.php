<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vertical extends Model
{
    protected $fillable = [
        'vertical_name',
        'vertical_head_name',
        'vertical_head_emailId',
        'vertical_head_contact',
    ];
}
