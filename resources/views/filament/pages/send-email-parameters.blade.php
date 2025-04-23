<x-filament::page>

    <x-filament-panels::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

<<<<<<< HEAD
        <x-filament-panels::form.actions
            :actions="$this->getEmailFormActions()"
        />
=======
        <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-panels::form>
</x-filament::page>
