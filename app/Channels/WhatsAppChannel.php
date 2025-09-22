<?php

declare(strict_types=1);

namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Factories\WhatsAppActionFactory;

/**
 * Canale di notifica per l'invio di messaggi WhatsApp.
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 2b275b1 (.)
 * Questo canale utilizza il driver WhatsApp configurato in config/whatsapp.php
 * per inviare messaggi WhatsApp attraverso il provider selezionato.
 */
class WhatsAppChannel
{
    /**
     * Factory per la creazione di azioni WhatsApp.
     */
    private WhatsAppActionFactory $factory;
<<<<<<< HEAD

=======
    
>>>>>>> 2b275b1 (.)
    /**
     * Crea una nuova istanza del canale.
     */
    public function __construct(WhatsAppActionFactory $factory)
    {
        $this->factory = $factory;
    }
<<<<<<< HEAD

=======
    
>>>>>>> 2b275b1 (.)
    /**
     * Invia la notifica attraverso il canale WhatsApp.
     *
     * @param mixed $notifiable Entità che riceve la notifica
     * @param \Illuminate\Notifications\Notification $notification Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     * @throws \Exception Se la notifica non ha il metodo toWhatsApp o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
<<<<<<< HEAD
        if (!method_exists($notification, 'toWhatsApp')) {
=======
        if (! method_exists($notification, 'toWhatsApp')) {
>>>>>>> 2b275b1 (.)
            throw new Exception('Notification does not have toWhatsApp method');
        }

        $whatsAppData = $notification->toWhatsApp($notifiable);
<<<<<<< HEAD

        if (!($whatsAppData instanceof WhatsAppData)) {
            throw new Exception('toWhatsApp method must return an instance of WhatsAppData');
        }

        $action = $this->factory->create();

=======
        
        if (! $whatsAppData instanceof WhatsAppData) {
            throw new Exception('toWhatsApp method must return an instance of WhatsAppData');
        }
        
        $action = $this->factory->create();
        
>>>>>>> 2b275b1 (.)
        return $action->execute($whatsAppData);
    }
}
