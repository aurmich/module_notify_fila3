<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f8adab (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\Tenant\Models\Traits\HasTenant;
use Modules\Xot\Traits\Updater;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\MorphTo;
>>>>>>> 4c11a11 (.)
=======
>>>>>>> 3f8adab (.)

/**
 * Modello per il logging delle notifiche inviate.
 */
class NotificationLog extends Model
{
    use HasFactory;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f8adab (.)
    use HasTenant;
    use Updater;

    public const STATUS_PENDING = 'pending';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_SENT = 'sent';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_FAILED = 'failed';
    public const STATUS_OPENED = 'opened';
    public const STATUS_CLICKED = 'clicked';

<<<<<<< HEAD
=======
    
>>>>>>> 4c11a11 (.)
=======
>>>>>>> 3f8adab (.)
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
=======
        'template_id',
>>>>>>> 3f8adab (.)
        'notifiable_type',
        'notifiable_id',
        'channel',
        'status',
<<<<<<< HEAD
        'error',
>>>>>>> 4c11a11 (.)
=======
        'status_message',
        'data',
        'metadata',
        'sent_at',
        'delivered_at',
        'failed_at',
        'opened_at',
        'clicked_at',
        'tenant_id',
>>>>>>> 3f8adab (.)
    ];
    
    /**
     * Gli attributi da castare.
     *
     * @var array<string, string>
     */
    protected $casts = [
<<<<<<< HEAD
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
=======
>>>>>>> 3f8adab (.)
        'data' => 'array',
        'metadata' => 'array',
        'sent_at' => 'datetime',
<<<<<<< HEAD
>>>>>>> 4c11a11 (.)
=======
        'delivered_at' => 'datetime',
        'failed_at' => 'datetime',
        'opened_at' => 'datetime',
        'clicked_at' => 'datetime',
>>>>>>> 3f8adab (.)
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
<<<<<<< HEAD
=======
>>>>>>> 3f8adab (.)
     * Ottiene il template della notifica.
     *
     * @return BelongsTo
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class, 'template_id');
    }
    
    /**
<<<<<<< HEAD
=======
>>>>>>> 4c11a11 (.)
=======
>>>>>>> 3f8adab (.)
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
<<<<<<< HEAD
    public function scopeForChannel($query, string $channel)
    {
        return $query->where('channel', $channel);
=======
    public function scopeWithChannel($query, string $channel)
    {
        return $query->whereJsonContains('channels', $channel);
>>>>>>> 4c11a11 (.)
=======
    public function scopeForChannel($query, string $channel)
    {
        return $query->where('channel', $channel);
>>>>>>> 3f8adab (.)
    }
    
    /**
     * Scope per filtrare per tipo di notificabile.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f8adab (.)
    public function scopeForNotifiable($query, Model $notifiable)
    {
        return $query->where('notifiable_type', get_class($notifiable))
            ->where('notifiable_id', $notifiable->getKey());
    }

<<<<<<< HEAD
=======
    /**
     * Marca la notifica come inviata.
     */
>>>>>>> 3f8adab (.)
    public function markAsSent(): self
    {
        $this->update([
            'status' => self::STATUS_SENT,
            'sent_at' => now(),
        ]);

        return $this;
    }

<<<<<<< HEAD
=======
    /**
     * Marca la notifica come consegnata.
     */
>>>>>>> 3f8adab (.)
    public function markAsDelivered(): self
    {
        $this->update([
            'status' => self::STATUS_DELIVERED,
            'delivered_at' => now(),
        ]);

        return $this;
    }

<<<<<<< HEAD
=======
    /**
     * Marca la notifica come fallita.
     */
>>>>>>> 3f8adab (.)
    public function markAsFailed(string $message = null): self
    {
        $this->update([
            'status' => self::STATUS_FAILED,
            'status_message' => $message,
            'failed_at' => now(),
        ]);

        return $this;
    }

<<<<<<< HEAD
=======
    /**
     * Marca la notifica come aperta.
     */
>>>>>>> 3f8adab (.)
    public function markAsOpened(): self
    {
        $this->update([
            'status' => self::STATUS_OPENED,
            'opened_at' => now(),
        ]);

        return $this;
    }

<<<<<<< HEAD
=======
    /**
     * Marca la notifica come cliccata.
     */
>>>>>>> 3f8adab (.)
    public function markAsClicked(): self
    {
        $this->update([
            'status' => self::STATUS_CLICKED,
            'clicked_at' => now(),
        ]);

        return $this;
    }

<<<<<<< HEAD
    public function getStatusLabelAttribute(): string
    {
        return __('notify::notification.fields.status.' . $this->status);
    }

    public function getChannelLabelAttribute(): string
    {
        return __('notify::notification.fields.channel.options.' . $this->channel . '.label');
=======
=======
    /**
     * Ottiene l'etichetta dello stato.
     */
    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            self::STATUS_PENDING => 'In attesa',
            self::STATUS_PROCESSING => 'In elaborazione',
            self::STATUS_SENT => 'Inviata',
            self::STATUS_DELIVERED => 'Consegnata',
            self::STATUS_FAILED => 'Fallita',
            self::STATUS_OPENED => 'Aperta',
            self::STATUS_CLICKED => 'Cliccata',
            default => 'Sconosciuto',
        };
    }

    /**
     * Scope per filtrare per tipo di notificabile.
     */
>>>>>>> 3f8adab (.)
    public function scopeForNotifiableType($query, string $type)
    {
        return $query->where('notifiable_type', $type);
>>>>>>> 4c11a11 (.)
    }
}
