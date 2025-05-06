<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Traits\Updater;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
<<<<<<< HEAD
use Modules\Xot\Models\XotBaseModel;
=======
>>>>>>> 185a07e (.)

/**
 * Class BaseModel.
 */
<<<<<<< HEAD
abstract class BaseModel extends XotBaseModel implements HasMedia
=======
abstract class BaseModel extends Model implements HasMedia
>>>>>>> 185a07e (.)
{
    // use Searchable;
    use HasFactory;
    use InteractsWithMedia;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'notify';

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory()
    {
        return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, string> */
    public function casts(): array
    {
<<<<<<< HEAD
        return array_merge(parent::casts(), [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ]);
=======
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',

            'verified_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
>>>>>>> 185a07e (.)
    }
}
