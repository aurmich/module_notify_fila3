<?php

declare(strict_types=1);

/**
 * @see https://iftikhar-ahmed.medium.com/send-push-notifications-in-laravel-using-firebase-on-your-android-device-f585621db900
 * @see https://github.com/laravel-notification-channels/telegram
 */

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
<<<<<<< HEAD
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Notifications\Channels\TelegramChannel;
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Notifications\Channels\TelegramChannel;
=======
use Illuminate\Notifications\Notification;
use InvalidArgumentException;
use NotificationChannels\Telegram\TelegramMessage;
>>>>>>> a5a128a (.)
=======
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Notifications\Channels\TelegramChannel;
>>>>>>> Stashed changes
=======
use Illuminate\Notifications\Notification;
use InvalidArgumentException;
use NotificationChannels\Telegram\TelegramMessage;
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)

/**
 * Classe per inviare notifiche tramite Telegram.
 */
<<<<<<< HEAD
class TelegramNotification extends Notification implements ShouldQueue
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
class TelegramNotification extends Notification implements ShouldQueue
=======
class TelegramNotification extends Notification
>>>>>>> a5a128a (.)
=======
class TelegramNotification extends Notification implements ShouldQueue
>>>>>>> Stashed changes
=======
class TelegramNotification extends Notification
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
{
    use Queueable;

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> b968ad9 (.)
     * @var string
     */
    protected string $message;

    /**
     * @var array
     */
    protected array $options;

    /**
     * Create a new notification instance.
     *
     * @param string $message
     * @param array $options
     */
    public function __construct(string $message, array $options = [])
    {
        $this->message = $message;
        $this->options = $options;
<<<<<<< HEAD
=======
=======
     * Create a new notification instance.
=======
     * @var string
>>>>>>> Stashed changes
     */
    protected string $message;

    /**
     * @var array
     */
    protected array $options;

    /**
     * Create a new notification instance.
     *
     * @param string $message
     * @param array $options
     */
    public function __construct(string $message, array $options = [])
    {
<<<<<<< Updated upstream
        // $this->data = $data;
>>>>>>> a5a128a (.)
=======
        $this->message = $message;
        $this->options = $options;
>>>>>>> Stashed changes
=======
     * Create a new notification instance.
     */
    public function __construct()
    {
        // $this->data = $data;
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> b968ad9 (.)
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return [TelegramChannel::class];
<<<<<<< HEAD
=======
=======
     * @param object $notifiable The entity to be notified
     * @return array<string>
=======
     * @param mixed $notifiable
     * @return array
>>>>>>> Stashed changes
     */
    public function via($notifiable): array
    {
<<<<<<< Updated upstream
        return ['telegram'];
>>>>>>> a5a128a (.)
=======
        return [TelegramChannel::class];
>>>>>>> Stashed changes
=======
     * @param object $notifiable The entity to be notified
     * @return array<string>
     */
    public function via(object $notifiable): array
    {
        return ['telegram'];
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
    }

    /**
     * Get the array representation of the notification.
     *
     * @param object|null $notifiable The entity to be notified
     * @return array<string, mixed>
     */
    public function toArray(?object $notifiable): array
    {
        // return $this->data->toArray();
        return [];
    }

    /**
     * Get the Telegram representation of the notification.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> b968ad9 (.)
     * @param mixed $notifiable
     * @return string
     */
    public function toTelegram($notifiable): string
    {
        return $this->message;
<<<<<<< HEAD
=======
=======
     * @param object|null $notifiable The entity to be notified
     * @return TelegramMessage
=======
     * @param mixed $notifiable
     * @return string
>>>>>>> Stashed changes
     */
    public function toTelegram($notifiable): string
    {
<<<<<<< Updated upstream
=======
     * @param object|null $notifiable The entity to be notified
     * @return TelegramMessage
     */
    public function toTelegram(?object $notifiable): TelegramMessage
    {
>>>>>>> 064a54f (.)
        // $url = url('/invoice/'.$this->invoice->id);
        $url = '#';

        return TelegramMessage::create()
            // Optional recipient user id.
            // ->to(' dddd ')
            // Markdown supported.
            ->content('Hello there!')
            ->line('Your invoice has been *PAID*')
            // ->lineIf($notifiable->amount > 0, "Amount paid: {$notifiable->amount}")
            // ->line('Thank you!')

            // (Optional) Blade template for the content.
            // ->view('notification', ['url' => $url])

            // (Optional) Inline Buttons
            ->button('View Invoice', $url)
            ->button('Download Invoice', $url);
        // (Optional) Inline Button with callback. You can handle callback in your bot instance
        // ->buttonWithCallback('Confirm', 'confirm_invoice '.$this->invoice->id)
<<<<<<< HEAD
>>>>>>> a5a128a (.)
=======
        return $this->message;
>>>>>>> Stashed changes
=======
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
    }
}
