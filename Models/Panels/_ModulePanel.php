<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Panels;

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class _ModulePanel.
 */
class _ModulePanel extends XotBasePanel {
    public function actions(): array {
        return [
            new Actions\TestSmsAction(),
            new Actions\TestMailAction(),
<<<<<<< HEAD
            new Actions\TrySendMailAction(),
=======
>>>>>>> 42aa20e (.)
        ];
    }
}