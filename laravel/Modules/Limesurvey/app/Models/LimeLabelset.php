<?php

declare(strict_types=1);

namespace Modules\Limesurvey\Models;

use GeneaLabs\LaravelModelCaching\CachedBuilder;

/**
 * Modules\Limesurvey\Models\LimeLabelset
 *
 * @method static CachedBuilder|LimeLabelset all($columns = [])
 * @method static CachedBuilder|LimeLabelset avg($column)
 * @method static CachedBuilder|LimeLabelset cache(array $tags = [])
 * @method static CachedBuilder|LimeLabelset cachedValue(array $arguments, string $cacheKey)
 * @method static CachedBuilder|LimeLabelset count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel disableCache()
 * @method static CachedBuilder|LimeLabelset disableModelCaching()
 * @method static CachedBuilder|LimeLabelset exists()
 * @method static \Modules\Limesurvey\Database\Factories\LimeLabelsetFactory factory($count = null, $state = [])
 * @method static CachedBuilder|LimeLabelset flushCache(array $tags = [])
 * @method static CachedBuilder|LimeLabelset getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static CachedBuilder|LimeLabelset inRandomOrder($seed = '')
 * @method static CachedBuilder|LimeLabelset insert(array $values)
 * @method static CachedBuilder|LimeLabelset isCachable()
 * @method static CachedBuilder|LimeLabelset max($column)
 * @method static CachedBuilder|LimeLabelset min($column)
 * @method static CachedBuilder|LimeLabelset newModelQuery()
 * @method static CachedBuilder|LimeLabelset newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel ofFilterData(\Modules\Quaeris\Datas\AnswersFilterData $answersFilterData)
 * @method static CachedBuilder|LimeLabelset query()
 * @method static CachedBuilder|LimeLabelset sum($column)
 * @method static CachedBuilder|LimeLabelset truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 *
 * @property int $lid
 * @property string $label_name
 * @property string $languages
 *
 * @method static CachedBuilder|LimeLabelset whereLabelName($value)
 * @method static CachedBuilder|LimeLabelset whereLanguages($value)
 * @method static CachedBuilder|LimeLabelset whereLid($value)
 *
 * @mixin \Eloquent
 */
class LimeLabelset extends BaseModel
{
    /** @var bool */
    public $timestamps = true;

    /**  @var string   */
    protected $table = 'lime_labelsets';

    /**  @var string   */
    protected $primaryKey = 'lid';

    /** @var array<int, string>  */
    protected $fillable = [
        'label_name', 'languages',
    ];

    /** @var array<int, string>  */
    protected $hidden = [
    ];

    /** @return array<string, string>     */
    protected $casts = [
        'lid' => 'int', 'label_name' => 'string', 'languages' => 'string',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array<string>
     */
    protected $dates = [
    ];

    // Scopes...

    // Functions ...

    // Relations ...
}
