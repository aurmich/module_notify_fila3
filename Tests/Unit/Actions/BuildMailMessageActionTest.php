<?php

namespace Tests\Unit\Modules\Notify\Actions;

use Modules\Notify\Actions\BuildMailMessageAction;
use Tests\TestCase;

/**
 * Class BuildMailMessageActionTest.
 *
 * @covers \Modules\Notify\Actions\BuildMailMessageAction
 */
final class BuildMailMessageActionTest extends TestCase
{
    private BuildMailMessageAction $buildMailMessageAction;

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
        $this->buildMailMessageAction = new BuildMailMessageAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->buildMailMessageAction);
    }

    public function testExecute(): void
    {
        /**
* 
         *
 * @todo This test is incomplete. 
*/
        self::markTestIncomplete();
    }
}