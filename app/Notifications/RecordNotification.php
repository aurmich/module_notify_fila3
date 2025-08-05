<?php

namespace Modules\Notify\Notifications;

use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;

class RecordNotification extends Notification
{
    protected Model $record;
    protected string $slug;
    public array $data=[];
<<<<<<< HEAD
    public array $attachments=[];
=======
>>>>>>> 9508e1f (.)

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = Str::slug($slug);
        

    }
    /** 
     * @param object $notifiable
     * @return array<string|class-string>
     */
    public function via($notifiable): array
    {
        $channels = [];
        if (!method_exists($notifiable, 'routeNotificationFor')){
            return $channels;
        }
        if($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if($notifiable->routeNotificationFor('sms')) {
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
        $email=$email->mergeData($this->data);
        
        $email=$email->addAttachments($this->attachments);
        
=======
        $email = new SpatieEmail($this->record, $this->slug);
        $email=$email->mergeData($this->data);

>>>>>>> 9508e1f (.)
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
            }
        }
<<<<<<< HEAD
        
=======

>>>>>>> 9508e1f (.)
        return $email;
    }

    /**
     * Get the SMS representation of the notification.
     *
     * @param object $notifiable
     * @return SmsData
     */
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
        if($to==null){
            return null;
        }

        $smsData = SmsData::from([
            'from'=>'Xot',
            'to'=>$to,
            'body'=>$email->buildSms(),
        ]);


        return $smsData;
    }

    public function mergeData(array $data): self
    {
        $this->data=array_merge($this->data,$data);
        return $this;
    }
<<<<<<< HEAD

    public function addAttachments(array $attachments): self
    {
        $this->attachments=array_merge($this->attachments,$attachments);
        return $this;
    }
}
=======
}
>>>>>>> 9508e1f (.)
