<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class EmailAttachmentData extends Data
{
    public function __construct(
        private string $content,
<<<<<<< HEAD
        public string $name = 'attachment.pdf',
        public string $contentType = 'application/pdf'
    ) {}


=======
        public string $name,
        public string $contentType = 'application/octet-stream'
    ) {}

>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
    public function getContent(): string
    {
        return $this->content;
    }
}
