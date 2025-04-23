<x-filament::page>

    <x-filament-panels::form wire:submit="sendEmail()">
        {{ $this->emailForm }}
        {{ $error_message ?? '--' }}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <x-filament-panels::form.actions
            :actions="$this->getEmailFormActions()"
        />
=======
        <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />
>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
=======
=======
>>>>>>> a2dd458 (fix: auto resolve conflict)
=======
>>>>>>> f58c718 (.)
        <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />
        <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />
        <x-filament-panels::form.actions
            :actions="$this->getEmailFormActions()"
        />
<<<<<<< HEAD
>>>>>>> 9165bf1 (.)
>>>>>>> 5a1e6f8 (fix: auto resolve conflict)
<<<<<<< HEAD
>>>>>>> 06e3ad9 (fix: auto resolve conflict)
=======
=======
        <x-filament-panels::form.actions
            :actions="$this->getEmailFormActions()"
        />
>>>>>>> ba48b8c (.)
>>>>>>> a2dd458 (fix: auto resolve conflict)

=======
          <x-filament-panels::form.actions
            :actions="$this->getEmailFormActions()"
        />
 
>>>>>>> f58c718 (.)
        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-panels::form>
</x-filament::page>
