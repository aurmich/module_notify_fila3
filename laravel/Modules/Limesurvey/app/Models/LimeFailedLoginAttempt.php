<?php

declare(strict_types=1);

namespace Modules\Limesurvey\Models;

use GeneaLabs\LaravelModelCaching\CachedBuilder;

/**
 * Modules\Limesurvey\Models\LimeFailedLoginAttempt
 *
 * @method static CachedBuilder|LimeFailedLoginAttempt all($columns = [])
 * @method static CachedBuilder|LimeFailedLoginAttempt avg($column)
 * @method static CachedBuilder|LimeFailedLoginAttempt cache(array $tags = [])
 * @method static CachedBuilder|LimeFailedLoginAttempt cachedValue(array $arguments, string $cacheKey)
 * @method static CachedBuilder|LimeFailedLoginAttempt count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel disableCache()
 * @method static CachedBuilder|LimeFailedLoginAttempt disableModelCaching()
 * @method static CachedBuilder|LimeFailedLoginAttempt exists()
 * @method static \Modules\Limesurvey\Database\Factories\LimeFailedLoginAttemptFactory factory($count = null, $state = [])
 * @method static CachedBuilder|LimeFailedLoginAttempt flushCache(array $tags = [])
 * @method static CachedBuilder|LimeFailedLoginAttempt getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static CachedBuilder|LimeFailedLoginAttempt inRandomOrder($seed = '')
 * @method static CachedBuilder|LimeFailedLoginAttempt insert(array $values)
 * @method static CachedBuilder|LimeFailedLoginAttempt isCachable()
 * @method static CachedBuilder|LimeFailedLoginAttempt max($column)
 * @method static CachedBuilder|LimeFailedLoginAttempt min($column)
 * @method static CachedBuilder|LimeFailedLoginAttempt newModelQuery()
 * @method static CachedBuilder|LimeFailedLoginAttempt newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel ofFilterData(\Modules\Quaeris\Datas\AnswersFilterData $answersFilterData)
 * @method static CachedBuilder|LimeFailedLoginAttempt query()
 * @method static CachedBuilder|LimeFailedLoginAttempt sum($column)
 * @method static CachedBuilder|LimeFailedLoginAttempt truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 *
 * @property int $id
 * @property string $ip
 * @property string $last_attempt
 * @property int $number_attempts
 * @property int $is_frontend
 *
 * @method static CachedBuilder|LimeFailedLoginAttempt whereId($value)
 * @method static CachedBuilder|LimeFailedLoginAttempt whereIp($value)
 * @method static CachedBuilder|LimeFailedLoginAttempt whereIsFrontend($value)
 * @method static CachedBuilder|LimeFailedLoginAttempt whereLastAttempt($value)
 * @method static CachedBuilder|LimeFailedLoginAttempt whereNumberAttempts($value)
 *
 * @mixin \Eloquent
 */
class LimeFailedLoginAttempt extends BaseModel
{
    /** @var bool */
    public $timestamps = true;

    /**  @var string   */
    protected $table = 'lime_failed_login_attempts';

    /**  @var string   */
    protected $primaryKey = 'id';

    /** @var array<int, string>  */
    protected $fillable = [
        'ip', 'last_attempt', 'number_attempts',
    ];

    /** @var array<int, string>  */
    protected $hidden = [
    ];

    /** @return array<string, string>     */
    protected $casts = [
        'id' => 'int', 'ip' => 'string', 'last_attempt' => 'string', 'number_attempts' => 'int',
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
