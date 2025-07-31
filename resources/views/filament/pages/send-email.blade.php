<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Test Invio Email
        </x-slot>
<<<<<<< Updated upstream

        <x-slot name="description">
            Utilizza questo form per testare l'invio di email tramite diversi provider e configurazioni.
        </x-slot>


        <x-filament-panels::form wire:submit="sendEmail()">
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />

            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

        </x-filament-panels::form>
    </x-filament::section>
</x-filament-panels::page>
=======
<x-filament::page>
=======
>>>>>>> Stashed changes

        <x-slot name="description">
            Utilizza questo form per testare l'invio di email tramite diversi provider e configurazioni.
        </x-slot>

<<<<<<< Updated upstream
        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-panels::form>
</x-filament::page>
>>>>>>> a5a128a (.)
=======

        <x-filament-panels::form wire:submit="sendEmail()">
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />

            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

        </x-filament-panels::form>
    </x-filament::section>
</x-filament-panels::page>
>>>>>>> Stashed changes
