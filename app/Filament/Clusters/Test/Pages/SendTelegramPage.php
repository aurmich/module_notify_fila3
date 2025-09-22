<?php

/**
 * @see https://medium.com/modulr/send-telegram-notifications-with-laravel-9-342cc87b406
 * @see https://laravel-notification-channels.com/telegram/#usage
 */

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
<<<<<<< HEAD
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\TelegramData;
use Modules\Notify\Datas\TelegramMessageData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\TelegramNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\TelegramNotification;
>>>>>>> 2b275b1 (.)
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use NotificationChannels\Telegram\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
use Modules\Notify\Datas\TelegramMessageData;
use Illuminate\Support\Facades\Log;
use Filament\Notifications\Notification as FilamentNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Datas\TelegramData;
>>>>>>> 2b275b1 (.)

/**
 * @property ComponentContainer $telegramForm
 */
class SendTelegramPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

    // use NavigationLabelTrait;

<<<<<<< HEAD
    public null|array $telegramData = [];

    protected static null|string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.pages.send-telegram';

    protected static null|string $cluster = Test::class;
=======
    public ?array $telegramData = [];

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.pages.send-telegram';

    protected static ?string $cluster = Test::class;
>>>>>>> 2b275b1 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    public function telegramForm(Form $form): Form
    {
<<<<<<< HEAD
        return $form->schema($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
=======
        return $form
            ->schema($this->getTelegramFormSchema())
            ->model($this->getUser())
            ->statePath('telegramData');
>>>>>>> 2b275b1 (.)
    }

    public function getTelegramFormSchema(): array
    {
        return [
<<<<<<< HEAD
            Forms\Components\TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
=======
            Forms\Components\TextInput::make('chat_id')
                ->required()
                ->helperText('ID della chat o username del canale'),
>>>>>>> 2b275b1 (.)
            Forms\Components\TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            Forms\Components\Select::make('driver')
                ->options([
                    'bot' => 'Bot API',
                    'webhook' => 'Webhook',
                ])
                ->default('bot')
                ->required(),
            Forms\Components\Select::make('parse_mode')
                ->options([
                    'HTML' => 'HTML',
                    'Markdown' => 'Markdown',
                    'MarkdownV2' => 'MarkdownV2',
                ])
                ->helperText('Formato del testo (opzionale)'),
<<<<<<< HEAD
            Forms\Components\Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Forms\Components\Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            Forms\Components\TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            Forms\Components\TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
=======
            Forms\Components\Toggle::make('disable_web_page_preview')
                ->helperText('Disabilita l\'anteprima dei link'),
            Forms\Components\Toggle::make('disable_notification')
                ->helperText('Invia il messaggio silenziosamente'),
            Forms\Components\TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            Forms\Components\TextInput::make('media_url')
                ->url()
                ->helperText('URL del media (opzionale)'),
>>>>>>> 2b275b1 (.)
            Forms\Components\Select::make('media_type')
                ->options([
                    'photo' => 'Foto',
                    'video' => 'Video',
                    'document' => 'Documento',
                    'audio' => 'Audio',
                ])
                ->helperText('Tipo di media (opzionale)'),
<<<<<<< HEAD
            Forms\Components\TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
            Forms\Components\TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 2b275b1 (.)
        ];
    }

    public function sendTelegram(): void
    {
        try {
            $data = $this->telegramForm->getState();
            $user = $this->getUser();

            $message = is_string($data['text']) ? $data['text'] : '';

<<<<<<< HEAD
            Notification::route('telegram', $data['chat_id'])->notify(
                new TelegramNotification($message, [
=======
            Notification::route('telegram', $data['chat_id'])
                ->notify(new TelegramNotification($message, [
>>>>>>> 2b275b1 (.)
                    'driver' => $data['driver'],
                    'parse_mode' => $data['parse_mode'] ?? null,
                    'disable_web_page_preview' => $data['disable_web_page_preview'] ?? false,
                    'disable_notification' => $data['disable_notification'] ?? false,
                    'reply_to_message_id' => $data['reply_to_message_id'] ?? null,
                    'media_url' => $data['media_url'] ?? null,
                    'media_type' => $data['media_type'] ?? null,
                    'caption' => $data['caption'] ?? null,
<<<<<<< HEAD
                ]),
            );
=======
                ]));
>>>>>>> 2b275b1 (.)

            FilamentNotification::make()
                ->success()
                ->title('Messaggio Telegram inviato con successo')
                ->send();
<<<<<<< HEAD
=======

>>>>>>> 2b275b1 (.)
        } catch (\Exception $e) {
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());

            FilamentNotification::make()
                ->danger()
                ->title('Errore nell\'invio Telegram')
                ->body($e->getMessage())
                ->send();
        }
    }

    protected function getForms(): array
    {
        return [
            'telegramForm',
        ];
    }

    protected function getTelegramFormActions(): array
    {
        return [
<<<<<<< HEAD
            Action::make('telegramFormActions')->submit('telegramFormActions'),
=======
            Action::make('telegramFormActions')
                ->submit('telegramFormActions'),
>>>>>>> 2b275b1 (.)
        ];
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
        $this->telegramForm->fill();
    }
}
