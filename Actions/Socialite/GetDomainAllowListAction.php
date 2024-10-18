<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite
 */

declare(strict_types=1);

namespace Modules\User\Actions\Socialite;

use Exception;
use Illuminate\Support\Arr;
use Spatie\QueueableAction\QueueableAction;

use function is_array;
use function is_string;

class GetDomainAllowListAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(): array
    {
        $res = config('filament-socialite.domain_allowlist');
        if (is_string($res)) {
            return Arr::wrap($res);
        }

        if (is_array($res)) {
            return $res;
        }

        throw new Exception('check config filament-socialite.domain_allowlist');
    }
}
