<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
//use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Contracts\Mail\Mailable;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
>>>>>>> a5a128a (.)
use Spatie\MailTemplates\Models\MailTemplate as SpatieMailTemplate;

/**
 * @property int $id
 * @property string $mailable
 * @property string|null $subject
 * @property string $html_template
 * @property string|null $text_template
 * @property int $version
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Notify\Models\MailTemplateVersion> $versions
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Notify\Models\MailTemplateLog> $logs
 */
<<<<<<< HEAD
class MailTemplate extends SpatieMailTemplate implements MailTemplateInterface
{
    //use SoftDeletes;
    use HasTranslations;
    use HasSlug;
=======
class MailTemplate extends SpatieMailTemplate
{
    use SoftDeletes;
    use HasTranslations;
>>>>>>> a5a128a (.)

    /** @var string */
    protected $connection = 'notify';

<<<<<<< HEAD
    /** @var list<string> */
    public array $translatable = ['subject', 'html_template', 'text_template'];

    /** @var list<string> */
    protected $fillable = [
        'mailable',
        'name',
        'slug',
        'subject',
        'html_template',
        'text_template',
        //'version',  //under development
    ];

    /**
     * Define attribute casts.
     *
     * @return array<string, string>
     */
    public function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function scopeForMailable(Builder $query, Mailable $mailable): Builder
    {

        return $query
            ->where('mailable', get_class($mailable))
            ->where('slug', $mailable->getSlug());
    }


    /*
     * Versioni del template email.
     *
     * @return HasMany<MailTemplateVersion>

=======
    /** @var array<string> */
    public $translatable = ['subject', 'html_template', 'text_template'];

    /** @var array<string> */
    protected $fillable = [
        'mailable',
        'subject',
        'html_template',
        'text_template',
        'version',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /**
     * Versioni del template email.
     *
     * @return HasMany<MailTemplateVersion>
     */
>>>>>>> a5a128a (.)
    public function versions(): HasMany
    {
        return $this->hasMany(MailTemplateVersion::class, 'template_id')
            ->orderByDesc('version');
    }

    public function logs(): HasMany
    {
        return $this->hasMany(MailTemplateLog::class, 'template_id');
    }

<<<<<<< HEAD
=======
    /**
>>>>>>> a5a128a (.)
     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
<<<<<<< HEAD
=======
     */
>>>>>>> a5a128a (.)
    public function createNewVersion(string $createdBy, ?string $notes = null): self
    {
        $this->versions()->create([
            'mailable' => $this->mailable,
            'subject' => $this->subject,
            'html_template' => $this->html_template,
            'text_template' => $this->text_template,
            'version' => $this->version,
            'created_by' => $createdBy,
            'change_notes' => $notes,
        ]);

        $this->increment('version');
        return $this;
    }
<<<<<<< HEAD
    */


=======
>>>>>>> a5a128a (.)
}
