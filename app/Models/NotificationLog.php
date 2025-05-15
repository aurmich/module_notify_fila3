<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\Tenant\Models\Traits\HasTenant;
use Modules\Xot\Traits\Updater;
=======
use Illuminate\Database\Eloquent\Relations\MorphTo;
>>>>>>> 064a54f (.)

/**
 * Modello per il logging delle notifiche inviate.
 */
class NotificationLog extends Model
{
    use HasFactory;
<<<<<<< HEAD
    use HasTenant;
    use Updater;

    public const STATUS_PENDING = 'pending';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_SENT = 'sent';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_FAILED = 'failed';
    public const STATUS_OPENED = 'opened';
    public const STATUS_CLICKED = 'clicked';

=======
    
>>>>>>> 064a54f (.)
    /**
     * Tabella associata al modello.
     *
     * @var string
     */
    protected $table = 'notification_logs';
    
    /**
     * Gli attributi che sono assegnabili in massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
<<<<<<< HEAD
        'template_id',
        'notifiable_type',
        'notifiable_id',
        'channel',
        'status',
        'status_message',
        'data',
        'metadata',
        'sent_at',
        'delivered_at',
        'failed_at',
        'opened_at',
        'clicked_at',
        'tenant_id',
=======
        'notifiable_type',
        'notifiable_id',
        'title',
        'content',
        'channels',
        'data',
        'sent_at',
        'status',
        'error',
>>>>>>> 064a54f (.)
    ];
    
    /**
     * Gli attributi da castare.
     *
     * @var array<string, string>
     */
    protected $casts = [
<<<<<<< HEAD
        'data' => 'array',
        'metadata' => 'array',
        'sent_at' => 'datetime',
        'delivered_at' => 'datetime',
        'failed_at' => 'datetime',
        'opened_at' => 'datetime',
        'clicked_at' => 'datetime',
=======
        'channels' => 'array',
        'data' => 'array',
        'sent_at' => 'datetime',
>>>>>>> 064a54f (.)
    ];
    
    /**
     * Ottiene l'entità notificabile.
     *
     * @return MorphTo
     */
    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }
    
    /**
<<<<<<< HEAD
     * Ottiene il template della notifica.
     *
     * @return BelongsTo
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class, 'template_id');
    }
    
    /**
=======
>>>>>>> 064a54f (.)
     * Scope per filtrare per stato.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithStatus($query, string $status)
    {
        return $query->where('status', $status);
    }
    
    /**
     * Scope per filtrare per canale.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $channel
     * @return \Illuminate\Database\Eloquent\Builder
     */
<<<<<<< HEAD
    public function scopeForChannel($query, string $channel)
    {
        return $query->where('channel', $channel);
=======
    public function scopeWithChannel($query, string $channel)
    {
        return $query->whereJsonContains('channels', $channel);
>>>>>>> 064a54f (.)
    }
    
    /**
     * Scope per filtrare per tipo di notificabile.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
<<<<<<< HEAD
    public function scopeForNotifiable($query, Model $notifiable)
    {
        return $query->where('notifiable_type', get_class($notifiable))
            ->where('notifiable_id', $notifiable->getKey());
    }

    public function markAsSent(): self
    {
        $this->update([
            'status' => self::STATUS_SENT,
            'sent_at' => now(),
        ]);

        return $this;
    }

    public function markAsDelivered(): self
    {
        $this->update([
            'status' => self::STATUS_DELIVERED,
            'delivered_at' => now(),
        ]);

        return $this;
    }

    public function markAsFailed(string $message = null): self
    {
        $this->update([
            'status' => self::STATUS_FAILED,
            'status_message' => $message,
            'failed_at' => now(),
        ]);

        return $this;
    }

    public function markAsOpened(): self
    {
        $this->update([
            'status' => self::STATUS_OPENED,
            'opened_at' => now(),
        ]);

        return $this;
    }

    public function markAsClicked(): self
    {
        $this->update([
            'status' => self::STATUS_CLICKED,
            'clicked_at' => now(),
        ]);

        return $this;
    }

    public function getStatusLabelAttribute(): string
    {
        return __('notify::notification.fields.status.' . $this->status);
    }

    public function getChannelLabelAttribute(): string
    {
        return __('notify::notification.fields.channel.options.' . $this->channel . '.label');
=======
    public function scopeForNotifiableType($query, string $type)
    {
        return $query->where('notifiable_type', $type);
>>>>>>> 064a54f (.)
    }
}
