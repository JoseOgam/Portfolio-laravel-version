<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'image',
        'description',
        'project_title',
        'source_code',

    ];

    protected $table = "project";
}
