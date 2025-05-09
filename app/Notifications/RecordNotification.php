<?php

namespace Modules\Notify\Notifications;

use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;

class RecordNotification extends Notification
{
    protected Model $record;
    protected string $slug;
    
    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = $slug;
    }
    
    public function via($notifiable): array
    {
        return ['mail'];
    }
    
    public function toMail($notifiable): SpatieEmail
    {

        $email = new SpatieEmail($this->record, $this->slug);
    
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $email->to($notifiable->routeNotificationFor('mail'));
        }
        
        return $email;
    }
}