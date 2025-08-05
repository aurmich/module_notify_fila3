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
use Modules\Notify\Datas\SMS\TwilioData;
=======
>>>>>>> 9508e1f (.)
use Spatie\QueueableAction\QueueableAction;

final class SendTwilioSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    /** @var TwilioData */
    private TwilioData $twilioData;
=======
    /** @var string */
    private string $accountSid;

    /** @var string */
    private string $authToken;

    /** @var string */
    private string $baseUrl = 'https://api.twilio.com/2010-04-01';
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
        $this->twilioData = TwilioData::make();
        
        if (!$this->twilioData->account_sid) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        if (!$this->twilioData->auth_token) {
=======
        $config = config('sms.drivers.twilio');
        if (!is_array($config)) {
            throw new Exception('Configurazione Twilio non trovata in sms.php');
        }

        $this->accountSid = $config['account_sid'] ?? null;
        if (!is_string($this->accountSid)) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        $this->authToken = $config['auth_token'] ?? null;
        if (!is_string($this->authToken)) {
>>>>>>> 9508e1f (.)
            throw new Exception('Auth Token Twilio non configurato in sms.php');
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
            $to = '+39' . mb_substr($to, 2);
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
        }

        $from = $smsData->from ?? $this->defaultSender;

        // Twilio richiede l'autenticazione Basic
        $client = new Client([
<<<<<<< HEAD
            'timeout' => $this->twilioData->getTimeout(),
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token]
        ]);

        $endpoint = $this->twilioData->getBaseUrl() . '/2010-04-01/Accounts/' . $this->twilioData->account_sid . '/Messages.json';
=======
            'timeout' => $this->timeout,
            'auth' => [$this->accountSid, $this->authToken]
        ]);

        $endpoint = $this->baseUrl . '/Accounts/' . $this->accountSid . '/Messages.json';
>>>>>>> 9508e1f (.)

        try {
            $response = $client->post($endpoint, [
                'form_params' => [
                    'To' => $to,
                    'From' => $from,
                    'Body' => $smsData->body,
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
