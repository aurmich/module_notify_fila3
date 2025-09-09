<?php

declare(strict_types=1);
namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType query()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin IdeHelperNotificationType
=======
>>>>>>> 9fd314be (.)
=======
 * @mixin IdeHelperNotificationType
>>>>>>> c0f200e (.)
=======
 * @mixin IdeHelperNotificationType
>>>>>>> 2b275b1a (.)
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
