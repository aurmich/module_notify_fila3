<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
<<<<<<< HEAD
 * @property-read \Modules\User\Models\Profile|null $creator
=======
 * 
 *
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
>>>>>>> 9508e1f (.)
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $mailable
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Notify\Models\MailTemplate|null $template
<<<<<<< HEAD
 * @property-read \Modules\User\Models\Profile|null $updater
=======
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
>>>>>>> 9508e1f (.)
 * @method static \Modules\Notify\Database\Factories\MailTemplateLogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MailTemplateLog query()
 * @mixin \Eloquent
 */
class MailTemplateLog extends BaseModel
{
    protected $fillable = [
        'template_id',
        'mailable_type',
        'mailable_id',
        'status',
        'status_message',
        'data',
        'metadata',
        'sent_at',
        'delivered_at',
        'failed_at',
        'opened_at',
        'clicked_at',
    ];

<<<<<<< HEAD
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'data' => 'array',
            'metadata' => 'array',
            'sent_at' => 'datetime',
            'delivered_at' => 'datetime',
            'failed_at' => 'datetime',
            'opened_at' => 'datetime',
            'clicked_at' => 'datetime',
        ];
    }
=======
    protected $casts = [
        'data' => 'array',
        'metadata' => 'array',
        'sent_at' => 'datetime',
        'delivered_at' => 'datetime',
        'failed_at' => 'datetime',
        'opened_at' => 'datetime',
        'clicked_at' => 'datetime',
    ];
>>>>>>> 9508e1f (.)

    public function template(): BelongsTo
    {
        return $this->belongsTo(MailTemplate::class, 'template_id');
    }

    public function mailable(): MorphTo
    {
        return $this->morphTo();
    }
}
