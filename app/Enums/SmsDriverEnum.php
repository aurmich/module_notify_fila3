<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

<<<<<<< HEAD
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

=======
>>>>>>> 7a7d33c (.)
/**
 * Enum per i driver SMS supportati
 * 
 * Questo enum centralizza la gestione dei driver SMS disponibili
 * e fornisce metodi helper per ottenere le opzioni e le etichette.
 */
<<<<<<< HEAD
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
=======
enum SmsDriverEnum: string
{
>>>>>>> 7a7d33c (.)
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
        return $this->transClass(self::class,$this->value.'.label');
    }

    public function getColor(): string
    {
        return $this->transClass(self::class,$this->value.'.color');

    }

    public function getIcon(): string
    {
        return $this->transClass(self::class,$this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class,$this->value.'.description');
=======
    
    /**
     * Restituisce le opzioni per il componente Select di Filament
     * 
     * @return array<string, string>
     */
    public static function options(): array
    {
        return [
            self::SMSFACTOR->value => 'SMSFactor',
            self::TWILIO->value => 'Twilio',
            self::NEXMO->value => 'Nexmo',
            self::PLIVO->value => 'Plivo',
            self::GAMMU->value => 'Gammu',
            self::NETFUN->value => 'Netfun',
        ];
    }
    
    /**
     * Restituisce le etichette localizzate per il componente Select di Filament
     * 
     * @return array<string, string>
     */
    public static function labels(): array
    {
        return [
            self::SMSFACTOR->value => __('notify::sms.drivers.smsfactor'),
            self::TWILIO->value => __('notify::sms.drivers.twilio'),
            self::NEXMO->value => __('notify::sms.drivers.nexmo'),
            self::PLIVO->value => __('notify::sms.drivers.plivo'),
            self::GAMMU->value => __('notify::sms.drivers.gammu'),
            self::NETFUN->value => __('notify::sms.drivers.netfun'),
        ];
    }
    
    /**
     * Verifica se un driver è supportato
     * 
     * @param string $driver
     * @return bool
     */
    public static function isSupported(string $driver): bool
    {
        return in_array($driver, array_column(self::cases(), 'value'));
>>>>>>> 7a7d33c (.)
    }
    
    /**
     * Restituisce il driver predefinito dal file di configurazione
     * 
     * @return self
     */
    public static function getDefault(): self
    {
        $default = config('sms.default', self::SMSFACTOR->value);
        
        return self::from((string) $default);
    }
}
