<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class EmailAttachmentData extends Data
{
    public function __construct(
        private string $content,
<<<<<<< HEAD
<<<<<<< HEAD
        public string $name = 'attachment.pdf',
        public string $contentType = 'application/pdf'
    ) {}
<<<<<<< HEAD


=======
        public string $name,
        public string $contentType = 'application/octet-stream'
=======
        public string $name = 'attachment.pdf',
        public string $contentType = 'application/pdf'
>>>>>>> a2dd458 (fix: auto resolve conflict)
    ) {}
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> f58c718 (.)
    public string $name;

    public string $contentType;

    private string $content;

    public function __construct(
        string $content,
        string $name = 'attachment.pdf',
        string $contentType = 'application/pdf'
    ) {
        $this->content = $content;
        $this->name = $name;
        $this->contentType = $contentType;
    }


>>>>>>> 4f42322 (Merge remote-tracking branch 'origin/dev' into dev)
    public function getContent(): string
    {
        return $this->content;
    }
}
