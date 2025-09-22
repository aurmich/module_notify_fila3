<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
=======
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
>>>>>>> 2b275b1 (.)
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum per i driver SMS supportati
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 2b275b1 (.)
 * Questo enum centralizza la gestione dei driver SMS disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
<<<<<<< HEAD

=======
>>>>>>> 2b275b1 (.)
    case SMSFACTOR = 'smsfactor';
    case TWILIO = 'twilio';
    case NEXMO = 'nexmo';
    case PLIVO = 'plivo';
    case GAMMU = 'gammu';
    case NETFUN = 'netfun';
<<<<<<< HEAD
    case AGILETELECOM = 'agiletelecom';

    public function getLabel(): string
    {
        return $this->transClass(self::class, $this->value . '.label');
=======
    case AGILETELECOM = 'agiletelecom'; 
    
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
>>>>>>> 2b275b1 (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.color');
=======
        return $this->transClass(self::class,$this->value.'.color');

>>>>>>> 2b275b1 (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.icon');
=======
        return $this->transClass(self::class,$this->value.'.icon');
>>>>>>> 2b275b1 (.)
    }

    public function getDescription(): string
    {
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value . '.description');
    }

    /**
     * Restituisce il driver predefinito dal file di configurazione
     *
=======
        return $this->transClass(self::class,$this->value.'.description');
    }
    
    /**
     * Restituisce il driver predefinito dal file di configurazione
     * 
>>>>>>> 2b275b1 (.)
     * @return self
     */
    public static function getDefault(): self
    {
        $default = config('sms.default', self::SMSFACTOR->value);
<<<<<<< HEAD

=======
        
>>>>>>> 2b275b1 (.)
        return self::from(is_string($default) ? $default : self::SMSFACTOR->value);
    }
}
