<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
=======
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
>>>>>>> 5f3f456 (up)
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
<<<<<<< HEAD
abstract class BaseModel extends Model
{
<<<<<<< HEAD
    // use Searchable;
    // //use Cachable;
=======
=======
abstract class BaseModel extends Model {
>>>>>>> 5f3f456 (up)
    use Updater;

<<<<<<< HEAD
protected $perPage = 30;

    //use Searchable;
    //use Cachable;
>>>>>>> 9a6fed4 (up)
=======
    // use Searchable;
    // use Cachable;
>>>>>>> 5f3f456 (up)
    use HasFactory;
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    // public static $snakeAttributes = true;

    protected $perPage = 30;

<<<<<<< HEAD
    use Updater;
=======
    protected $connection = 'notify';

>>>>>>> 5f3f456 (up)
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
<<<<<<< HEAD
    public static $snakeAttributes = true;
=======
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
    ];
>>>>>>> 5f3f456 (up)

    /**
     * @var bool
     */
    public $incrementing = true;
<<<<<<< HEAD

=======
    /**
     * @var array
     */
    protected $hidden = [
        // 'password'
    ];
>>>>>>> 5f3f456 (up)
    /**
     * @var bool
     */
    public $timestamps = true;

    protected $perPage = 30;

    protected $connection = 'notify';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
    ];

    protected $appends = [];

    /**
     * @var array<string>
     */
    protected $dates = ['published_at', 'created_at', 'updated_at', 'verified_at'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
<<<<<<< HEAD
    protected static function newFactory()
    {
        return FactoryService::newFactory(static::class);
=======
    protected static function newFactory() {
        return FactoryService::newFactory(get_called_class());
>>>>>>> 5f3f456 (up)
    }
}
=======
=======
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 47d9a86 (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model {
    use Updater;

    // use Searchable;
    // use Cachable;
    use HasFactory;
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
     public static $snakeAttributes = true;

    protected $perPage = 30;

    protected $connection = 'notify';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
    ];

    /**
     * @var string[]
     */
    protected $dates = ['published_at', 'created_at', 'updated_at'];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $incrementing = true;
    /**
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
    ];
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory() {
        return FactoryService::newFactory(get_called_class());
    }
<<<<<<< HEAD
}
<<<<<<< HEAD
=======
=======
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model {
    use Updater;

    // use Searchable;
    // use Cachable;
    use HasFactory;
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    protected $perPage = 30;

    protected $connection = 'notify';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
    ];

    /**
     * @var string[]
     */
    protected $dates = ['published_at', 'created_at', 'updated_at'];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $incrementing = true;
    /**
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
    ];
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory() {
        return FactoryService::newFactory(static::class);
    }
}
<<<<<<< HEAD
>>>>>>> 89120cb (rebase)
>>>>>>> 9349baf (.)
=======
}
>>>>>>> 47d9a86 (.)
=======
>>>>>>> 780e17a (up)
