<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Illuminate\Notifications\Notification;
use Modules\Notify\Models\Notification as NotificationModel;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class NotificationData extends Data
{
    // public string $mobile_phone;
    // public string $token;
    // public int $q;
    public string $from;

<<<<<<< HEAD
    public null|string $from_email = null;

    public string $to;

    public null|string $subject = null;

    public null|string $body_html = null;
=======
    public ?string $from_email = null;

    public string $to;

    public ?string $subject = null;

    public ?string $body_html = null;
>>>>>>> 2b275b1 (.)

    public string $body;

    public array $channels = [];

    /**
     * @var DataCollection<AttachmentData>
     */
<<<<<<< HEAD
    public null|DataCollection $attachments = null;

=======
    public ?DataCollection $attachments = null;
>>>>>>> 2b275b1 (.)
    // public ?array $attachment_paths = [];

    /**
     * Get the notification routing information for the given driver.
     */
    public function routeNotificationFor(string $driver, Notification $notification): string|NotificationModel
    {
        // dddx(['driver'=>$driver,'a'=>$a]);
        // return $this->routes[$driver] ?? null;
        if ($driver === 'database') {
            return app(NotificationModel::class);
        }

        return $this->to;
    }

    public function getSmsData(): SmsData
    {
<<<<<<< HEAD
        return SmsData::from([
            'from' => $this->from,
            'to' => $this->to,
            'body' => $this->body,
        ]);
=======
        return SmsData::from(
            [
                'from' => $this->from,
                'to' => $this->to,
                'body' => $this->body,
            ]
        );
>>>>>>> 2b275b1 (.)
    }
}
