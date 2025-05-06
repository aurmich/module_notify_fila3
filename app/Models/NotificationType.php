<?php

declare(strict_types=1);
namespace Modules\Notify\Models;

<<<<<<< HEAD
use Modules\Notify\Models\BaseModel;
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 185a07e (.)

/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType query()
 * @mixin \Eloquent
 */
<<<<<<< HEAD
class NotificationType extends BaseModel
=======
class NotificationType extends Model
>>>>>>> 185a07e (.)
{
    protected $fillable = [
        'name',
        'description',
        'template',
    ];
}
