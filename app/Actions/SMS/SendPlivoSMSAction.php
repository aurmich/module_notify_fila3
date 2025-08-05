<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\PlivoData;
=======
>>>>>>> 9508e1f (.)
use Spatie\QueueableAction\QueueableAction;

final class SendPlivoSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    /** @var PlivoData */
    private PlivoData $plivoData;
=======
    /** @var string */
    private string $authId;

    /** @var string */
    private string $authToken;

    /** @var string */
    private string $baseUrl = 'https://api.plivo.com/v1/Account/';
>>>>>>> 9508e1f (.)

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

<<<<<<< HEAD
=======
    /** @var int */
    protected int $timeout;

>>>>>>> 9508e1f (.)
    /** @var string|null */
    protected ?string $defaultSender = null;

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->plivoData = PlivoData::make();
        
        if (!$this->plivoData->auth_id) {
            throw new Exception('Auth ID Plivo non configurato in sms.php');
        }

        if (!$this->plivoData->auth_token) {
=======
        $config = config('sms.drivers.plivo');
        if (!is_array($config)) {
            throw new Exception('Configurazione Plivo non trovata in sms.php');
        }

        $this->authId = $config['auth_id'] ?? null;
        if (!is_string($this->authId)) {
            throw new Exception('Auth ID Plivo non configurato in sms.php');
        }

        $this->authToken = $config['auth_token'] ?? null;
        if (!is_string($this->authToken)) {
>>>>>>> 9508e1f (.)
            throw new Exception('Auth Token Plivo non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
<<<<<<< HEAD
=======
        $this->timeout = (int) config('sms.timeout', 30);
>>>>>>> 9508e1f (.)
    }

    /**
     * Execute the action.
     *
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    public function execute(SmsData $smsData): array
    {
        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
        }

        $from = $smsData->from ?? $this->defaultSender;

        // Plivo richiede l'autenticazione Basic
        $client = new Client([
<<<<<<< HEAD
            'timeout' => $this->plivoData->getTimeout(),
            'auth' => [$this->plivoData->auth_id, $this->plivoData->auth_token],
=======
            'timeout' => $this->timeout,
            'auth' => [$this->authId, $this->authToken],
>>>>>>> 9508e1f (.)
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ]);

<<<<<<< HEAD
        $endpoint = $this->plivoData->getBaseUrl() . '/v1/Account/' . $this->plivoData->auth_id . '/Message/';
=======
        $endpoint = $this->baseUrl . $this->authId . '/Message/';
>>>>>>> 9508e1f (.)

        try {
            $response = $client->post($endpoint, [
                'json' => [
                    'src' => $from,
                    'dst' => $to,
                    'text' => $smsData->body,
                ]
            ]);

            $this->vars['status_code'] = $response->getStatusCode();
            $this->vars['status_txt'] = $response->getBody()->getContents();

            return $this->vars;
        } catch (ClientException $clientException) {
            throw new Exception(
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $clientException->getCode(),
                $clientException
            );
        }
    }
}
