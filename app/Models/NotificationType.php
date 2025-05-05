<?php

declare(strict_types=1);
namespace Modules\Notify\Models;

use Modules\Notify\Models\BaseModel;

/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType query()
 * @mixin \Eloquent
 */
class NotificationType extends BaseModel
{
    protected $fillable = [
        'name',
        'description',
        'template',
    ];
}
