<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
 * Classe per l'invio di SMS.
 */
class SmsService
{
    // ---------CSS------------
    public ?string $to = null;

    public ?string $from = null;

    public ?string $body = null;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    
>>>>>>> 9165bf1 (.)
>>>>>>> 5a1e6f8 (fix: auto resolve conflict)
=======
>>>>>>> ba48b8c (.)
    /**
     * Variabili per il template SMS.
     *
     * @var array<string, mixed>
     */
    public array $vars = [];

    /**
     * Driver per l'invio degli SMS.
     */
    public string $driver = 'netfun';

    private static ?self $instance = null;

    /**
     * Ottiene un'istanza singleton della classe.
     */
    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Factory method per creare un'istanza singleton.
=======
=======
=======
>>>>>>> a2dd458 (fix: auto resolve conflict)
=======
<<<<<<< HEAD
>>>>>>> 5a1e6f8 (fix: auto resolve conflict)
>>>>>>> 06e3ad9 (fix: auto resolve conflict)
     * Factory method to create an instance.
<<<<<<< HEAD
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
=======
     * Factory method per creare un'istanza singleton.
>>>>>>> ba48b8c (.)
>>>>>>> a2dd458 (fix: auto resolve conflict)
     */
    public static function make(): self
    {
        return static::getInstance();
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Imposta variabili locali e le unisce a vars.
=======
     * Sets local variables and merges them with the vars array.
     * 
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
     * Imposta variabili locali e le unisce a vars.
>>>>>>> a2dd458 (fix: auto resolve conflict)
     * @param array<string, mixed> $vars
     */
    public function setLocalVars(array $vars): self
    {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }
        $this->vars = array_merge($this->vars, $vars);
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
>>>>>>> a2dd458 (fix: auto resolve conflict)
        return $this;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Unisce le variabili con quelle esistenti (alias per compatibilità).
=======
=======
=======
>>>>>>> a2dd458 (fix: auto resolve conflict)
=======
=======
>>>>>>> 9165bf1 (.)
>>>>>>> 5a1e6f8 (fix: auto resolve conflict)
>>>>>>> 06e3ad9 (fix: auto resolve conflict)
     * Unisce le variabili con quelle esistenti.
     *
<<<<<<< HEAD
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
=======
     * Unisce le variabili con quelle esistenti (alias per compatibilità).
>>>>>>> ba48b8c (.)
>>>>>>> a2dd458 (fix: auto resolve conflict)
     * @param array<string, mixed> $vars
     */
    public function mergeVars(array $vars): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->setLocalVars($vars);
=======
        $this->vars = array_merge($this->vars, $vars);

        return $this;
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
        return $this->setLocalVars($vars);
>>>>>>> a2dd458 (fix: auto resolve conflict)
    }

    /**
     * Invia l'SMS utilizzando il driver configurato.
     */
    public function send(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $engineClassName = '\Modules\Notify\Services\SmsEngines\' . Str::studly($this->driver) . 'Engine';

=======
=======
>>>>>>> 06e3ad9 (fix: auto resolve conflict)
=======
>>>>>>> a2dd458 (fix: auto resolve conflict)
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
=======
<<<<<<< HEAD
        $engineClassName = '\\Modules\\Notify\\Services\\SmsEngines\\' . Str::studly($this->driver) . 'Engine';
=======
        $engineClassName = '\Modules\Notify\Services\SmsEngines\\'.Str::studly($this->driver).'Engine';
>>>>>>> 9165bf1 (.)
>>>>>>> 5a1e6f8 (fix: auto resolve conflict)
        
<<<<<<< HEAD
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
=======
        $engineClassName = '\Modules\Notify\Services\SmsEngines\' . Str::studly($this->driver) . 'Engine';

>>>>>>> ba48b8c (.)
>>>>>>> a2dd458 (fix: auto resolve conflict)
        // Verifichiamo che la classe esista
        if (!class_exists($engineClassName)) {
            throw new \RuntimeException("La classe del motore SMS {$engineClassName} non esiste");
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======

>>>>>>> a2dd458 (fix: auto resolve conflict)
        // Verifichiamo che la classe abbia il metodo make
        if (!method_exists($engineClassName, 'make')) {
            throw new \RuntimeException("La classe {$engineClassName} non implementa il metodo make()");
        }
<<<<<<< HEAD
<<<<<<< HEAD

        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();

=======
        
        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();
        
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======

        // Creiamo l'istanza in modo sicuro
        $instance = $engineClassName::make();

>>>>>>> a2dd458 (fix: auto resolve conflict)
        // Verifichiamo che l'istanza sia un oggetto
        if (!is_object($instance)) {
            throw new \RuntimeException("Il metodo make() di {$engineClassName} non ha restituito un oggetto");
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======

>>>>>>> a2dd458 (fix: auto resolve conflict)
        // Verifichiamo che l'istanza abbia i metodi necessari
        foreach (['setLocalVars', 'send', 'getVars'] as $method) {
            if (!method_exists($instance, $method)) {
                throw new \RuntimeException("L'istanza di {$engineClassName} non implementa il metodo {$method}()");
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD

        // Utilizziamo reflection per chiamare i metodi in modo sicuro
        try {
            $reflectionClass = new \ReflectionClass($instance);

            // Chiamiamo setLocalVars
            $setLocalVarsMethod = $reflectionClass->getMethod('setLocalVars');
            $setLocalVarsMethod->invoke($instance, $this->vars);

            // Chiamiamo send
            $sendMethod = $reflectionClass->getMethod('send');
            $sendMethod->invoke($instance);

            // Chiamiamo getVars
            $getVarsMethod = $reflectionClass->getMethod('getVars');
            $result = $getVarsMethod->invoke($instance);

=======
        
=======

>>>>>>> a2dd458 (fix: auto resolve conflict)
        // Utilizziamo reflection per chiamare i metodi in modo sicuro
        try {
            $reflectionClass = new \ReflectionClass($instance);

            // Chiamiamo setLocalVars
            $setLocalVarsMethod = $reflectionClass->getMethod('setLocalVars');
            $setLocalVarsMethod->invoke($instance, $this->vars);

            // Chiamiamo send
            $sendMethod = $reflectionClass->getMethod('send');
            $sendMethod->invoke($instance);

            // Chiamiamo getVars
            $getVarsMethod = $reflectionClass->getMethod('getVars');
            $result = $getVarsMethod->invoke($instance);
<<<<<<< HEAD
            
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======

>>>>>>> a2dd458 (fix: auto resolve conflict)
            // Verifichiamo che il risultato sia un array
            if (!is_array($result)) {
                $result = [];
            }
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======

>>>>>>> a2dd458 (fix: auto resolve conflict)
            // Convertiamo l'array in array<string, mixed>
            /** @var array<string, mixed> $typedResult */
            $typedResult = [];
            foreach ($result as $key => $value) {
                if (is_string($key)) {
                    $typedResult[$key] = $value;
                }
            }
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======

>>>>>>> a2dd458 (fix: auto resolve conflict)
            $this->mergeVars($typedResult);
        } catch (\ReflectionException $e) {
            throw new \RuntimeException("Errore durante la chiamata dei metodi: " . $e->getMessage());
        }

        return $this;
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

    /**
     * Ottiene le variabili.
     *
     * @return array<string, mixed>
     */
    public function getVars(): array
    {
        return $this->vars;
    }
>>>>>>> 9165bf1 (.)
>>>>>>> 5a1e6f8 (fix: auto resolve conflict)
=======
>>>>>>> ba48b8c (.)
}
