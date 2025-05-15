<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Test Invio Notifiche Push
        </x-slot>

        <x-slot name="description">
            Utilizza questo form per testare l'invio di notifiche push ai dispositivi mobili tramite diversi servizi.
        </x-slot>

        {{ $this->notificationForm }}

        <x-slot name="footer">
            <div class="flex items-center justify-between gap-x-3">
                <div>
                    <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendNotification()" />
                </div>
                <div>
                    <x-filament-panels::form.actions :actions="$this->getNotificationFormActions()" />
                </div>
            </div>
        </x-slot>
    </x-filament::section>
</x-filament-panels::page>
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
=======
<x-filament::page>
=======
>>>>>>> Stashed changes

        {{ $this->notificationForm }}

<<<<<<< Updated upstream
=======
<x-filament::page>

    <x-filament-panels::form wire:submit="sendNotification()">
        {{ $this->notificationForm }}

>>>>>>> 064a54f (.)
        <x-filament-panels::form.actions :actions="$this->getNotificationFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendNotification()" />

    </x-filament-panels::form>
</x-filament::page>
<<<<<<< HEAD
>>>>>>> a5a128a (.)
=======
        <x-slot name="footer">
            <div class="flex items-center justify-between gap-x-3">
                <div>
                    <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendNotification()" />
                </div>
                <div>
                    <x-filament-panels::form.actions :actions="$this->getNotificationFormActions()" />
                </div>
            </div>
        </x-slot>
    </x-filament::section>
</x-filament-panels::page>
>>>>>>> Stashed changes
=======
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
