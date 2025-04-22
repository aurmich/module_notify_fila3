<?php

<<<<<<< HEAD
declare(strict_types=1);
=======
>>>>>>> 9165bf1 (.)
namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Model;

/**
<<<<<<< HEAD
=======
 * 
 *
>>>>>>> 9165bf1 (.)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType query()
 * @mixin \Eloquent
 */
class NotificationType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'template',
    ];
}
