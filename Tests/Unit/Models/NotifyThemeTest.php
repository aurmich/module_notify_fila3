<?php

namespace Tests\Unit\Modules\Notify\Models;

use Modules\Notify\Models\NotifyTheme;
use Tests\TestCase;

/**
 * Class NotifyThemeTest.
 *
 * @covers \Modules\Notify\Models\NotifyTheme
 */
final class NotifyThemeTest extends TestCase
{
    private NotifyTheme $notifyTheme;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /**
* 
         *
 * @todo Correctly instantiate tested object to use it. 
*/
        $this->notifyTheme = new NotifyTheme();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->notifyTheme);
    }

    public function testGetLogoAttribute(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }

    public function testLinkable(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }
}