<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationResource\Pages;

<<<<<<< HEAD
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;

class ViewNotification extends XotBaseViewRecord
{
    protected static string $resource = NotificationResource::class;

=======
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;

class ViewNotification extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
{
    protected static string $resource = NotificationResource::class;
    
>>>>>>> 9165bf1 (.)
    /**
     * @return array<\Filament\Infolists\Components\Component>
     */
    protected function getInfolistSchema(): array
    {
        return [
            Section::make()
                ->schema([
                    TextEntry::make('id'),
                    TextEntry::make('type'),
                    TextEntry::make('notifiable_type'),
                    TextEntry::make('notifiable_id'),
                    TextEntry::make('data'),
<<<<<<< HEAD
                    TextEntry::make('read_at')
                        ->dateTime(),
                    TextEntry::make('created_at')
                        ->dateTime(),
                    TextEntry::make('updated_at')
                        ->dateTime(),
=======
                    TextEntry::make('read_at'),
                    TextEntry::make('created_at'),
                    TextEntry::make('updated_at'),
>>>>>>> 9165bf1 (.)
                ])
        ];
    }
}
