<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Fields;

use Filament\Forms\Components\Builder;
use Modules\Blog\Filament\Blocks\Chart;
use Modules\Blog\Filament\Blocks\Image;
use Modules\Blog\Filament\Blocks\ImagesGallery;
use Modules\Blog\Filament\Blocks\Paragraph;
use Modules\Blog\Filament\Blocks\Title;
use Modules\Blog\Filament\Blocks\ArticleList;
use Modules\Rating\Filament\Blocks\Rating;

class PageContent
{
    public static function make(
        string $name,
        string $context = 'form',
    ): Builder {
        return Builder::make($name)
            ->blocks([
                Title::make(context: $context),
                Paragraph::make(context: $context),
                Image::make(context: $context),
                ImagesGallery::make(context: $context),
                //Rating::make(context: $context),
                //Chart::make(context: $context),
                ArticleList::make(context: $context),

            ])
            ->collapsible();
    }
}
