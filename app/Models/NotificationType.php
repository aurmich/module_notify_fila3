<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType query()
 * @method static NotificationType|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, NotificationType> get()
 * @method static NotificationType create(array $attributes = [])
 * @method static NotificationType firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationType whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin IdeHelperNotificationType
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
