<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
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
class MailTemplate extends SpatieMailTemplate
{
    use SoftDeletes;
    use HasTranslations;

    /** @var string */
    protected $connection = 'notify';

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
    public function versions(): HasMany
    {
        return $this->hasMany(MailTemplateVersion::class, 'template_id')
            ->orderByDesc('version');
    }

    public function logs(): HasMany
    {
        return $this->hasMany(MailTemplateLog::class, 'template_id');
    }

    /**
     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
     */
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
}
