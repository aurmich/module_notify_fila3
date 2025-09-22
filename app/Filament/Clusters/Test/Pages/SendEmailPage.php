<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

=======
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\EmailData;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;


>>>>>>> 2b275b1 (.)
/**
 * @property ComponentContainer $emailForm
 */
class SendEmailPage extends XotBasePage
{
<<<<<<< HEAD
    // use NavigationLabelTrait;

    public null|array $emailData = [];

    protected static null|string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.pages.send-email';

    protected static null|string $cluster = Test::class;
=======

    // use NavigationLabelTrait;

    public ?array $emailData = [];

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.pages.send-email';

    protected static ?string $cluster = Test::class;
>>>>>>> 2b275b1 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    public function emailForm(Form $form): Form
    {
<<<<<<< HEAD
        return $form->schema($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

=======
        return $form
            ->schema($this->getEmailFormSchema())
            ->model($this->getUser())
            ->statePath('emailData');
    }
    
>>>>>>> 2b275b1 (.)
    public function getEmailFormSchema(): array
    {
        return [
            'section' => Forms\Components\Section::make()
                // ->description('Update your account\'s profile information and email address.')
                ->schema([
                    'to' => Forms\Components\TextInput::make('to')
                        // ->unique(ignoreRecord: true)
                        ->email()
                        ->required(),
<<<<<<< HEAD
                    'subject' => Forms\Components\TextInput::make('subject')->required(),
                    'body_html' => Forms\Components\RichEditor::make('body_html')->required(),
=======
                    'subject' => Forms\Components\TextInput::make('subject')
                        ->required(),
                    'body_html' => Forms\Components\RichEditor::make('body_html')
                        ->required(),
>>>>>>> 2b275b1 (.)
                ]),
        ];
    }

    public function sendEmail(): void
    {
        $data = $this->emailForm->getState();
        $email_data = EmailData::from($data);

<<<<<<< HEAD
        Mail::to($data['to'])->send(new EmailDataEmail($email_data));
=======
        Mail::to($data['to'])->send(
            new EmailDataEmail($email_data)
        );
>>>>>>> 2b275b1 (.)

        Notification::make()
            ->success()
            // ->title(__('filament-panels::pages/auth/edit-profile.notifications.saved.title'))
            ->title(__('check your email client'))
            ->send();
    }

    protected function getForms(): array
    {
        return [
            'emailForm',
        ];
    }

    protected function getEmailFormActions(): array
    {
        return [
            Action::make('emailFormActions')
<<<<<<< HEAD
                
=======
                //
>>>>>>> 2b275b1 (.)

                ->submit('emailFormActions'),
        ];
    }

<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> 2b275b1 (.)
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
        if (!($user instanceof Model)) {
            throw new \Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
=======
        if (! $user instanceof Model) {
            throw new \Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> 2b275b1 (.)
        }

        return $user;
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
        $this->emailForm->fill();
    }
}
