<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class EmailAttachmentData extends Data
{
    public function __construct(
        private string $content,
        public string $name = 'attachment.pdf',
        public string $contentType = 'application/pdf'
    ) {}


    public function getContent(): string
    {
        return $this->content;
    }
}
