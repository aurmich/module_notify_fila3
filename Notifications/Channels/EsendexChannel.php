<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications\Channels;

use Modules\Notify\Actions\EsendexSendAction;
use Modules\Notify\Notifications\RowAttributeNotification;
use Modules\Xot\Contracts\ModelContactContract;

class EsendexChannel {
    public function __construct() {
    }

    public function send($notifiable, RowAttributeNotification $notification) {
        // Send notification to the $notifiable instance...
        $message = $notification->toSms($notifiable);
        // Send notification to the $notifiable instance...
        $data = app(EsendexSendAction::class)->execute($message);

        if ($notifiable instanceof ModelContactContract) {
            $data['sms_sent_at'] = now();
            $data['sms_count'] = (int) $notifiable->sms_count + 1;
            $notifiable->update($data);
        }
    }
}