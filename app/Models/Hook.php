<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hook extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'status_id',
        'pipeline_id',
    ];
}
