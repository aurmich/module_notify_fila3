<?php

namespace Modules\Geo\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'state',
        'state_code',
    ];
}
