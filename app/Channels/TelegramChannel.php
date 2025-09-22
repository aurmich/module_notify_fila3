<?php

declare(strict_types=1);

namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\TelegramData;
use Modules\Notify\Factories\TelegramActionFactory;

/**
 * Canale di notifica per l'invio di messaggi Telegram.
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 2b275b1 (.)
 * Questo canale utilizza il driver Telegram configurato in config/telegram.php
 * per inviare messaggi Telegram attraverso il provider selezionato.
 */
class TelegramChannel
{
    /**
     * Factory per la creazione di azioni Telegram.
     */
    private TelegramActionFactory $factory;
<<<<<<< HEAD

=======
    
>>>>>>> 2b275b1 (.)
    /**
     * Crea una nuova istanza del canale.
     */
    public function __construct(TelegramActionFactory $factory)
    {
        $this->factory = $factory;
    }
<<<<<<< HEAD

=======
    
>>>>>>> 2b275b1 (.)
    /**
     * Invia la notifica attraverso il canale Telegram.
     *
     * @param mixed $notifiable Entità che riceve la notifica
     * @param \Illuminate\Notifications\Notification $notification Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     * @throws \Exception Se la notifica non ha il metodo toTelegram o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
<<<<<<< HEAD
        if (!method_exists($notification, 'toTelegram')) {
=======
        if (! method_exists($notification, 'toTelegram')) {
>>>>>>> 2b275b1 (.)
            throw new Exception('Notification does not have toTelegram method');
        }

        $telegramData = $notification->toTelegram($notifiable);
<<<<<<< HEAD

        if (!($telegramData instanceof TelegramData)) {
            throw new Exception('toTelegram method must return an instance of TelegramData');
        }

        $action = $this->factory->create();

=======
        
        if (! $telegramData instanceof TelegramData) {
            throw new Exception('toTelegram method must return an instance of TelegramData');
        }
        
        $action = $this->factory->create();
        
>>>>>>> 2b275b1 (.)
        return $action->execute($telegramData);
    }
}
