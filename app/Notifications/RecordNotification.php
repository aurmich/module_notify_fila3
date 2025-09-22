<?php

<<<<<<< HEAD
declare(strict_types=1);


namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
=======
namespace Modules\Notify\Notifications;

use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
>>>>>>> 2b275b1 (.)

class RecordNotification extends Notification
{
    protected Model $record;
    protected string $slug;
<<<<<<< HEAD
    public array $data = [];
    public array $attachments = [];
=======
    public array $data=[];
    public array $attachments=[];
>>>>>>> 2b275b1 (.)

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = Str::slug($slug);
<<<<<<< HEAD
    }

    /**
=======
        

    }
    /** 
>>>>>>> 2b275b1 (.)
     * @param object $notifiable
     * @return array<string|class-string>
     */
    public function via($notifiable): array
    {
        $channels = [];
<<<<<<< HEAD
        if (!method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
=======
        if (!method_exists($notifiable, 'routeNotificationFor')){
            return $channels;
        }
        if($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if($notifiable->routeNotificationFor('sms')) {
>>>>>>> 2b275b1 (.)
            $channels[] = SmsChannel::class;
        }

        return $channels;
    }

    /**
     * @param object $notifiable
     * @return SpatieEmail
     */
    public function toMail($notifiable): SpatieEmail
    {
<<<<<<< HEAD
        $email = new SpatieEmail($this->record, $this->slug);
        $email = $email->mergeData($this->data);

        $email = $email->addAttachments($this->attachments);

        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to = $notifiable->routeNotificationFor('mail');
=======
        
        $email = new SpatieEmail($this->record, $this->slug);
        $email=$email->mergeData($this->data);
        
        $email=$email->addAttachments($this->attachments);
        
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
>>>>>>> 2b275b1 (.)
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
            }
        }
<<<<<<< HEAD

=======
        
>>>>>>> 2b275b1 (.)
        return $email;
    }

    /**
     * Get the SMS representation of the notification.
     *
     * @param object $notifiable
     * @return SmsData
     */
<<<<<<< HEAD
    public function toSms(object $notifiable): null|SmsData
    {
        $email = new SpatieEmail($this->record, $this->slug);

        $email = $email->mergeData($this->data);

        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        //dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $to = null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }
        $fallback_to = config('sms.fallback_to');
        if (is_string($fallback_to)) {
            $to = $fallback_to;
        }
        if ($to === null) {
=======
    public function toSms(object $notifiable): ?SmsData
    {
        $email = new SpatieEmail($this->record, $this->slug);
        
        $email=$email->mergeData($this->data);
       
        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        //dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $to=null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }
        $fallback_to=config('sms.fallback_to');
        if(is_string($fallback_to)){
            $to=$fallback_to;
        }
        if($to==null){
>>>>>>> 2b275b1 (.)
            return null;
        }

        $smsData = SmsData::from([
<<<<<<< HEAD
            'from' => 'Xot',
            'to' => $to,
            'body' => $email->buildSms(),
        ]);

=======
            'from'=>'Xot',
            'to'=>$to,
            'body'=>$email->buildSms(),
        ]);


>>>>>>> 2b275b1 (.)
        return $smsData;
    }

    public function mergeData(array $data): self
    {
<<<<<<< HEAD
        $this->data = array_merge($this->data, $data);
=======
        $this->data=array_merge($this->data,$data);
>>>>>>> 2b275b1 (.)
        return $this;
    }

    public function addAttachments(array $attachments): self
    {
<<<<<<< HEAD
        $this->attachments = array_merge($this->attachments, $attachments);
=======
        $this->attachments=array_merge($this->attachments,$attachments);
>>>>>>> 2b275b1 (.)
        return $this;
    }
}
