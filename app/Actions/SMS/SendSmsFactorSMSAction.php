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
use Modules\Notify\Datas\SMS\SmsFactorData;
=======
>>>>>>> 9508e1f (.)
use Spatie\QueueableAction\QueueableAction;

final class SendSmsFactorSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    /** @var SmsFactorData */
    private SmsFactorData $smsFactorData;
=======
    /** @var string */
    private string $token;

    /** @var string */
    private string $baseUrl;
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
        $this->smsFactorData = SmsFactorData::make();
        
        if (!$this->smsFactorData->token) {
            throw new Exception('Token SMSFactor non configurato in sms.php');
        }

=======
        $config = config('sms.drivers.smsfactor');
        if (!is_array($config)) {
            throw new Exception('Configurazione SMSFactor non trovata in sms.php');
        }

        $this->token = $config['token'] ?? null;
        if (!is_string($this->token)) {
            throw new Exception('Token SMSFactor non configurato in sms.php');
        }

        $this->baseUrl = $config['base_url'] ?? 'https://api.smsfactor.com';

>>>>>>> 9508e1f (.)
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
<<<<<<< HEAD
        $headers = $this->smsFactorData->getAuthHeaders();
=======
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->token,
        ];
>>>>>>> 9508e1f (.)

        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
        }

        $body = [
            'text' => $smsData->body,
            'sender' => $smsData->from ?? $this->defaultSender,
            'recipients' => [
                [
                    'phone' => $to,
                ],
            ],
            'type' => 'sms',
        ];

        $client = new Client([
<<<<<<< HEAD
            'timeout' => $this->smsFactorData->getTimeout(),
=======
            'timeout' => $this->timeout,
>>>>>>> 9508e1f (.)
            'headers' => $headers
        ]);

        try {
<<<<<<< HEAD
            $response = $client->post($this->smsFactorData->getBaseUrl() . '/messages', ['json' => $body]);
=======
            $response = $client->post($this->baseUrl . '/messages', ['json' => $body]);
>>>>>>> 9508e1f (.)
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
